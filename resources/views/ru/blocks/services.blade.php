@extends('ru.layout.master')
@section('seo')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <title>Бухарское областное управление по экологии и охране окружающей среды | Государственные услуги</title>

    <meta name="description" content="Бухарское областное управление по экологии и охране окружающей среды">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz/ru">
    <meta property="og:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta property="og:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, государственные услуги">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz/ru">
    <meta property="twitter:url" content="https://buxoroeco.uz/ru">
    <meta name="twitter:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta name="twitter:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль,  государственные услуги">
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
                            <span class="bg-text-stok">Гос. услуги</span>
                            <div class="title skew-up">
                                <a href="{{ url()->current() }}">Государственные услуги</a>
                            </div>
                            <div class="slug skew-up">
                                <a href="{{ url('/ru') }}">Главная/</a>
                                <a class="active" href="{{ url()->current() }}">Государственные услуги</a>
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
                            <h3 class="title title-g text-center" style="margin-top: 0px;">Государственные услуги</h3>
                            <div class="rts-single-wized">
                                <h5><a href="https://my.gov.uz/ru/service/170">Разрешение на специальное водопользование или специальное водопотребление (из природных водоемов)</a></h5>
                            </div>
                            <div class="rts-single-wized">
                                <h5><a href="https://my.gov.uz/ru/service/258">Подать заявку на получение разрешения на ввоз или вывоз продуктов, содержащих озоноразрушающие вещества</a></h5>
                            </div>
                            <div class="rts-single-wized">
                                <h5><a href="https://my.gov.uz/ru/service/171">Получение разрешения на вырубку деревьев и кустарников, не входящих в государственный лесной фонд</a></h5>
                            </div>
                            <div class="rts-single-wized">
                                <h5><a href="https://my.gov.uz/ru/service/349">Утверждение проектно-сметной документации</a>
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
