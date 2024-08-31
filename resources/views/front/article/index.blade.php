@extends('front.layout.template')

@section('title', 'Article Blog')

@section('content')

        <!-- Page content-->
        <div class="container">
            <div class="mb-3">
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" type="text" name="keyword" placeholder="Search..." />
                        <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            @if ($keyword)
                <p>Showing articles with keyword: <b>{{ $keyword }}</b></p>
            @endif

            <div class="row">
                <!-- Blog entries-->
                @forelse ($articles as $item)
                    <div class="col-lg-4" data-aos="fade-up"
                    data-aos-duration="1500">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ url('p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/'. $item->img) }}" alt="..." /></a>
                            <div class="card-body card-height">
                                <div class="small text-muted">
                                    {{ $item->created_at->format('d-M-Y') }} - 
                                    <a href="{{ url('category/'.$item->Category->slug) }}" class="text-decoration-none">{{ $item->Category->name }}</a><br>
                                    {{ $item->User->name }}
                                </div>
                                <h2 class="card-title h4">{{ $item->title }}</h2>
                                <p class="card-text">{{ Str::limit(strip_tags($item->desc), 100, '...') }}</p>
                                <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>There is not available articles with keyword <b>{{ $keyword }}</b></h3>
                @endforelse
            </div>
            {{ $articles->links() }}
        </div>
    
@endsection