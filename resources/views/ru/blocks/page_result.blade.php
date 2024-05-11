@extends('ru.layout.master')
@section('style')
    <style>
        .li-link:hover{
            text-decoration: underline;
            text-decoration-color: #4AAB3D;
        }
    </style>
@endsection
@section('content')

    <!-- blog details area start -->
    <div class="rts-blog-list-area rts-section-gap" style="padding-top: 60px;">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                @if(count($query) > 0)
                    @php
                        $count = count($query);
                    @endphp
                    <div class="col-xl-8 col-md-12 col-sm-12 col-12"
                         style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="left-service-details-wrapper" style="padding-left: 15px;">
                            <div class="content--sd-top  reveal">
                                <p class="disc-1">
                                <h4>По вашему запросу найдено {{$count}} результатов</h4>
                                @foreach($query as $quer)
                                    <h6>
                                        <li class="text-justify li-link" >
                                            <a class="mobile-menu-link" style="padding: 10px 10px; font-weight: normal;"
                                               href="{{ route('ru.content', ['slug'=>$quer->slug]) }}">{{ $quer->title }}</a>
                                        </li>
                                    </h6>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-xl-8 col-md-12 col-sm-12 col-12"
                         style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="left-service-details-wrapper" style="padding-left: 15px;">
                            <div class="content--sd-top  reveal">
                                <p class="disc-1">
                                <h4>Ничего не найдено!</h4>
                            </div>
                        </div>
                    </div>
                @endif
                @include('ru.blocks.sidebar')
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- blog details area end -->
@endsection
@section('script')

@endsection
