@extends('ru.layout.master')
@section('style')

@endsection
@section('content')

    <!-- blog details area start -->
    <div class="rts-blog-list-area rts-section-gap" style="padding-top: 60px;">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="left-service-details-wrapper" style="padding-left: 15px;">
                        <div class="content--sd-top  reveal">
                            <p class="disc-1">
                            <h4>Ваша заявка был успешно отправлен</h4>
                            <h5>Номер заявления: <span style="color: #4AAB3D">{{ $t }}</span></h5>
                            <h5>Код заявления: <span style="color: #4AAB3D">{{ $code  }}</span></h5>
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
