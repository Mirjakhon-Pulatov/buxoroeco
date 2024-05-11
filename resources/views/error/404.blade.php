@extends('layout.master')
@section('style')
    <style>
        #icon-error {
            color: #4AAB3D;
        }
    </style>
@endsection
@section('content')
    <div class="rts-about-company-wrapper rts-section-gap bg-abc-wrapper bg_image reveal">
        <div class="container">
            <div class="row g-24">
                <div class="col-lg-12">
                    <div class="title-area-center title-g">
                        <p class="pre skew-up" style="opacity: 1;">
                        <div class="word-line" style="display: block; text-align: center; width: 100%;">

                            <div class="word">
                                <i id="icon-error" style="font-size: 100px;" class="fas fa-do-not-enter"></i>
                            </div>
                        </div>
                        </p>
                        <h2 class="title skew-up" style="opacity: 1;">
                            <div class="word-line" style="display: block; text-align: center; width: 100%;">
                                <div class="word"
                                     style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    Sahifa
                                </div>
                                <div class="word"
                                     style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    Topilmadi
                                </div>
                            </div>

                            {{--                                <div class="word"--}}
                            {{--                                     style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">--}}
                            {{--                                    Of--}}
                            {{--                                </div>--}}
                            {{--                                <div class="word"--}}
                            {{--                                     style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">--}}
                            {{--                                    Our--}}
                            {{--                                </div>--}}
                            {{--                                <div class="word"--}}
                            {{--                                     style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">--}}
                            {{--                                    Company--}}
                            {{--                                </div>--}}
                            <div class="text-center mt-3">
                                <a href="{{url('/')}}" class="rts-btn btn-primary" type="submit">Bosh sahifaga qaytish</a>
                            </div>
                        </h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
