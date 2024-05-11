@extends('layout.master')
@section('style')
    <style>
        /* Optionally add custom styling */
        .input-group-text {
            width: 150px;
            height: auto;
            text-align: center;
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;
            background-color: #4AAB3D;
            color: white;
            border-color: #4AAB3D;
            font-size: 0.8em;
        }

        .input-group-text:hover {
            background-color: #4AAB3D;
            border-color: #4AAB3D;
            color: white;
            cursor: pointer;
        }
    </style>

@endsection
<?php
$n = 6;
function getCode($n)
{
    $characters = '0123456789';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

$a = 1;
function getid($a)
{
    $characters = '0123456789';
    $randomString = '';

    for ($i = 0; $i < $a; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

?>
@section('content')
    <!-- aour service area start -->
    <div class="our-service-area-start rts-section-gap bg-lighten">
        <div class="container">
            <div class="row" style="padding-top: 100px;">
                <div class="col-lg-12">
                    <div class="solari-title-area-three text-center">
                        <h2 class="title skew-up">Murojaat jo'natish</h2>
                        <p class="disc skew-up">Jismoniy shaxslar va Tadbirkorlik subyektlari uchun murojat qoldirish
                            portali.</p>
                    </div>
                </div>
            </div>
            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="tab-area-service-solari-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                     role="tab" aria-controls="home" aria-selected="true">
                                    <div class="icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <p>Jismoniy shaxs</p>
                                </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                     role="tab" aria-controls="profile" aria-selected="false">
                                    <div class="icon">
                                        <i class="fas fa-envelope-badge"></i>
                                    </div>
                                    <p>Yuridik shaxs</p>
                                </div>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-solari-service-m mt--60" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <!-- single tab content area start -->
                                <div class="row">
                                    <div class="col-lg-12 pl--60 pl_md--20 pl_sm--10 mt_sm--50">
                                        <form name="checkout" method="post"
                                              class="checkout woocommerce-checkout ms-woocommerce-checkout"
                                              action="{{ route('petition') }}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="jismoniy">
                                            <input type="hidden" name="t_raqam" value="{{getid($a)}}">
                                            <input type="hidden" name="code" value="{{getCode($n)}}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="full-grid">
                                                        <div class="billing-fields">

                                                            <div class="form-content-box">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>F.I.SH</label>
                                                                            <input id="fname" name="fullname"
                                                                                   class="form-control-mod" type="text"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Elektron Pochta</label>
                                                                            <input id="email" name="email"
                                                                                   class="form-control-mod" type="email"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Telefon raqam</label>
                                                                            <input id="phone" name="phone"
                                                                                   class="form-control-mod" type="text"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Tuman*</label>
                                                                            <select class="d-block" required
                                                                                    name="district">
                                                                                <option value="">Tumaningizni tanlang
                                                                                </option>
                                                                                <option>Buxoro shahar</option>
                                                                                <option>Buxoro tuman</option>
                                                                                <option>Kogon tuman</option>
                                                                                <option>Shofirkon tuman</option>
                                                                                <option>Qorako'l tuman</option>
                                                                                <option>Olot tuman</option>
                                                                                <option>Vobkent tuman</option>
                                                                                <option>G'ijduvon tuman</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Manzil (ko'cha/uy)</label>
                                                                            <input id="address" name="address"
                                                                                   class="form-control-mod margin-bottom"
                                                                                   type="text"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Murojaat mavzusi</label>
                                                                            <input id="city" name="mavzu"
                                                                                   class="form-control-mod" type="text"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Murojaat matni</label>
                                                                            <textarea name="text" id="" cols="30"
                                                                                      rows="10"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <span class="disc" style="font-size: small">Tavsiya etiladigan hujjat turlari: .docx, .pdf, .jpg, .png </span>
                                                                        <div class="input-group mb-3">
                                                                            <input type="file" name="files[]"
                                                                                   class="form-control"
                                                                                   id="fileInput"
                                                                                   aria-describedby="fileInputAddon"
                                                                                   required multiple>
                                                                            <label class="input-group-text text-white"
                                                                                   for="fileInput">
                                                                                <i class="fas fa-upload"></i>
                                                                                <!-- Иконка для загрузки, здесь используется иконка Bootstrap Icons -->
                                                                            </label>
                                                                        </div>
                                                                        <span class="disc tex-danger" id="errorText"
                                                                              style="font-size: small; color: red;"></span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3 col-sm-12 col-xs-12 mt-4 ">
                                                                    <button type="submit" id="submitButton"
                                                                            class="rts-btn btn-primary" disabled>
                                                                        Yuborish
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div><!-- .billing-fields -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- single tab content area start -->
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- single tab content area start -->
                                <div class="row">
                                    <div class="col-lg-12 pl--60 pl_md--20 pl_sm--10 mt_sm--50">
                                        <form name="checkout" method="post"
                                              class="checkout woocommerce-checkout ms-woocommerce-checkout"
                                              action="{{ route('petition') }}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="yuridik">
                                            <input type="hidden" name="code" value="{{getCode($n)}}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="full-grid">
                                                        <div class="billing-fields">

                                                            <div class="form-content-box">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Tadbirkorlik subyektining to'liq
                                                                                nomi</label>
                                                                            <input id="fname" name="fullname" required
                                                                                   class="form-control-mod" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Asosiy faoliyati</label>
                                                                            <input id="mainactivities"
                                                                                   name="mainactivities" required
                                                                                   class="form-control-mod" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>STIR(INN)</label>
                                                                            <input id="inn" name="inn"
                                                                                   class="form-control-mod"
                                                                                   type="number" min="0"
                                                                                   oninput="this.value = Math.abs(this.value)"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Boshqaruvchining F.I.SH </label>
                                                                            <input id="header_name" name="header_name"
                                                                                   class="form-control-mod" type="text"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Elektron Pochta</label>
                                                                            <input id="email" name="email"
                                                                                   class="form-control-mod" type="email"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Telefon raqam</label>
                                                                            <input id="phone" name="phone"
                                                                                   class="form-control-mod" type="text"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Murojaat mavzusi</label>
                                                                            <input id="title" name="title"
                                                                                   class="form-control-mod" type="text"
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Murojaat matni</label>
                                                                            <textarea name="text" id="" cols="30"
                                                                                      rows="10"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <span class="disc" style="font-size: small">Tavsiya etiladigan hujjat turlari: .docx, .pdf, .jpg, .png </span>
                                                                        <div class="input-group mb-3">
                                                                            <input type="file" name="files[]"
                                                                                   class="form-control"
                                                                                   id="fileInput1" required
                                                                                   multiple>
                                                                            <label class="input-group-text text-white"
                                                                                   for="fileInput">
                                                                                <i class="fas fa-upload"></i>
                                                                                <!-- Иконка для загрузки, здесь используется иконка Bootstrap Icons -->
                                                                            </label>
                                                                        </div>
                                                                        <span class="disc tex-danger" id="errorText1"
                                                                              style="font-size: small; color: red;"></span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3 col-sm-12 col-xs-12 mt-4 text-end">
                                                                    <button type="submit" id="submitButton1" disabled
                                                                            class="rts-btn btn-primary">
                                                                        Yuborish
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div><!-- .billing-fields -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- single tab content area start -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- aour service area end -->
@endsection
@section('script')

    <script>
        // Инициализируем проверку для первой формы
        initializeFileValidation("fileInput", "submitButton", "errorText");

        // Инициализируем проверку для второй формы с измененными идентификаторами
        initializeFileValidation("fileInput1", "submitButton1", "errorText1");

        function initializeFileValidation(fileInputId, submitButtonId, errorTextId) {
            var fileInput = document.getElementById(fileInputId);
            var submitButton = document.getElementById(submitButtonId);
            var errorText = document.getElementById(errorTextId);

            fileInput.addEventListener("change", function () {
                checkFiles();
            });

            function checkFiles() {
                if (fileInput.files.length > 0) {
                    var allFilesValid = true;

                    for (var i = 0; i < fileInput.files.length; i++) {
                        var currentFile = fileInput.files[i];

                        if (!isValidFileExtension(currentFile) || !isValidFileSize(currentFile)) {
                            allFilesValid = false;
                            break;
                        }
                    }

                    if (allFilesValid) {
                        submitButton.disabled = false;
                        errorText.textContent = "";
                    } else {
                        submitButton.disabled = true;
                        errorText.textContent = "Bir yoki bir nechta fayl to'g'ri formatda emas yoki 30 MB dan katta";
                    }
                } else {
                    submitButton.disabled = true;
                    errorText.textContent = "";
                }
            }

            function isValidFileExtension(file) {
                var allowedExtensions = ["pdf", "doc", "docx", "xls", "xlsx", "jpg", "jpeg", "png"];
                var fileName = file.name;
                var fileExtension = fileName.split(".").pop().toLowerCase();

                return allowedExtensions.includes(fileExtension);
            }

            function isValidFileSize(file) {
                var maxSizeInBytes = 30 * 1024 * 1024;
                return file.size <= maxSizeInBytes;
            }
        }
    </script>


@endsection
