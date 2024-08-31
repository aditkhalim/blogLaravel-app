@extends('front.layout.template')

@section('title', 'About Blog CMS Laravel')

@section('content')

        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8" data-aos="zoom-in-up" data-aos-duration="1000">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm">
                        <a href="">
                            <img class="card-img-top" src="{{ asset('front/img/about-img.jpg') }}" alt="..." />
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">About Blog Adit Florist</h2>
                            <div class="small text-muted">
                                {{ date('d-M-Y') }}
                            </div>
                            <p class="card-text">
                                <p>
                                    Selamat datang di blog Adit Florist, sudut kecil di internet di mana keindahan bunga dan seni merangkai menjadi pusat perhatian. Di sini, kami berbagi passion kami dalam dunia floristry—dari tips merawat tanaman hingga cerita di balik setiap jenis bunga.
                                </p>

                                <p>
                                    Blog ini dibuat dengan tujuan untuk menginspirasi dan memberikan wawasan bagi para pecinta bunga, baik Anda yang baru mulai menjelajahi dunia floristry maupun Anda yang sudah lama terjun dalam hobi atau profesi ini. Kami percaya bahwa setiap bunga memiliki cerita, dan melalui blog ini, kami ingin membawa Anda lebih dekat dengan kisah-kisah itu.
                                </p>
                                
                                <p>
                                    Setiap artikel yang kami tulis adalah cerminan dari cinta kami terhadap alam dan keindahan yang bisa tercipta dari tangan manusia. Dari tutorial merangkai bunga yang simpel hingga eksplorasi makna di balik bunga-bunga tertentu, blog ini adalah tempat untuk belajar, bereksperimen, dan merayakan keindahan dalam setiap kelopaknya.
                                </p>

                                <p>
                                    Kami juga berbagi pengalaman dari balik layar toko bunga kami, termasuk tren floristry terkini, panduan memilih bunga untuk berbagai kesempatan, dan cara-cara kreatif untuk menghadirkan keindahan alami ke dalam kehidupan sehari-hari Anda.
                                </p>

                                <p>
                                    Jadi, apakah Anda ingin menambah pengetahuan tentang bunga, mencari inspirasi untuk dekorasi rumah, atau sekadar menikmati keindahan alami, Adit Florist adalah tempat yang tepat untuk Anda. Mari kita menjelajahi dunia bunga bersama-sama!
                                </p>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- Side widgets-->
                @include('front.layout.side-widget')

            </div>
        </div>
    
@endsection

        