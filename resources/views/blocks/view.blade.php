@extends('layout.master')
@section('seo')
<title> Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi | Hududiy bo'linmalar </title>
    
    <meta name="description" content="Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz">
    <meta property="og:title" content="Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi">
    <meta property="og:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, hududiy bulinmalar, {{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz">
    <meta property="twitter:url" content="https://buxoroeco.uz">
    <meta name="twitter:title" content="Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi">
    <meta name="twitter:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, hududiy bulinmalar, {{ url()->current() }}">
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
                    Hududiy Bo'linmalar
                </h2>
            </div>
        </div>
    </div>
    @foreach($tdls as $leader)
        <div class="personal-info-area-start rts-section-gapTop pb--50">
            @php
                $item_id = $leader->code;
                $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('teritorial', $item_id);
            @endphp
            <div class="container">
                <div class="row g-0 align-items-center">
                    <h4 class="text-center">{{ $leader->division }}</h4>
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

                                <h3 class="h3">{{ $leader->fullname }}</h3>
                                <span class="pre-title mb-4">
                                {{ $leader->job }}
                                </span>

                                <!-- single information start -->
                                <div class="single-info mt-4">
                                    <div class="icon">
                                        <i class="fa-light fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <span>Elektron pochta manzili: </span>
                                        <a href="mailto:{{ $leader->email }}" class="mail">{{ $leader->email }}</a>
                                    </div>
                                </div>
                                <!-- ingle information end -->
                                <!-- ingle information start -->
                                <div class="single-info">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="info">
                                        <span>Telefon raqami: </span>
                                        <a href="tel:{{ $leader->phone }}" class="mail">{{ $leader->phone }}</a>
                                    </div>
                                </div>
                                <!-- ingle information end -->
                                <!-- ingle information start -->
                                <div class="single-info">
                                    <div class="icon">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <div class="info">
                                        <span>Manzili:</span>
                                        <a href="#" class="mail">{{ $leader->address }}</a>
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
