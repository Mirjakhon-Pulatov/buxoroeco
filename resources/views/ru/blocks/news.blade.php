@extends('ru.layout.master')
@php 
if ($type == 'news'){
     $title = 'Yangiliklar';
 }elseif($type == 'ecocontrol'){
     $title = 'Eko nazorat';
 }
@endphp
@section('seo')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <title>Бухарское областное управление по экологии и охране окружающей среды | @php echo $title @endphp | {{$news[0]->title}} </title>

    <meta name="description" content="Бухарское областное управление по экологии и охране окружающей среды">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz/ru">
    <meta property="og:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta property="og:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, {{$news[0]->title}}">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz/ru">
    <meta property="twitter:url" content="https://buxoroeco.uz/ru">
    <meta name="twitter:title" content="Бухарское областное управление по экологии и охране окружающей среды">
    <meta name="twitter:description" content="бухара, экология, областное управление по экологии, buxoroeco.uz/ru, природа, эко контроль, {{$news[0]->title}}">
    <meta name="twitter:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
@endsection
@section('style')

@endsection
@section('content')
    @foreach($news as $new) @endforeach
    @php
    if($type == 'news'){
    $type1 = 'news__ru';
    }elseif($type=='ecocontrol'){
    $type1 = 'ecocontrol__ru';
    }
        $item_id = $new->code;
        $photo = app('App\Http\Controllers\Featured_imagesController')->getImage($type, $item_id);
        $get_visited = \Illuminate\Support\Facades\DB::select("Select visited from `$type1` where code = '$item_id' ");
        $current_visited = $get_visited[0]->visited;
        $visited_udpate = $current_visited + 1;
      \Illuminate\Support\Facades\DB::select("UPDATE `$type1` SET `visited` = '$visited_udpate' WHERE `$type1`.`code` = '$item_id'");
    @endphp
    <!-- blog details area start -->
    <div class="rts-blog-list-area rts-section-gap" style="padding-top: 100px;">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <div class="left-service-details-wrapper">
                        <div class="content--sd-top  reveal">
                            <h3 class="title title-g text-center" style="margin-top: 0px;">{{ $new->title }}</h3>
                        
                            <img class="mb-3 img-thumbnail" src="{{ asset('public/uploads/gallery/photos/'. $photo) }}"
                                 alt="news-image" style="width: 100%; height: auto;">
                            <p class="disc-1">
                                @php
                                    $body = $new->body;
                                    $body = html_entity_decode($body);
                                    echo $body;
                                @endphp
                            </p>
                        </div>
                    </div>

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
