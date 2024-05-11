@extends('layout.master')
@section('seo')
<title>Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi | Galereya</title>
    
    <meta name="description" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz">
    <meta property="og:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta property="og:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, galereya, {{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz">
    <meta property="twitter:url" content="https://buxoroeco.uz">
    <meta name="twitter:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta name="twitter:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, galereya, {{ url()->current() }}">
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
                    Foto Galereya
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
