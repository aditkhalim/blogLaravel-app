@extends('front.layout.template')

@section('title', 'All Category')

@section('content')

        <!-- Page content-->
        <div class="container">
            <p>Showing all articles with category: </p>

            <div class="row">
                @foreach ($category as $item)
                <div class="col-lg-2 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="text-center">
                                    <span>
                                        <a href="{{ url('category/'.$item->slug) }}" class="text-decoration-none text-dark">
                                            <i class="fa-duotone fa-solid fa-folder-open fa-2xl"></i>
                                        </a>
                                    </span>
                                    <a href="{{ url('category/'.$item->slug) }}" class="text-decoration-none text-dark">
                                        <h5 class="card-title mt-2">{{ $item->name }} ({{ $item->articles_count }})</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- {{ $articles->links() }} --}}
        </div>
    
@endsection