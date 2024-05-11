<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
<div class="col-xl-4 col-md-12 col-sm-12 col-12">
    <!-- single wizered start -->
    <div class="rts-single-wized search">
        <div class="wized-body mt--0">
            <div class="rts-search-wrapper">
                <form action="{{route('page_search')}}" method="post">
                    @csrf
                    <input class="Search" type="text" name="search" placeholder="Qidiruv">
                    <button type="submit"><i class="fal fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    
    
    <div style="width: 100%;  padding: 10px; margin-bottom: 15px;">
                    <div data-bs-toggle="calendar" id="calendar_inline" class="col shadow rounded"></div>
                    </div>
                    


    <div class="rts-single-wized Recent-post">
        <div class="wized-header">
            <h5 class="title" style="margin-top: 0px;">
                Yangiliklar
            </h5>
        </div>
        @php
            $news = \Illuminate\Support\Facades\DB::select("Select * from `news` order by `created_at` desc limit 3 ");
        @endphp
        @foreach($news as $new)
            @php
                $item_id = $new->code;
                $photo = app('App\Http\Controllers\Featured_imagesController')->getImage('news', $item_id);
            @endphp
            <div class="wized-body">
                <!-- recent-post -->
                <div class="recent-post-single">
                    <div class="thumbnail">
                        <div id="rasm"
                             style="background-image: url('{{ asset('public/uploads/gallery/photos/'.$photo) }}');
                             width: 120px;
                             height: 100px;
                             background-size: cover;
                             background-position: center center;
                             background-repeat: no-repeat;">
                        </div>
                    </div>
                    <div class="content-area text-start">
                        <div class="user">
                            <i class="fal fa-clock"></i>
                            <span>
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
                            </span>
                        </div>
                        <a class="post-title" href="{{ route('view', ['type'=>'news','title'=>$new->slug]) }}">
                            <h6 class="title sarlavha">{{ $new->title }}</h6>
                        </a>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .js-today{
        color: green !important;
        font-weight: 600 !important;
    }
    
    .btn-curr-month{
        font-size: 12px !important;
    }
    
    .btn-next-month i{
        font-size 15px !important;
    }
    
    .btn-prev-month i{
         font-size 15px !important;
    }
    
    .text-warning{
        color: #6E777D !important;
    }
</style>

@section('script')
    <script>
        $(".sarlavha").text(function (t, s) {
            if (s.length >= 40) {
                var n = (s = s.substring(0, 45)).lastIndexOf(" ");
                s = s.substring(0, n) + "..."
            }
            $(this).text(s)
        });

    </script>
    
    <script src="{{ asset('public/assets/js/calendar') }}/js-date-extensions.js"></script>
<script src="{{ asset('public/assets/js/calendar') }}/jquery.bs.calendar.min.js"></script>
                    
<script>
$(document).ready(function() {
    $.bsCalendar.setDefaults({
    locale: 'ru',   
    showEventEditButton: true,
    showEventRemoveButton: true,
    
    
})
    $('#calendar_inline').bsCalendar({width: '100%'});

});
</script>
@endsection

