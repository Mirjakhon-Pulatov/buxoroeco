@extends('layout.master')
@section('seo')
@php if ($type == 'news'){
     $title = 'Yangiliklar';
 }elseif($type == 'ecocontrol'){
     $title = 'Eko nazorat';
 } @endphp
    <title>Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi | @php echo $title @endphp</title>
    
    <meta name="description" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz">
    <meta property="og:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta property="og:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, yangiliklar, eko nazorat">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz">
    <meta property="twitter:url" content="https://buxoroeco.uz">
    <meta name="twitter:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta name="twitter:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, yangiliklar, eko nazorat">
    <meta name="twitter:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
@endsection
@section('style')
    <style>
        #link-div {
            padding-top: 50px;
        }

        .pagination {
            width: 100% !important;
        }

        .page-link {
            color: #4AAB3D;
        }

        .page-link:hover {
            color: #4AAB3D;
        }

        .page-item.active .page-link {
            background-color: #4AAB3D !important;
            color: white !important;
            border-color: #4AAB3D;
        }
    </style>
@endsection
@section('content')

    <div class="row" style="padding-top: 80px;">
        <div class="col-lg-12">
            <div class="title-area-center title-g">
                <p class="pre">
                    <span>Buxoro Ekologiya Boshqarmasi</span>
                </p>
                <h2 class="title">
                    @switch($type)
                        @case('news')
                            Barcha yangiliklar
                            @break
                        @case('ecocontrol')
                            Eko Nazorat
                            @break
                    @endswitch
                </h2>
            </div>
        </div>
    </div>

    <div class="blog-post-area rts-section-gap">
        <div class="container">
            <div class="row g-24 mt--20">
                <!-- tsikl boshlanishi -->
                @foreach($news as $new)
                    @php
                        $item_id = $new->code;
                        $photo = app('App\Http\Controllers\Featured_imagesController')->getImage($type, $item_id);

                        $get_visited = \Illuminate\Support\Facades\DB::select("Select visited from `$type` where code = '$item_id' ");
                        $current_visited = $get_visited[0]->visited;
                        $visited_udpate = $current_visited + 1;
                        $query = \Illuminate\Support\Facades\DB::select("UPDATE `$type` SET `visited` = '$visited_udpate' WHERE `$type`.`code` = '$item_id'");
                    @endphp
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- blog-single area start -->
                        <div class="blog-single-one text-center">
                            <a href="{{ route('view', ['type' => $type,'title' => $new->slug]) }}" class="thumbnail">
                                <div class="inner">
                                    {{--                                    <img src="{{ asset('public/uploads/gallery/photos/'. $photo) }}" alt="news-image"--}}
                                    {{--                                         style="width: 400px; height: 260px;">--}}
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
                                <a href="{{ route('view', ['type' => $type,'title' => $new->slug]) }}">
                                    <h5 class="title sarlavha">{{ $new->title }}</h5>
                                </a>
                            </div>
                        </div>
                        <!-- blog-single area end -->
                    </div>
                @endforeach
                <!-- tsikl tugashi -->
            </div>
            <div class="col-lg-12" id="link-div">{{ $news->links() }}</div>

        </div>
    </div>

@endsection
@section('script')
    <script>
        $(".sarlavha").text(function (t, s) {
            if (s.length >= 30) {
                var n = (s = s.substring(0, 50)).lastIndexOf(" ");
                s = s.substring(0, n) + "..."
            }
            $(this).text(s)
        });
    </script>
@endsection
