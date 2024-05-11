@extends('admin.layout.layout')
@section('header-links')
    <!-- DataTables -->
    <link href="{{ asset('public/assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('public/assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
          rel="stylesheet" type="text/css"/>

    <style>
        tr th {
            text-align: center;
            vertical-align: middle;
        }

        td {
            text-align: center;
        }

    </style>
@endsection
@section('page-name')
    <h4 class="mb-sm-0 font-size-18">Murojaatlar / Yangi kelgan</h4>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Yuridik shaxslar</h4>
                    <div class="table-responsive">
                        <table id="new-murojaat" class=" table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Murojaat raqami</th>
                                <th>Murojaat kodi</th>
                                <th>Sanasi</th>
                                <th>Murojaat mavzusi</th>
                                <th>Subyektning to'liq nomi</th>
                                <th>Действия</th>
                            </tr>
                            </thead>

                            @php
                                $yms = \Illuminate\Support\Facades\DB::select("Select * from `yuridik_murojaats` where `status` = 'new' order by `id` desc");
                            @endphp
                            <tbody>
                            @foreach($yms as $ym)
                                <tr>
                                    <td style="text-align: center">{{ $ym->t_raqam }}</td>
                                    <td>{{ $ym->code }}</td>
                                    <td>
                                        @php
                                            // Пример строки времени
                                        $time_string = $ym->created_at;

                                        // Преобразование строки в объект DateTime
                                        $datetime_object = new DateTime($time_string);

                                        // Получение только даты в формате YYYY-MM-DD
                                        $date_only = $datetime_object->format('d.m.Y');

                                        echo $date_only; // Вывод: 2024-02-27
                                        @endphp
                                    </td>
                                    <td>{{ $ym->title }}</td>
                                    <td>{{ $ym->fullname }}</td>
                                    <td style="text-align:  center" class="d-flex justify-content-evenly">
                                        <a title="Ko'rish"
                                           href="{{ route('view_new', ['type'=>'yuridik','code' => $ym->code]) }}"
                                           class="btn btn-outline-primary"><i
                                                class="fas fa-eye"></i></a>

                                        <button title="O'chirish"
                                                onclick="OpenModalDelete( 'yuridik', '{{ $ym->code }}' )"
                                                type="button" class="btn btn-outline-danger waves-effect waves-light">
                                            <i class="bx bxs-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 50px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Jismoniy shaxslar</h4>
                    <div class="table-responsive">
                        <table id="new-murojaat1" class=" table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Murojaat raqami</th>
                                <th>Murojaat kodi</th>
                                <th>Sanasi</th>
                                <th>F.I.SH.</th>
                                <th>Murojaat mavzusi</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            @php
                                $jms = \Illuminate\Support\Facades\DB::select("Select * from `jismoniy_murojaats` where `status` = 'new' order by `id` desc");
                            @endphp

                            <tbody>
                            @foreach($jms as $jm)
                                <tr>
                                    <td>{{ $jm->t_raqam }}</td>
                                    <td>{{ $jm->code }}</td>
                                    <td>
                                        @php
                                            // Пример строки времени
                                        $time_string = $jm->created_at;

                                        // Преобразование строки в объект DateTime
                                        $datetime_object = new DateTime($time_string);

                                        // Получение только даты в формате YYYY-MM-DD
                                        $date_only = $datetime_object->format('d.m.Y');

                                        echo $date_only; // Вывод: 2024-02-27
                                        @endphp
                                    </td>
                                    <td>{{ $jm->fullname }}</td>
                                    <td>{{ $jm->title }}</td>
                                    <td style="text-align:  center" class="d-flex justify-content-evenly">
                                        <a title="Ko'rish"
                                           href="{{ route('view_new', ['type'=>'jismoniy','code' => $jm->code]) }}"
                                           class="btn btn-outline-primary"><i
                                                class="fas fa-eye"></i></a>

                                        <button title="O'chirish"
                                                onclick="OpenModalDelete('jismoniy', '{{ $jm->code }}') "
                                                type="button" class="btn btn-outline-danger waves-effect waves-light">
                                            <i class="bx bxs-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- delete modal content -->
    <div id="DELETE_MODAL" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Вы уверены, что хотите удалить элемент?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="m-2 d-inline-block" action="{{ route('murojaat.delete') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input id="code" type="hidden" name="code" value="">
                    <input id="type" type="hidden" name="type" value="">
                    <div class="modal-body">
                        <div class="text-end">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Отмена
                            </button>
                            <button type="submit" class="btn btn-danger waves-effect waves-light">Удалить</button>
                        </div>
                    </div>


                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection
@section('footer-links')

    <!-- Required datatable js -->
    <script src="{{ asset('public/assets/admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#new-murojaat').DataTable({
                order: [
                [2, 'desc']
                ]   
            });
            $('#new-murojaat1').DataTable({
                order: [
                [2, 'desc']
                ]   
            });
        });

        function OpenModalDelete(type, code) {

            $('#DELETE_MODAL').modal('show');
            $("#code").val(code);
            $("#type").val(type);

        }

    </script>
@endsection
