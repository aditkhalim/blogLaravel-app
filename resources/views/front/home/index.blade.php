@extends('front.layout.template')

@section('title', 'Blog CMS Laravel')

@section('content')

        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm" data-aos="zoom-in-up" data-aos-duration="1000">
                        <a href="{{ url('p/'.$latest_post->slug) }}">
                            <img class="card-img-top featured-img" src="{{ asset('storage/back/'. $latest_post->img) }}" alt="..." />
                        </a>
                        <div class="card-body">
                            <div class="small text-muted">
                                {{ $latest_post->created_at->format('d-M-Y') }} - 
                                <a href="{{ url('category/'.$latest_post->Category->slug) }}" class="text-decoration-none">{{ $latest_post->Category->name }}</a><br>
                                {{ $latest_post->User->name }}
                            </div>
                            <h2 class="card-title">{{ $latest_post->title }}</h2>
                            <p class="card-text">{{ Str::limit(strip_tags($latest_post->desc), 100, '...') }}</p>
                            <a class="btn btn-primary" href="{{ url('p/'.$latest_post->slug) }}">Read more →</a>
                        </div>
                    </div>

                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($articles as $item)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                            <!-- Blog post-->
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ url('p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/'. $item->img) }}" alt="..." /></a>
                                <div class="card-body card-height">
                                    <div class="small text-muted">
                                        {{ $item->created_at->format('d-M-Y') }} - 
                                        <a href="{{ url('category/'.$item->Category->slug) }}" class="text-decoration-none">{{ $item->Category->name }}</a><br>{{ $item->User->name }}
                                    </div>
                                    <h2 class="card-title h4">{{ $item->title }}</h2>
                                    <p class="card-text">{{ Str::limit(strip_tags($item->desc), 100, '...') }}</p>
                                    <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination-->
                    <div class="pagination justify-content-center my-4">
                        {{ $articles->links() }}
                    </div>
                </div>
                <!-- Side widgets-->
                @include('front.layout.side-widget')

            </div>
        </div>
    
@endsection

        