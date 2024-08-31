@extends('front.layout.template')

@section('title', 'Contact Blog CMS Laravel')

@section('content')

        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8" data-aos="zoom-in-up" data-aos-duration="1000">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm">
                        <div class="text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253312.73450876764!2d109.96670137069344!3d-7.239528733465521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7077510900e559%3A0x3027a76e352bb50!2sKabupaten%20Temanggung%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1724919395007!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">Contact Blog Adit Florist</h2>
                            <div class="small text-muted">
                                {{ date('d-M-Y') }}
                            </div>
                            <p class="card-text">
                                <p>
                                    Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran, atau hanya ingin berbagi cerita tentang pengalaman Anda dengan bunga dan tanaman, jangan ragu untuk menghubungi kami. Kami di sini untuk membantu dan mendiskusikan semua hal tentang floristry.
                                </p>

                                <p>
                                    Anda dapat mengirimkan email langsung ke adit.nur97@gmail.com . Kami akan berusaha untuk merespon secepat mungkin. Terima kasih telah mengunjungi blog kami, mari terus menyebarkan keindahan alam bersama!
                                </p>
                            </p>

                            <div class="d-md-flex">
                                <div class="col-lg-6">
                                    <ul class="" style="list-style-type: none">
                                        <li><i class="fa-solid fa-phone fa-lg"></i><a href="" class="text-decoration-none text-secondary"> {{ $config['phone'] }}</a></li>
                                        <li><i class="fa-brands fa-square-whatsapp fa-lg"></i><a href="" class="text-decoration-none text-secondary"> {{ $config['phone'] }}</a></li>
                                        <li><i class="fa-solid fa-at fa-lg"></i></i><a href="" class="text-decoration-none text-secondary"> {{ $config['email'] }}</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul style="list-style-type: none">
                                        <li><i class="fa-brands fa-square-instagram fa-lg"></i><a href="https://instagram.com/{{ $config['instagram'] }}" class="text-decoration-none text-secondary">Instagram</a></li>
                                        <li><i class="fa-brands fa-x-twitter fa-lg"></i><a href="https://x.com/YourIronMannnn" class="text-decoration-none text-secondary"> X</a></li>
                                        <li><i class="fa-brands fa-square-github fa-lg"></i><a href="https://github.com/aditkhalim" class="text-decoration-none text-secondary"> GitHub</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Side widgets-->
                @include('front.layout.side-widget')

            </div>
        </div>
    
@endsection
