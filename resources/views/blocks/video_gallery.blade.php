@extends('layout.master')
@section('seo')
<title>Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi | Video galereya</title>
    
    <meta name="description" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz">
    <meta property="og:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta property="og:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, video-galereya, {{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz">
    <meta property="twitter:url" content="https://buxoroeco.uz">
    <meta name="twitter:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta name="twitter:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, video-galereya, {{ url()->current() }}">
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
                    Video Galereya
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
                                        <iframe width="350" height="220"  loading="lazy" src="{{ $video->link }}"
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
