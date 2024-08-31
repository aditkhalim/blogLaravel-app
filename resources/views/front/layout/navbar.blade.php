<nav class="navbar navbar-expand-lg fw-semibold" style="background-color: #729762;">
    <div class="container">
        <a class="navbar-brand text-dark" href="{{ url('/') }}">{{ $config['blogname'] }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/articles') }}">Articles</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($category_navbar as $item)
                            <li><a class="dropdown-item" href="{{ url('category/'.$item->slug) }}">{{ $item->name }}</a></li>
                        @endforeach
                      
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item disabled" href="{{ url('all-category') }}">Something else here</a></li>
                    </ul>
                  </li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/contact') }}">Contact</a></li>
                {{-- <li class="nav-item"><a class="btn btn-outline-secondary text-light fw-bold" href="{{ url('/login') }}">Login</a></li> --}}
            </ul>
        </div>
    </div>
</nav>