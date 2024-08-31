@extends('front.layout.template')

@section('title', $article->title)

@section('content')

        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8" data-aos="fade-up">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ url('p/'.$article->slug) }}">
                            <img class="card-img-top single-img" src="{{ asset('storage/back/'. $article->img) }}" alt="..." />
                        </a>
                        <div class="card-body">
                            <div class="small text-muted">
                                {{ $article->created_at->format('d-M-Y') }} - 
                                <a href="{{ url('category/'.$article->Category->slug) }}" class="text-decoration-none link-">{{ $article->Category->name }}</a> -
                                {{ $article->views }}x views <br>
                                {{ $article->User->name }}
                            </div>
                            <h1 class="card-title">{{ $article->title }}</h1>
                            <p class="card-text">
                                {!! $article->desc !!}
                            </p>

                            <div class="mt-5">
                                <p style="font-size: 15px"><b>Share :</b></p>
                                <a href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank"><i class="fa-brands fa-square-facebook fa-2xl" style="color: #4267b2;"></i></a>
                                <a href="https://api.whatsapp.com/send?text={{ url()->current() }}" target="_blank"><i class="fa-brands fa-square-whatsapp fa-2xl" style="color: #25d366;"></i></a>
                                <a href="https://x.com/intent/post?text={{ url()->current() }}"><i class="fa-brands fa-square-x-twitter fa-2xl" style="color: #14171a;"></i></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Side widgets-->
                @include('front.layout.side-widget')

            </div>
        </div>
    
@endsection