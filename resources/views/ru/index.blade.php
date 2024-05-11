@extends('ru.layout.master')
@section('seo')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <title>Бухарское областное управление по экологии и охране окружающей среды</title>

    <meta name="description" content="Бухарское областное управление по экологии и охране окружающей среды">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz/ru">
    <meta property="og:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta property="og:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz/ru">
    <meta property="twitter:url" content="https://buxoroeco.uz/ru">
    <meta name="twitter:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta name="twitter:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль">
    <meta name="twitter:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
    <style>
        .p-d {
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        @media only screen and (max-width: 767px) {
            .p-d {
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
            }

            .right-area {
                width: 100% !important;
            }
        }

        .news_imagee {
            width: 100%;
            height: 375px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            z-index: 400;
        }

        .news_imagee::after {
            content: " ";
            width: 100%;
            height: 375px;
            background-color: rgba(0, 0, 0, 0.45);
            z-index: 500;
            position: absolute;
            border-radius: 12px;
        }

        .inner-content-blog {
            z-index: 1000;
        }

        /*  TAMOM 15 QATOR CSS BILAN HAL BO'LDI  */
        /*   ADAPTIV HAM NORMAL */
    </style>
@endsection
@section('content')
    <!-- banner two swiper start -->
    <div class="banner-two-swiper-start">
        <div class="swiper mySwiper-banner-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- single swiper style -->
                    <div class="banner-two-main-wrapper-solaric">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-solari-2-content ptb--200 ptb_sm--130">
                                        <!--<span class="pre">Бухарский отдел экологии</span>-->
                                        <h1 class="banner-title">
                                            Управление природных ресурсов <br> Бухарской области
                                        </h1>
                                        <p class="disc">Вы оставили заявку?
                                            <br>
                                        </p>
                                        <div class="button-solari-banner-area">
                                            <a href="#statistica" class="rts-btn btn-primary">Проверить статус
                                                заявки</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style end -->
                </div>
                <div class="swiper-slide">
                    <!-- single swiper style -->
                    <div class="banner-two-main-wrapper-solaric two">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-solari-2-content ptb--200 ptb_sm--130">
                                        <!--<span class="pre">Бухарский отдел экологии</span>-->
                                        <h1 class="banner-title">
                                            Управление природных ресурсов <br> Бухарской области
                                        </h1>
                                        <p class="disc">Вы оставили заявку ?
                                            <br>
                                        </p>
                                        <div class="button-solari-banner-area">
                                            <a href="#statistica" class="rts-btn btn-primary">Проверить статус
                                                заявки</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style end -->
                </div>
                <div class="swiper-slide">
                    <!-- single swiper style -->
                    <div class="banner-two-main-wrapper-solaric three">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-solari-2-content ptb--200 ptb_sm--130">
                                        <!--<span class="pre">Бухарский отдел экологии</span>-->
                                        <h1 class="banner-title">
                                            Управление природных ресурсов <br> Бухарской области
                                        </h1>
                                        <p class="disc">Вы оставили заявку ?
                                            <br>
                                        </p>
                                        <div class="button-solari-banner-area">
                                            <a href="#statistica" class="rts-btn btn-primary">Проверить статус
                                                заявки</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style end -->
                </div>
            </div>

            <div class="swiper-pagination-b2"></div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>
    </div>
    <!-- banner two swiper end -->

    <div class="row" style="padding-top: 80px;">
        <div class="col-lg-12">
            <div class="title-area-center title-g">
                <h2 class="title">
                    <a href="{{ route('ru.type', ['type'=>'news']) }}">
                        Новости</a>
                </h2>
            </div>
        </div>
    </div>

    <div class="blog-post-area rts-section-gap">
        <div class="container">
            <div class="row g-5 mt--30">
                @php
                    $news = \Illuminate\Support\Facades\DB::select("Select * from `news__ru` order by `date` desc limit 6");
                @endphp
                    <!-- tsikl boshlanishi -->
                @if(count($news)>0)
                    @foreach($news as $new)
                        @php
                            $item_id = $new->code;
                            $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('news', $item_id);
                        @endphp
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- single blog area start -->
                            <div class="blog-style-four">
                                <a href="{{ route('ru.view', ['type'=>'news','title'=>$new->slug]) }}"
                                   class="thumbanil">
                                    <div class="news_imagee"
                                         style="background-image: url({{ asset('public/uploads/gallery/photos/'.$photo) }})"></div>
                                </a>
                                <div class="inner-content-blog">
                                    <div class="head">
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i>
                                            <div class="info">
                                                @php
                                                    // Получаем дату с дефисами из базы данных
                                                    $date_with_dashes = $new->date;

                                                    // Разбиваем дату на элементы
                                                    $date_parts = explode('-', $date_with_dashes);

                                                    // Меняем порядок элементов на "день.месяц.год"
                                                    $date_with_dots = implode('.', array_reverse($date_parts));

                                                    // Выводим дату в нужном формате
                                                    echo $date_with_dots;
                                                @endphp
                                            </div>
                                        </div>
                                        <div class="date time">
                                            <i class="fas fa-eye"></i>
                                            <div class="info">
                                                {{ $new->visited }}
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('ru.view', ['type'=>'news','title'=>$new->slug]) }}">
                                        <h4 class="title sarlavha">{{ $new->title }}</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- single blog area start -->
                        </div>
                    @endforeach
                @else

                @endif
            </div>
        </div>

    </div>


    <div class="row" style="padding-top: 80px;">
        <div class="col-lg-12">
            <div class="title-area-center title-g">
                <h2 class="title">
                    <a href="{{ route('ru.type',['type'=>'ecocontrol']) }}">
                        Эко Контроль</a>
                </h2>
            </div>
        </div>
    </div>

    <div class="blog-post-area rts-section-gap">
        <div class="container">
            <div class="row g-24 mt--20">
                @php
                    $news = \Illuminate\Support\Facades\DB::select("Select * from `ecocontrol__ru` order by `date` desc limit 3");
                @endphp
                    <!-- tsikl boshlanishi -->
                @if(count($news)>0)
                    @foreach($news as $new)
                        @php
                            $item_id = $new->code;
                            $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('ecocontrol', $item_id);
                        @endphp
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- blog-single area start -->
                            <div class="blog-single-one text-center">
                                <a href="{{ route('ru.view', ['type'=>'ecocontrol','title'=>$new->slug]) }}"
                                   class="thumbnail">
                                    <div class="inner">
                                        <div
                                            style="width: 100%; height: 300px; background-image: url('{{ asset('public/uploads/gallery/photos/'. $photo) }}');
                                            background-size: cover;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            "></div>
                                    </div>
                                </a>
                                <div class="head">
                                    <div class="date-area single-info">
                                        <i class="fa-light fa-calendar-days"></i>
                                        <p>
                                            @php
                                                // Получаем дату с дефисами из базы данных
                                                $date_with_dashes = $new->date;

                                                // Разбиваем дату на элементы
                                                $date_parts = explode('-', $date_with_dashes);

                                                // Меняем порядок элементов на "день.месяц.год"
                                                $date_with_dots = implode('.', array_reverse($date_parts));

                                                // Выводим дату в нужном формате
                                                echo $date_with_dots;
                                            @endphp
                                        </p>
                                    </div>
                                    <div class="tag-area single-info">
                                        <i class="fa fa-eye"></i>
                                        <p>{{ $new->visited }}</p>
                                    </div>
                                </div>
                                <div class="body text-start">
                                    <a href="{{ route('view', ['type'=>'ecocontrol','title'=>$new->slug]) }}">
                                        <h5 class="title sarlavha">{{ $new->title }}</h5>
                                    </a>
                                </div>
                            </div>
                            <!-- blog-single area end -->
                        </div>
                    @endforeach
                @else

                @endif

                <!-- tsikl tugashi -->
            </div>
        </div>
    </div>




    <div class="our-working-process-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">

                        <h2 class="title  skew-up" style="opacity: 1;">
                            <div class="word-line" style="display: block; text-align: center; width: 100%;">
                                <div class="word"
                                     style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    Популярные темы
                                </div>

                            </div>
                        </h2>
                    </div>
                </div>
            </div>
            @php
                $titles = \Illuminate\Support\Facades\DB::select("Select * from `specialpages__ru`  order by `position` asc");
            @endphp
            <div class="row g-24 mt--20">
                @foreach($titles as $title)
                    @php
                        $item_id = $title->code;
                        $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('specialpages', $item_id);
                    @endphp
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="{{route('ru.special-page', ['title'=>$title->slug])}}">
                            <!-- single solari steps area staert -->
                            <div class="single-solari-steps-start">
                                <div class="thumbnail p-d">
                                    <div
                                        style="width: 425px; height: 320px; background-image: url('{{ asset('public/uploads/gallery/photos/'.$photo) }}');
                                            background-size: cover;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            "></div>
                                    <div class="steps">
                                        <span>0{{$title->position}}</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title text-center">{{$title->title}}</h5>
                                </div>
                            </div>
                            <!-- single solari steps area end -->
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @php
        $yur =\Illuminate\Support\Facades\DB::select("Select * from `yuridik_murojaats`");
        $jis =\Illuminate\Support\Facades\DB::select("Select * from `jismoniy_murojaats`");
        $all = count($yur) + count($jis);

        $donej = \Illuminate\Support\Facades\DB::select("Select * from `jismoniy_murojaats` where `status` = 'done' ");
        $doney = \Illuminate\Support\Facades\DB::select("Select * from `yuridik_murojaats` where `status` = 'done' ");
        $alldone = count($doney) + count($donej);

        $newj = \Illuminate\Support\Facades\DB::select("Select * from `jismoniy_murojaats` where `status` = 'new' ");
        $newy = \Illuminate\Support\Facades\DB::select("Select * from `yuridik_murojaats` where `status` = 'new' ");
        $allnew = count($newy) + count($newj);
    @endphp
        <!-- rts- clients review area start -->
    <div class="rts-client-review-area-h2 rts-section-gapBottom mt-4" style="padding-top: 120px;" >
        <h2 class="text-center">Статистика обращений</h2>
        <div class="container">
            <div class="row mt--120 g-5 p-d">

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single cpounter up area start -->
                    <div class="single-counter-up-start-solari">
                        <div class="bg-text">{{$all}}</div>
                        <div class="main-content">
                            <p class="text-center">Общее количество обращений:</p>
                            <h2 class="title text-center"><span class="counter">{{$all}}</span></h2>
                        </div>
                    </div>
                    <!-- single cpounter up area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single cpounter up area start -->
                    <div class="single-counter-up-start-solari">
                        <div class="bg-text">{{$alldone}}</div>
                        <div class="main-content">
                            <p class="text-center">Заявки рассмотрены:</p>
                            <h2 class="title text-center"><span class="counter">{{$alldone}}</span></h2>
                        </div>
                    </div>
                    <!-- single cpounter up area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single cpounter up area start -->
                    <div class="single-counter-up-start-solari">
                        <div class="bg-text">{{$allnew}}</div>
                        <div class="main-content">
                            <p class="text-center">Заявки в обработке:</p>
                            <h2 class="title text-center"><span class="counter">{{$allnew}}</span></h2>
                        </div>
                    </div>
                    <!-- single cpounter up area end -->
                </div>
                <div style="margin-top: 70px;">
                    <canvas id="myChart" width="300" height="100%"></canvas>
                </div>
            </div>
        </div>

    </div>
    <!-- rts- clients review area end -->

    <!-- rts cta area start -->
    <div class="rts-cta-area rts-section-gapBottom mt-3" style="padding-top: 70px;" id="statistica">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-solari-wrapper">
                        <div class="left-area">
                            <span class="pre  skew-up">
                                <span>
                                    Бухарский
                                отдел
                                    экологии
                               </span>
                            </span>
                            <h4 class="title skew-up">Проверить статус <br> заявки</h4>
                        </div>
                        <div class="right-area">
                            <form action="{{ route('ru_check_murojaat') }}" class="cta-form row" method="POST">
                                @csrf
                                <div class="single-input col-md-12 col-sm-12">
                                    <input type="text" name="m_raqam" id="raqam" pattern="[0-9]+" maxlength="3"
                                           placeholder="Введите номер заявки"
                                           required="">
                                </div>
                                <div class="single-input col-md-12 col-sm-12">
                                    <input type="text" name="m_code" id="code" placeholder="Введите код заявки"
                                           required="">
                                </div>

                                <button type="submit" class="rts-btn btn-primary">Узнать ответ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area end -->
    @php

        //ko'rib chiqilayotgan murojaatlar uchun
                $yanvar = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-01-01 00:00:00' AND '2024-01-31 23:59:59'; ");
                $yanvar1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-01-01 00:00:00' AND '2024-01-31 23:59:59'; ");
                $yanvar_new = count($yanvar)+count($yanvar1);

                $fevral = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-02-01 00:00:00' AND '2024-02-29 23:59:59'; ");
                $fevral1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-02-01 00:00:00' AND '2024-02-29 23:59:59'; ");
                $fevral_new = count($fevral)+count($fevral1);

                $mart = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-03-01 00:00:00' AND '2024-03-31 23:59:59'; ");
                $mart1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-03-01 00:00:00' AND '2024-03-31 23:59:59'; ");
                $mart_new = count($mart) + count($mart1);

                $aprel = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-04-01 00:00:00' AND '2024-04-30 23:59:59'; ");
                $aprel1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-04-01 00:00:00' AND '2024-04-30 23:59:59'; ");
                $aprel_new = count($aprel)+count($aprel);

                $may = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-05-01 00:00:00' AND '2024-05-31 23:59:59'; ");
                $may1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-05-01 00:00:00' AND '2024-05-31 23:59:59'; ");
                $may_new = count($may)+count($may1);


                $iyun = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-06-01 00:00:00' AND '2024-06-30 23:59:59'; ");
                $iyun1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-06-01 00:00:00' AND '2024-06-30 23:59:59'; ");
                $iyun_new = count($iyun) + count($iyun1);


                $iyul = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-07-01 00:00:00' AND '2024-06-31 23:59:59'; ");
                $iyul1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-07-01 00:00:00' AND '2024-06-31 23:59:59'; ");
                $iyul_new = count($iyul)+count($iyul1);

                $avgust = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-08-01 00:00:00' AND '2024-08-31 23:59:59'; ");
                $avgust1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-08-01 00:00:00' AND '2024-08-31 23:59:59'; ");
                $avgust_new = count($avgust)+count($avgust1);



                $sentabr = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-09-01 00:00:00' AND '2024-09-30 23:59:59'; ");
                $sentabr1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-09-01 00:00:00' AND '2024-09-30 23:59:59'; ");
                $sentabr_new = count($sentabr)+count($sentabr1);

                $oktabr = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-10-01 00:00:00' AND '2024-10-31 23:59:59'; ");
                $oktabr1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-10-01 00:00:00' AND '2024-10-31 23:59:59'; ");
                $oktabr_new = count($oktabr)+count($oktabr1);


                $noyabr = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-11-01 00:00:00' AND '2024-11-30 23:59:59'; ");
                $noyabr1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-11-01 00:00:00' AND '2024-11-30 23:59:59'; ");
                $noyabr_new = count($noyabr)+count($noyabr1);

                $dekabr = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-12-01 00:00:00' AND '2024-12-31 23:59:59'; ");
                $dekabr1 = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'new' AND created_at BETWEEN '2024-12-01 00:00:00' AND '2024-12-31 23:59:59'; ");
                $dekabr_new = count($dekabr)+count($dekabr1);

        // ko'rib chiqilgan murojaatlar uchun
                $yanvar_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-01-01 00:00:00' AND '2024-01-31 23:59:59'; ");
                $yanver_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-01-01 00:00:00' AND '2024-01-31 23:59:59'; ");
                $yanvar_done = count($yanvar_a)+count($yanver_b);

                $fevral_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-01-01 00:00:00' AND '2024-01-31 23:59:59'; ");
                $fevral_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-01-01 00:00:00' AND '2024-01-31 23:59:59'; ");
                $fevral_done = count($fevral_a)+count($fevral_b);

                $mart_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-03-01 00:00:00' AND '2024-03-31 23:59:59'; ");
                $mart_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-03-01 00:00:00' AND '2024-03-31 23:59:59'; ");
                $mart_done = count($mart_a)+count($mart_b);

                $aprel_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-04-01 00:00:00' AND '2024-04-30 23:59:59'; ");
                $aprel_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-04-01 00:00:00' AND '2024-04-30 23:59:59'; ");
                $aprel_done = count($aprel_a)+count($aprel_b);


                $may_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-05-01 00:00:00' AND '2024-05-31 23:59:59'; ");
                $may_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-05-01 00:00:00' AND '2024-05-31 23:59:59'; ");
                $may_done = count($may_a)+count($may_b);

                $iyun_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-06-01 00:00:00' AND '2024-06-30 23:59:59'; ");
                $iyun_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-06-01 00:00:00' AND '2024-06-30 23:59:59'; ");
                $iyun_done = count($iyun_a)+count($iyun_b);

                $iyul_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-07-01 00:00:00' AND '2024-06-31 23:59:59'; ");
                $iyul_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-07-01 00:00:00' AND '2024-06-31 23:59:59'; ");
                $iyul_done = count($iyul_a)+count($iyul_b);

                $avgust_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-08-01 00:00:00' AND '2024-08-31 23:59:59'; ");
                $avgust_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-08-01 00:00:00' AND '2024-08-31 23:59:59'; ");
                $avgust_done = count($avgust_a)+count($avgust_b);

                $sentabr_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-09-01 00:00:00' AND '2024-09-30 23:59:59'; ");
                $sentabr_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-09-01 00:00:00' AND '2024-09-30 23:59:59'; ");
                $sentabr_done = count($sentabr_b)+count($sentabr_a);

                $oktabr_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-10-01 00:00:00' AND '2024-10-31 23:59:59'; ");
                $oktabr_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-10-01 00:00:00' AND '2024-10-31 23:59:59'; ");
                $oktabr_done = count($oktabr_a)+count($oktabr_b);

                $noyabr_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-11-01 00:00:00' AND '2024-11-30 23:59:59'; ");
                $noyabr_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-11-01 00:00:00' AND '2024-11-30 23:59:59'; ");
                $noyabr_done = count($noyabr_a)+count($noyabr_b);

                $dekabr_a = \Illuminate\Support\Facades\DB::select("SELECT * FROM jismoniy_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-12-01 00:00:00' AND '2024-12-31 23:59:59'; ");
                $dekabr_b = \Illuminate\Support\Facades\DB::select("SELECT * FROM yuridik_murojaats WHERE status = 'done' AND created_at BETWEEN '2024-12-01 00:00:00' AND '2024-12-31 23:59:59'; ");
                $dekabr_done = count($dekabr_a)+count($dekabr_b);

        // oyma-oy kelib tushgan barcha murojaatlar soni
                $jis_yanvar = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-01-01 00:00:00' AND '2024-01-31 23:59:59';");
                $yur_yanvar = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-01-01 00:00:00' AND '2024-01-31 23:59:59';");
                $all_yanvar = count($jis_yanvar)  + count($yur_yanvar);

                $jis_fevral = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-02-01 00:00:00' AND '2024-02-28 23:59:59';");
                $yur_fevral = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-02-01 00:00:00' AND '2024-02-28 23:59:59';");
                $all_fevral = count($jis_fevral)  + count($yur_fevral);

                $jis_mart = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-03-01 00:00:00' AND '2024-03-31 23:59:59';");
                $yur_mart = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-03-01 00:00:00' AND '2024-03-31 23:59:59';");
                $all_mart = count($jis_mart)  + count($yur_mart);

                $jis_aprel = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-04-01 00:00:00' AND '2024-04-30 23:59:59';");
                $yur_aprel = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-04-01 00:00:00' AND '2024-04-30 23:59:59';");
                $all_aprel = count($jis_aprel)  + count($yur_aprel);

                $jis_may = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-05-01 00:00:00' AND '2024-05-31 23:59:59';");
                $yur_may = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-05-01 00:00:00' AND '2024-05-31 23:59:59';");
                $all_may = count($jis_may)  + count($yur_may);

                $jis_iyun = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-06-01 00:00:00' AND '2024-06-30 23:59:59';");
                $yur_iyun = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-06-01 00:00:00' AND '2024-06-30 23:59:59';");
                $all_iyun = count($jis_iyun)  + count($yur_iyun);

                $jis_iyul = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-07-01 00:00:00' AND '2024-07-31 23:59:59';");
                $yur_iyul = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-07-01 00:00:00' AND '2024-07-31 23:59:59';");
                $all_iyul = count($jis_iyul)  + count($yur_iyul);

                $jis_avgust = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-08-01 00:00:00' AND '2024-08-31 23:59:59';");
                $yur_avgust = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-08-01 00:00:00' AND '2024-08-31 23:59:59';");
                $all_avgust = count($jis_avgust)  + count($yur_avgust);

                $jis_september = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-09-01 00:00:00' AND '2024-09-30 23:59:59';");
                $yur_september = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-09-01 00:00:00' AND '2024-09-30 23:59:59';");
                $all_september = count($jis_september)  + count($yur_september);

                $jis_october = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-10-01 00:00:00' AND '2024-10-31 23:59:59';");
                $yur_october = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-10-01 00:00:00' AND '2024-10-31 23:59:59';");
                $all_october = count($jis_october)  + count($yur_october);

                $jis_noyabr = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-11-01 00:00:00' AND '2024-11-30 23:59:59';");
                $yur_noyabr = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-11-01 00:00:00' AND '2024-11-30 23:59:59';");
                $all_noyabr = count($jis_noyabr)  + count($yur_noyabr);

                $jis_dekabr = \Illuminate\Support\Facades\DB::select("SELECT * FROM `jismoniy_murojaats` WHERE created_at BETWEEN '2024-10-01 00:00:00' AND '2024-10-31 23:59:59';");
                $yur_dekabr = \Illuminate\Support\Facades\DB::select("SELECT * FROM `yuridik_murojaats` WHERE created_at BETWEEN '2024-10-01 00:00:00' AND '2024-10-31 23:59:59';");
                $all_dekabr = count($jis_dekabr)  + count($yur_dekabr);


    @endphp

