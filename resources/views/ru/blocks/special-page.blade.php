@extends('ru.layout.master')
@section('seo')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <title>Бухарское областное управление по экологии и охране окружающей среды | Популярные темы</title>

    <meta name="description" content="Бухарское областное управление по экологии и охране окружающей среды">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz/ru">
    <meta property="og:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta property="og:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, фото галерея, популярные темы">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz/ru">
    <meta property="twitter:url" content="https://buxoroeco.uz/ru">
    <meta name="twitter:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta name="twitter:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, популярные темы">
    <meta name="twitter:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
@endsection
@section('style')
@endsection
@section('content')
    <!-- blog details area start -->
    <div class="rts-blog-list-area rts-section-gap" style="padding-top: 60px;">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        @foreach($spgs as $spg) @endforeach
                        <div class="blog-listing-content">
                            <h3 class="title animated fadeIn text-center">{{$spg->title}}</h3>
                            <div class="user-info">
                                @php
                                    $item_id = $spg->code;
                                    $datas = \Illuminate\Support\Facades\DB::select("Select `created_at` from `specialpages__ru` where code = '$item_id' ");
                                    $data1 = $datas[0]->created_at;
                                    $get_visited = \Illuminate\Support\Facades\DB::select("Select visited from `specialpages__ru` where code = '$item_id' ");
                                    $current_visited = $get_visited[0]->visited;
                                    $visited_udpate = $current_visited + 1;
                                  \Illuminate\Support\Facades\DB::select("UPDATE `specialpages__ru` SET `visited` = '$visited_udpate' WHERE `specialpages__ru`.`code` = '$item_id'");
                                @endphp
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data1)->format('d-m-Y ') }}</span>
                                </div>
                                <!-- single info -->

                                <div class="single">
                                    <i class="fas fa-eye"></i>
                                    <span>{{ $visited_udpate }}</span>
                                </div>
                                <!-- single infoe end -->
                            </div>

                            <p class="disc para-1">
                                @php
                                    $body = $spg->body;
                                    $body = html_entity_decode($body);
                                    echo $body;
                                @endphp
                            </p>

                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wizered area -->
                @include('ru.blocks.sidebar')
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- blog details area end -->
@endsection
@section('script')
@endsection
