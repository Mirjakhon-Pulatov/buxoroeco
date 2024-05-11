@extends('layout.master')
@section('seo')
<title>Buxoro viloyati Ekologiya, аtrof - muhitni muhofaza qilish va iqlim o‘zgarish boshqarmasi | Ommabop Mavzular</title>
    
    <meta name="description" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://buxoroeco.uz">
    <meta property="og:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta property="og:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, ommabop mavzular, {{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="buxoroeco.uz">
    <meta property="twitter:url" content="https://buxoroeco.uz">
    <meta name="twitter:title" content="Buxoro viloyat ekologiya, atrof-muhitni muhofaza qilish va iqlim o'zgarishi boshqarmasi">
    <meta name="twitter:description" content="buxoro, ekologiya, ekologiya boshqarmasi, buxoroeco.uz, tabiat, ekologik nazorat, aloqa, murojaat, ommabop mavzular, {{ url()->current() }}">
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
                                    $datas = \Illuminate\Support\Facades\DB::select("Select `created_at` from `specialpages` where code = '$item_id' ");
                                    $data1 = $datas[0]->created_at;
                                    $get_visited = \Illuminate\Support\Facades\DB::select("Select visited from `specialpages` where code = '$item_id' ");
                                    $current_visited = $get_visited[0]->visited;
                                    $visited_udpate = $current_visited + 1;
                                  \Illuminate\Support\Facades\DB::select("UPDATE `specialpages` SET `visited` = '$visited_udpate' WHERE `specialpages`.`code` = '$item_id'");
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
                @include('blocks.sidebar')
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- blog details area end -->
@endsection
@section('script')
@endsection
