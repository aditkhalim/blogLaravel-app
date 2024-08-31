<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.index', [
            'latest_post' => Article::with('User')->latest()->first(),
            'articles' => Article::with('Category')->whereStatus(1)->latest()->simplePaginate(4),
        ]);
        
    }

    public function about() {
        return view('front.home.about');
    }
}
