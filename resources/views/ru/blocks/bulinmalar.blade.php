@extends('ru.layout.master')
@section('seo')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <title>Бухарское областное управление по экологии и охране окружающей среды | Подразделения управления</title>

    <meta name="description" content="Бухарское областное управление по экологии и охране окружающей среды">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz/ru">
    <meta property="og:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta property="og:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, подразделения управления">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz/ru">
    <meta property="twitter:url" content="https://buxoroeco.uz/ru">
    <meta name="twitter:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta name="twitter:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, подразделения управления">
    <meta name="twitter:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
@endsection
@section('style')
    <style>
        @media only screen and (max-width: 991px) {
            .p-d {
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
            }

            #rasm {
                margin: 0px !important;
            }
        }

        #rasm {
            width: 300px;
            height: 400px;
            float: right;
            margin-right: 30px;
        }


        #person {
            padding: 20px 50px;
        }
    </style>
@endsection
@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="title-area-center title-g">
                <p class="pre">

                </p>
                <h2 class="title">
                    Подразделения управления
                </h2>
            </div>
        </div>
    </div>
    @foreach($bxodims as $bxodim)
        <div class="personal-info-area-start rts-section-gapTop pb--100">
            @php
                $item_id = $bxodim->code;
                $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('bbx', $item_id);
            @endphp
            <div class="container">
                <div class="row g-0 align-items-center">
                    <h4 class="text-center">{{ $bxodim->division }}</h4>
                    <div class="col-lg-4 p-d">
                        <div class="thumbnail m-img">
                            <div id="rasm" style="background-image: url('{{ asset('public/uploads/gallery/photos/'.$photo) }}'); background-size: cover;
                                            background-position: center;
                                            background-repeat: no-repeat;"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="personal-info-team" id="person">
                            <div class="inner-content sal-animate">
                                <h3 class="h3">{{ $bxodim->fullname }}</h3>
                                <span class="pre-title mb-4">
                                {{ $bxodim->job }}
                                </span>

                                <!-- single information start -->
                                <div class="single-info mt-4">
                                    <div class="icon">
                                        <i class="fa-light fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <span>Электрон почта: </span>
                                        <a href="mailto:{{ $bxodim->email }}" class="mail">{{ $bxodim->email }}</a>
                                    </div>
                                </div>
                                <!-- ingle information end -->
                                <!-- ingle information start -->
                                <div class="single-info">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="info">
                                        <span>Номер телефона: </span>
                                        <a href="tel:{{ $bxodim->phone }}" class="mail">{{ $bxodim->phone }}</a>
                                    </div>
                                </div>
                                <!-- ingle information end -->
                                <!-- ingle information start -->
                                <div class="single-info">
                                    <div class="icon">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <div class="info">
                                        <span>Дни приёма:</span>
                                        <a class="mail">{{ $bxodim->q_days }}</a>
                                    </div>
                                </div>
                                <!-- ingle information end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endforeach
@endsection
@section('script')
@endsection
