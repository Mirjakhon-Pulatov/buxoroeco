<div class="header-header-two">
    <!-- header- solaric two -->
    <div class="header-two-solari header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-m">
                        <div class="left">
                            <!--<div class="inf">-->
                            <!--    <i class="fa-regular fa-clock"></i>-->
                            <!--    <p>Dushanba - Juma 8:00 - 18:00 </p>-->
                            <!--</div>-->
                            <div class="inf">
                                <i class="fa-regular fa-envelope"></i>
                                <a href="mailto:buxoro@uznature.uz">buxoro@uznature.uz</a>
                            </div>
                            <a href="{{ route('ru.index') }}" style="color: white">
                                <img src="{{asset('public/styles/assets/images/ru.png')}}" width="24px" height="auto"
                                     alt="uz">
                            </a>
                        </div>
                        <div class="right">
                            <div class="social-header-top-h2">
                                <ul>
                                    <li><a href="https://t.me/Buxoro_Eco" target="_blank"><i
                                                class="fa-brands fa-telegram"></i></a></li>
                                    <li><a href="https://www.facebook.com/BuxoroEko/" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/@Buxoro-ecologiya" target="_blank"><i
                                                class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header- solaric two end -->
    <!-- header man start -->
    <div class="header-main-h2 header--sticky" style="z-index: 1002">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-haeder-wrapper-h2">
                        <a href="{{ url('/') }}" class="logo-area">
                            <img src="{{ asset('public/styles/assets/images/logo-color.png') }}" alt="logo"
                                 style="width: 70px; height: auto;">
                        </a>

                        <!-- navigation area start -->
                        <div class="header-nav main-nav-one">
                            <nav>
                                <ul>
                                    @php
                                        $menus = \Illuminate\Support\Facades\DB::select("Select `id`,`title`,`link` from menus where parent_id = 0 ");
                                    @endphp
                                    @foreach($menus as $menu)

                                        @php
                                            $has_child = \Illuminate\Support\Facades\DB::select("Select * from menus where parent_id = '$menu->id' ");

                                            $abc = '';
                                            if (count($has_child)>0)
                                                {
                                                    $abc = 'class=has-dropdown';
                                                }else{
                                                $abc = '';
                                                }
                                        @endphp
                                        <li {{ $abc }}>
                                            <a class="nav-link" href="{{ $menu->link }}">{{ $menu->title }}</a>
                                            @if(count($has_child)>0)
                                                <ul class="submenu">
                                                    @foreach($has_child as $child)
                                                        @php
                                                            $slugs = \Illuminate\Support\Facades\DB::select("Select * from `pages` where `parent` = $child->id ");
                                                        @endphp
                                                        @if($slugs)
                                                            @php
                                                                $link = $slugs[0]->slug;
                                                            @endphp
                                                            <li>
                                                                <a style="padding: 10px 10px; font-weight: normal;"
                                                                   href="{{ route('content', ['slug'=>$link]) }}">{{ $child->title }}</a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a style="padding: 10px 10px; font-weight: normal;"
                                                                   href="/{{ $child->link }}">{{ $child->title }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @endif

                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation area end -->
                        <div class="actions-area">
                            <div class="menu-btn" id="menu-btn">
                                <svg class="kebab" width="20" height="16" viewbox="0 0 20 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#4AAB3D"></rect>
                                    <rect y="7" width="20" height="2" fill="#4AAB3D"></rect>
                                    <rect width="20" height="2" fill="#4AAB3D"></rect>
                                </svg>
                            </div>
                            <a href="{{ url('/murojaat') }}" class="rts-btn btn-primary has-dropdown">Murojaat
                                yuborish</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->

    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                @foreach($menus as $menu)
                    @php
                        $has_child = \Illuminate\Support\Facades\DB::select("Select * from menus where parent_id = '$menu->id' ");

                        $abc = '';
                        if (count($has_child)>0)
                            {
                                $abc = 'class=has-droupdown';
                            }else{
                            $abc = '';
                            }
                    @endphp

                    <li {{ $abc }}>
                        <a href="{{ $menu->link }}" class="main">{{ $menu->title }}</a>
                        @if(count($has_child)>0)
                            <ul class="submenu mm-collapse">
                                @foreach($has_child as $child)
                                    @php
                                        $slugs = \Illuminate\Support\Facades\DB::select("Select * from `pages` where `parent` = $child->id ");
                                    @endphp
                                    @if($slugs)
                                        @php
                                            $link = $slugs[0]->slug;
                                        @endphp
                                        <li>
                                            <a class="mobile-menu-link" style="padding: 10px 10px; font-weight: normal;"
                                               href="{{ route('content', ['slug'=>$link]) }}">{{ $child->title }}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="mobile-menu-link" style="padding: 10px 10px; font-weight: normal;"
                                               href="{{ $child->link }}">{{ $child->title }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif

                    </li>
                @endforeach

            </ul>
        </nav>

        <div class="rts-social-style-one pl--20 mt--100">
            <ul>
                <li>
                    <a href="https://www.facebook.com/BuxoroEko/">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://t.me/Buxoro_Eco">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@BuxoroViloyatiEkologiya">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
