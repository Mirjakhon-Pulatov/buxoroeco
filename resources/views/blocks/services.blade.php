@extends('layout.master')
@section('seo')
<title>Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi | Davlat xizmatlari</title>
    
    <meta name="description" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz">
    <meta property="og:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta property="og:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, davlat-xizmatlari, {{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz">
    <meta property="twitter:url" content="https://buxoroeco.uz">
    <meta name="twitter:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta name="twitter:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, davlat-xizmatlari, {{ url()->current() }}">
    <meta name="twitter:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
@endsection
@section('style')

@endsection
@section('content')
    <!-- header style two -->
    <!-- rts breadcrumb area -->
    <div class="rts-bread-crumb-area bg_image bg-breadcrumb">
        <div class="container ptb--50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">
                            <span class="bg-text-stok">Davlat xizmatlari</span>
                            <div class="title skew-up">
                                <a href="{{ url()->current() }}">Davlat xizmatlari</a>
                            </div>
                            <div class="slug skew-up">
                                <a href="{{ url('/') }}">Asosiy/</a>
                                <a class="active" href="{{ url()->current() }}">Davlat xizmatlari</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->
    <!-- header style two End -->


    <!-- blog details area start -->
    <div class="rts-blog-list-area rts-section-gap" style="padding-top: 60px;">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <div class="left-service-details-wrapper">
                        <div class="content--sd-top  reveal">
                            <h3 class="title title-g text-center" style="margin-top: 0px;">Davlat xizmatlari</h3>
                            <div class="rts-single-wized">
                                <h5><a href="https://my.gov.uz/oz/service/170">Suvdan maxsus foydalanish yoki suvni
                                        maxsus iste’mol qilishga ruxsatnoma
                                        berish (tabiiy suv obyektlaridan)</a></h5>
                            </div>
                            <div class="rts-single-wized">
                                <h5><a href="https://my.gov.uz/oz/service/258">Tarkibida ozonni buzuvchi moddalar
                                        bo‘lgan mahsulotlarni import yoki eksport qilish ruxsatnomasini olishga ariza
                                        yuborish</a></h5>
                            </div>
                            <div class="rts-single-wized">
                                <h5><a href="https://my.gov.uz/oz/service/171">Davlat o‘rmon fondiga kirmaydigan
                                        daraxtlar va butalarni kesishga ruxsatnoma olish</a></h5>
                            </div>
                            <div class="rts-single-wized">
                                <h5><a href="https://my.gov.uz/oz/service/349">Loyiha-smeta hujjatlarini kelishish</a>
                                </h5>
                            </div>


                        </div>
                    </div>

                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wizered area -->
                @include('blocks.sidebar')
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- blog details area end -->
@endsection
@section('script')

@endsection