@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
            responsive: true,
            // The data for our dataset
            data: {
                labels: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                datasets: [{
                    label: 'Общее количество заявок',
                    backgroundColor: 'rgb(23, 162, 184)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [{{$all_yanvar}}, {{$all_fevral}}, {{$all_mart}}, {{$all_aprel}}, {{$all_may}}, {{$all_iyun}}, {{$all_iyul}}, {{$all_avgust}}, {{$all_september}}, {{$all_october}}, {{$all_noyabr}}, {{$all_dekabr}}]
                },
                    {
                        label: 'Рассмотреные обращения',
                        backgroundColor: 'rgb(52, 168, 83)',
                        borderColor: 'rgb(52, 168, 83)',
                        data: [{{$yanvar_done}}, {{$fevral_done}}, {{ $mart_done }}, {{$aprel_done}}, {{$may_done}}, {{ $iyun_done }}, {{ $iyul_done }}, {{$avgust_done}}, {{$sentabr_done}}, {{$oktabr_done}}, {{$noyabr_done}}, {{$dekabr_done}}]
                    },
                    {
                        label: 'На рассмотрении',
                        backgroundColor: 'rgb(255, 193, 7)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [{{$yanvar_new}}, {{$fevral_new}}, {{ $mart_new }}, {{$aprel_new}}, {{$may_new}}, {{ $iyun_new }}, {{ $iyul_new }}, {{$avgust_new}}, {{$sentabr_new}}, {{$oktabr_new}}, {{$noyabr_new}}, {{$dekabr_new}}]
                    }
                ]
            },

            // Configuration options go here
            options: {}
        });
    </script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script>
        $(".sarlavha").text(function (t, s) {
            if (s.length >= 30) {
                var n = (s = s.substring(0, 50)).lastIndexOf(" ");
                s = s.substring(0, n) + "..."
            }
            $(this).text(s)
        });
    </script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#code').inputmask("999999");
        });
    </script>

@endsection
