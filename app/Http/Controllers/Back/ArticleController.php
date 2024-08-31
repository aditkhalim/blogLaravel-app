<?php

namespace App\Http\Controllers\Back;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $article = Article::with('Category')->latest()->get();

            return DataTables::of($article)
                // CUSTOM KOLOM 
                ->addIndexColumn()
                ->addColumn('category_id', function($article) {
                    return $article->Category->name;
                })
                ->addColumn('status', function($article) {
                    if ($article->status == 0) {
                        return '<span class="badge bg-danger">Private</span>';
                    } else {
                        return '<span class="badge bg-success">Published</span>';
                    }
                })
                ->addColumn('button', function($article) {
                    return '<div>
                                <a href="article/'.$article->id.'" class="btn btn-secondary">Detail</a>
                                <a href="article/'.$article->id.'/edit" class="btn btn-primary">Edit</a>
                                <a href="#" onClick="deleteArticle(this)" data-id="'.$article->id.'" class="btn btn-danger">Delete</a>
                            </div>';
                })
                // PANGGIL CUSTOM KOLOM
                ->rawColumns(['category_id', 'status', 'button'])
                ->make();
        }

        return view('back.article.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.article.create', [
            'categories' => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('img');
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        $file->storeAs('public/back/', $fileName);

        $data['user_id'] = auth()->user()->id; // UNTUK MENAMPILKAN USER YANG MENJADI WRITER BERDASARKAN USER YANG LOGIN
        $data['img'] = $fileName;
        $data['slug'] = Str::slug($data['title']);

        Article::create($data);

        return redirect(url('article'))->with('success', 'Data article successfully stored');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('back.article.show', [
            'article' =>Article::with(['User', 'Category'])->find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back.article.update', [
            'article'       => Article::find($id),
            'categories'    => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/back/', $fileName);

            Storage::delete('public/back/'.$request->oldImg);

            $data['img'] = $fileName;
        } else {
            $data['img'] = $request->oldImg;
        }
        
        $data['user_id'] = auth()->user()->id;
        $data['slug'] = Str::slug($data['title']);

        Article::find($id)->update($data);

        return redirect(url('article'))->with('success', 'Data article successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Article::find($id);
        Storage::delete('public/back/'.$data->img);
        $data->delete();

        return response()->json([
            'message' => 'Article deleted successfully'
        ]);
    }
}
