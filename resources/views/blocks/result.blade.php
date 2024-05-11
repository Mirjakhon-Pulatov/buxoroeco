@extends('layout.master')
@section('style')

@endsection
@section('content')

    <!-- blog details area start -->
    <div class="rts-blog-list-area rts-section-gap" style="padding-top: 60px;">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; height: 350px;">
                    <div class="left-service-details-wrapper" style="padding-left: 15px;">
                        <div class="content--sd-top  reveal">
                            <h3 class="title title-g text-center" style="margin-top: 0px;"></h3>
                            <p class="disc-1">
                            @if($status == 'new')
                                <h4>Sizning murojaatingiz ko'rib chiqilmoqda</h4>
                                <h5>Murojaat raqami: <span style="color: #4AAB3D">{{ $raqam }}</span></h5>
                                <h5>Murojaat kodi: <span style="color: #4AAB3D">{{ $code }}</span></h5>
                            @elseif($status == 'done')
                                <h4>Sizning murojaatingiz ko'rib chiqildi.</h4>
                                <h5>Murojaat raqami: <span style="color: #4AAB3D">{{ $raqam }}</span></h5>
                                <h5>Murojaat kodi: <span style="color: #4AAB3D">{{ $code }}</span></h5>
                                @php
                                    $datas = \Illuminate\Support\Facades\DB::select("Select * from `murojaat_javobs` where `code` = '$code' ");
                                @endphp
                                @if(count($datas) > 0)

                                    <ul class="vstack gap-3">
                                        @foreach($datas as $data)
                                            <li>
                                                <img
                                                    src="{{ url('/') }}/public/assets/admin/filetypes/{{ $data->type }}.png"
                                                    width="25px"
                                                    height="auto" alt="{{ $data->type }}"><a download=""
                                                                                             href="{{ url('/') }}/public/uploads/files/{{ $data->filename }}">{{ $data->filename }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <h6 class="text text-justify">{{$data->text}}</h6>
                                @endif
                            @elseif($status == 'none')
                                <h4>Kechirasiz, <span>{{ $code }}</span> kodli murojaat mavjud emas!</h4>
                            @else

                            @endif

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
