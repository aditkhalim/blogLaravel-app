<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="Adit Nur Khalim" />
        @stack('meta-seo')
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('front/img/favicon.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @stack('css')
    </head>
    <body>
        <div class="min-vh-100 d-flex flex-column justify-content-between">
            <!-- Responsive navbar-->
            @include('front.layout.navbar')
            <!-- Page header with logo and tagline-->
            <header class="py-2 bg-light mb-2">
                <img src="{{ asset('front/img/banner.svg') }}" class="card-img" alt="...">
                {{-- untuk merubah tampilan template --}}
                {{-- <div class="container">
                    <div class="text-left my-5">
                        <h1 class="fw-bolder">{{ $config['title'] }}</h1>
                        <p class="lead mb-0">{{ $config['caption'] }}</p>
                    </div>
                </div> --}}
            </header>

            {{-- untuk menambahkan ads di header --}}
            {{-- <div class="mb-3 container">
                <div class="row">
                    <div class="col-3">for ads</div>
                    <div class="col-6">
                        <a href="{{ $config['ads_header'] }}" target="_blank" rel="noopener noreferrer">
                            <img src="{{ $config['ads_header'] }}" alt="ads_header" class="image-fluid" width="50%">
                        </a>
                    </div>
                    <div class="col-3">header</div>
                </div>
            </div> --}}

            @yield('content')

            {{-- untuk menambahkan ads di footer --}}
            {{-- <div class="mb-3 container">
                <div class="row">
                    <div class="col-3">for ads</div>
                    <div class="col-6">
                        <a href="{{ $config['ads_header'] }}" target="_blank" rel="noopener noreferrer">
                            <img src="{{ $config['ads_footer'] }}" alt="ads_header" class="image-fluid" width="50%">
                        </a>
                    </div>
                    <div class="col-3">footer</div>
                </div>
            </div> --}}

            <!-- Footer-->
            <footer class="py-5" style="background-color: #729762;">
                <div class="container">
                    <p class="m-0 text-center text-dark fw-semibold">Copyright &copy; {{ $config['footer'] }} {{ date('Y') }}</p>
                </div>
            </footer>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('front/js/scripts.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        @stack('js')
    </body>

</html>
