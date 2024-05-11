@extends('ru.layout.master')
@section('seo')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <title>Бухарское областное управление по экологии и охране окружающей среды | Фото Галерея</title>

    <meta name="description" content="Бухарское областное управление по экологии и охране окружающей среды">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz/ru">
    <meta property="og:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta property="og:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, фото галерея">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz/ru">
    <meta property="twitter:url" content="https://buxoroeco.uz/ru">
    <meta name="twitter:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta name="twitter:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, фото галерея">
    <meta name="twitter:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('public/styles/assets/lightGallery/css/lightgallery-bundle.css') }}"/>
    <style>

        #lg-prev-1 {
            width: 50px !important;
        }

        #lg-next-1 {
            width: 50px !important;
        }

        #lg-components-1 {
            display: none !important;
        }

    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="title-area-center title-g">
                <p class="pre">

                </p>
                <h2 class="title">
                    Фото Галерея
                </h2>
            </div>
        </div>
    </div>

    <div class="rts-project-details-area rts-section-gap">
        <div class="container">
            <section id="gallery">
                <div class="container">
                    <div>
                        <div id="image-gallery" class="row">
                            @php
                                $images = \Illuminate\Support\Facades\DB::select("Select `file` from `gallerys` where album_id = 4 ");
                            @endphp
                            @foreach($images as $image)

                                <a class="col-md-4 mb-3"
                                   href="{{ asset('public/uploads/gallery/photos/'.$image->file) }}">
                                    <div style="background-image: url('{{ asset('public/uploads/gallery/thumbnails/'.$image->file) }}');
                                                                                     width: 100%;
                                                                                     height: 250px;
                                                                                     background-size: cover;
                                                                                     background-position: center center;
                                                                                     background-repeat: no-repeat;">
                                    </div>
                                </a>

                            @endforeach
                        </div><!-- End row -->
                    </div><!-- End image gallery -->
                </div><!-- End container -->
            </section>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('public/styles/assets/lightGallery/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('public/styles/assets/lightGallery/js/lg-zoom.min.js') }}"></script>
    <script src="{{ asset('public/styles/assets/lightGallery/js/lg-thumbnail.min.js') }}"></script>
    <script src="{{ asset('public/styles/assets/lightGallery/js/lg-fullscreen.min.js') }}"></script>
    <script src="{{ asset('public/styles/assets/lightGallery/js/lg-autoplay.min.js') }}"></script>
    <script type="text/javascript">
        // // Предположим, что у вас есть элементы с классом 'photos'
        // var elements = document.getElementsByClassName('photos');
        //
        // // Проходимся по элементам (предполагая, что их может быть несколько)
        // Array.from(elements).forEach(function (element) {
        //     lightGallery(element, {
        //         plugins: [lgZoom, lgThumbnail, lgFullscreen, lgAutoplay],
        //         speed: 500,
        //         // ... другие настройки
        //     });
        // });
        lightGallery(document.getElementById('image-gallery'), {
            plugins: [lgZoom, lgThumbnail],
            licenseKey: 'your_license_key',
            speed: 500,
            // ... other settings
        });

    </script>
@endsection
