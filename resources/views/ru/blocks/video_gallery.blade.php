@extends('ru.layout.master')
@section('seo')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <title>Бухарское областное управление по экологии и охране окружающей среды | Видео Галерея</title>

    <meta name="description" content="Бухарское областное управление по экологии и охране окружающей среды">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz/ru">
    <meta property="og:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta property="og:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, видео галерея">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz/ru">
    <meta property="twitter:url" content="https://buxoroeco.uz/ru">
    <meta name="twitter:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta name="twitter:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, видео галерея">
    <meta name="twitter:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
@endsection
@section('style')
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="title-area-center title-g">
                <p class="pre">

                </p>
                <h2 class="title">
                    Видео Галерея
                </h2>
            </div>
        </div>
    </div>

    <div class="rts-project-details-area rts-section-gap">
        <div class="container">
            <section id="gallery">
                <div class="container">
                    <div id="image-gallery">
                        <div class="row">
                            @php
                                $videos = \Illuminate\Support\Facades\DB::select("Select * from videogallery order by `position` asc");
                            @endphp
                            @foreach($videos as $video)

                                <div class="col-md-4">
                                    <div class="video-area-project-details">
                                        <iframe width="350" height="220" src="{{ $video->link }}"  loading="lazy"
                                                title="YouTube video player"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- End row -->
                    </div><!-- End image gallery -->
                </div><!-- End container -->
            </section>
        </div>
    </div>
@endsection
@section('script')

@endsection
