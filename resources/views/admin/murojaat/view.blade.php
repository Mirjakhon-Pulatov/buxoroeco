@extends('admin.layout.layout')
@section('header-links')
    <!-- Summernote css -->
    <link href="{{ asset('public/assets/admin/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection
@section('page-name')
    {{--    <h4 class="mb-sm-0 font-size-18">Murojaatlar / kelgandir</h4>--}}
@endsection
@section('content')
    @foreach($infs as $inf) @endforeach
    <div class="row">
        <div class="col-12">
            <!-- Left sidebar -->
            <div class="email-leftbar card" style="width: 450px;">
                <div class="mail-list">

                    <table class="table table-bordered">
                        <tbody>
                        @if($type == 'jismoniy')
                            <h4 class="card-title text-center mb-3" style="font-size: 20px !important;">Qo'shimcha
                                ma'lumotlar</h4>
                            <tr>
                                <th>Elektron pochta</th>
                                <td>{{ $inf->email }}</td>
                            </tr>
                            <tr>
                                <th>Telefon raqami</th>
                                <td>{{ $inf->phone }}</td>
                            </tr>
                            <tr>
                                <th>Tuman</th>
                                <td>{{ $inf->district }}</td>
                            </tr>
                            <tr>
                                <th>Manzili</th>
                                <td>{{ $inf->address }}</td>
                            </tr>
                            <tr>
                                <th>Murojaat raqami</th>
                                <td>{{ $inf->t_raqam }}</td>
                            </tr>
                            <tr>
                                <th>Murojaat tekshirish kodi</th>
                                <td>{{ $inf->code }}</td>
                            </tr>

                            <tr>
                                <th>Murojaat kelgan vaqti</th>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $inf->created_at)->format(' H:i d.m.Y ') }}</td>
                            </tr>
                            @php
                                $respenso = \Illuminate\Support\Facades\DB::select("Select `created_at` from `murojaat_javobs` where `code` = '$inf->code' ");

                            @endphp
                            @if(count($respenso)>0)
                                @php
                                    $res = $respenso[0]->created_at;
                                @endphp
                                <tr>
                                    <th>Murojaatga javob berilgan vaqti</th>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $res)->format(' H:i d.m.Y ') }}</td>
                                </tr>
                            @else
                            @endif

                        @elseif($type == 'yuridik')
                            <h4 class="card-title text-center mb-3" style="font-size: 20px !important;">Qo'shimcha
                                ma'lumotlar</h4>
                            <tr>
                                <th>Tadbirkorlik subyektining to'liq nomi</th>
                                <td>{{ $inf->fullname }}</td>
                            </tr>
                            <tr>
                                <th>Boshqaruvchining F.I.SH</th>
                                <td>{{ $inf->header_name }}</td>
                            </tr>
                            <tr>
                                <th>Asosiy faoliyati</th>
                                <td>{{ $inf->mainactivities }}</td>
                            </tr>
                            <tr>
                                <th>INN</th>
                                <td>{{ $inf->inn }}</td>
                            </tr>
                            <tr>
                                <th>Elektron pochta</th>
                                <td>{{ $inf->email }}</td>
                            </tr>
                            <tr>
                                <th>Telefon raqami</th>
                                <td>{{ $inf->phone }}</td>
                            </tr>
                            <tr>
                                <th>Murojaat raqami</th>
                                <td>{{ $inf->t_raqam }}</td>
                            </tr>
                            <tr>
                                <th>Murojaat tekshirish kodi</th>
                                <td>{{ $inf->code }}</td>
                            </tr>
                            <tr>
                                <th>Murojaat kelgan vaqti</th>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $inf->created_at)->format(' H:i d.m.Y ') }}</td>
                            </tr>
                            @php
                                $respenso = \Illuminate\Support\Facades\DB::select("Select `created_at` from `murojaat_javobs` where `code` = '$inf->code' ");

                            @endphp
                            @if(count($respenso)>0)
                                @php
                                    $res = $respenso[0]->created_at;
                                @endphp
                                <tr>
                                    <th>Murojaatga javob berilgan vaqti</th>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $res)->format(' H:i d.m.Y ') }}</td>
                                </tr>
                        @else
                        @endif



                        @endif


                    </table>
                </div>
            </div>
            <!-- End Left sidebar -->

            <!-- Right Sidebar -->
            <div class="email-rightbar mb-3" style="margin-left: 470px;">
                <div class="card">
                    <div class="btn-toolbar p-3" role="toolbar">
                        <div class="btn-group me-2 mb-2 mb-sm-0">
                            <form action="{{ route('generate') }}" method="post">
                                @csrf
                                <input type="hidden" name="type" value="{{$type}}">
                                <input type="hidden" name="code" value="{{$code}}">
                                <button type="submit" class="btn btn-primary waves-light waves-effect"><i
                                        style="margin-right: 5px;"
                                        class="fas fa-file-pdf"></i> PDF faylida yuklab olish
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <h4 class="mt-1" style="font-weight: bold">{{ $inf->fullname }}</h4>
                                <p class="text-muted">{{ $inf->email }} <br> {{ $inf->phone }}</p>
                            </div>
                        </div>

                        <h4 class="display-7" style="font-weight: bold">{{ $inf->title }}</h4>

                        <p>{{ $inf->text }}</p>

                        <hr/>

                        <div class="row">
                            <div class="col-xl-12 col-6">
                                <div class="card">
                                    @php
                                        $check_has_files = \Illuminate\Support\Facades\DB::select("SELECT * FROM `murojaat_files` where `code` = '$inf->code' ");
                                    @endphp
                                    @if(count($check_has_files) > 0)
                                        <br><br>
                                        <h6 class="fw-semibold mb-3">Бириктирилган файллар:</h6>
                                        <ul class="vstack gap-3">
                                            @foreach($check_has_files as $file)
                                                <li>
                                                    <img
                                                        src="{{ url('/') }}/public/assets/admin/filetypes/{{ $file->type }}.png"
                                                        width="25px"
                                                        height="auto" alt="{{ $file->type }}"style="margin-right: 5px;"><a download=""
                                                                                                 href="{{ url('/') }}/public/uploads/files/{{ $file->filename }}">{{ $file->filename }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif

                                </div>
                            </div>
                        </div>

                        @if($inf->status == 'new')
                            <a href="javascript: void(0);" class="btn btn-secondary waves-effect mt-4"
                               data-bs-toggle="modal" data-bs-target="#composemodal"><i style="margin-right: 10px;"
                                                                                        class="mdi mdi-reply"></i>Javob
                                yozish va ko'rib chiqilganga o'tkazish</a>
                        @else
                        @endif


                        @php
                            $datas = \Illuminate\Support\Facades\DB::select("Select * from `murojaat_javobs` where `code` = '$code' ");
                        @endphp
                        @if(count($datas) > 0)
                            <br><br>
                            <h6 class="fw-semibold mb-3">Жавобан юборилган файллар:</h6>
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
                            <p class="text-justify">{{$data->text}}</p>
                        @endif


                    </div>

                </div>
            </div>
            <!-- card -->
        </div>
        <!-- end Col-9 -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">Javob qaytarish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('javob_murojaat') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="code" value="{{ $code }}">
                        <input type="hidden" name="type" value="{{ $type }}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Elektron pochtasi</label>
                            <input type="email" disabled name="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" value="{{ $inf->email }}">
                            <div id="emailHelp" class="form-text">Pochta to'g'riligini ko'zdan kechiring va uni
                                o'zgartirishga urinmang
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Xabar matni</label>
                            <textarea name="javob_matni" id="" cols="30" rows="5" class="form-control"
                                      required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fileInput" class="form-label">File yuklash </label>
                            <span class="form-text"
                                  style="color: red">(tavsiya etiladigan formatlar: .docx, .xlsx, .pdf )</span>
                            <input type="file" name="files[]" id="fileInput" class="form-control" required multiple>
                            <span class="text-danger" id="errorText"></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bekor qilish
                            </button>
                            <button type="submit" class="btn btn-primary" disabled id="submitButton">Jo'natish <i
                                    class="fab fa-telegram-plane ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal -->

@endsection
@section('footer-links')
    <!-- email editor init -->
    <script src="{{ asset('public/assets/admin/js/pages/email-editor.init.js') }}"></script>
    <!--tinymce js-->
    <script src="{{ asset('public/assets/admin/libs/tinymce/tinymce.min.js') }}"></script>

    <script>
        var fileInput = document.getElementById("fileInput");
        var submitButton = document.getElementById("submitButton");
        var errorText = document.getElementById("errorText");

        fileInput.addEventListener("change", function () {
            // Reset error message
            errorText.textContent = "";

            // Check if files are selected
            if (fileInput.files.length > 0) {
                var validFiles = true;

                // Loop through each selected file
                for (var i = 0; i < fileInput.files.length; i++) {
                    var selectedFile = fileInput.files[i];

                    // Validate file extension and size
                    if (!isValidFileExtension(selectedFile) || !isValidFileSize(selectedFile)) {
                        validFiles = false;
                        break; // No need to continue validation if one file is invalid
                    }
                }

                // Update submit button based on validation result
                submitButton.disabled = !validFiles;

                // Show error message if any file is invalid
                if (!validFiles) {
                    errorText.textContent = "Неверный формат или размер файла более 10 МБ";
                }
            } else {
                // If no files are selected, disable submit button
                submitButton.disabled = true;
            }
        });

        function isValidFileExtension(file) {
            var allowedExtensions = ["doc", "docx", "xls", "xlsx", "pdf"]; // Allowed file extensions

            // Get file extension
            var fileName = file.name;
            var fileExtension = fileName.split(".").pop().toLowerCase();

            // Check if file extension is allowed
            return allowedExtensions.includes(fileExtension);
        }

        function isValidFileSize(file) {
            var maxSizeInBytes = 10 * 1024 * 1024; // Max file size in bytes (10 MB)

            // Check if file size is within limit
            return file.size <= maxSizeInBytes;
        }
    </script>

@endsection
