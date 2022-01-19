@extends('layouts.app')

@section('content')
    <div class="position-absolute w-100 vh-100 overflow-hidden mx-auto"
         style="background-image: url({{asset('/images/bg_wallpaper.jpg')}});background-repeat: no-repeat; background-size: cover;">
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card" style="opacity: .9">
                            <div class="card-header">{{ __('Kayıt Ol') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group row">

                                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Ad*') }}</label>
                                        <div class="col-md-4">
                                            <input id="name" type="text" placeholder="Lütfen adınızı giriniz" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            <span class="d-block text-danger" id="nameSpan"></span>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <label for="surname" class="col-md-2 col-form-label text-md-right">{{ __('Soyad*') }}</label>
                                        <div class="col-md-4">
                                            <input id="surname" type="text" placeholder="Lütfen soyadınızı giriniz" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                            <span class="d-block text-danger" id="surnameSpan"></span>
                                            @error('surname')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Posta Adresi*') }}</label>
                                        <div class="col-md-4">
                                            <input id="email" type="email" placeholder="Lütfen e-posta adresinizi giriniz" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            <span class="d-block text-danger" id="mailSpan"></span>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <label for="identity_number" class="col-md-2 col-form-label text-md-right">{{ __('TC No*') }}</label>
                                        <div class="col-md-4">
                                            <input id="identity_number" type="text" maxlength="11" placeholder="Lütfen TC Kimlik Numaranızı giriniz" class="form-control @error('identity_number') is-invalid @enderror" name="identity_number" value="{{ old('identity_number') }}" required autocomplete="identity_number">
                                            <span class="d-block text-danger" id="tcSpan"></span>
                                            @error('identity_number')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Şifre*') }}</label>
                                        <div class="col-md-4">
                                            <input id="password" type="password" placeholder="Lütfen şifrenizi giriniz" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            <span class="d-block text-danger" id="passwordSpan"></span>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>Şifreniz en az 8 karakter olmalıdır.</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Şifre Tekrar*') }}</label>
                                        <div class="col-md-4">
                                            <input id="password-confirm" type="password" placeholder="Lütfen şifrenizi tekrar giriniz" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <a href="" data-toggle="modal" data-target="#privacyPolicyModal" class="ml-4">
                                                KVKK Aydınlatma Metni
                                            </a>’ni okudum ve kabul ediyorum.
                                            <input style="top: 1px;left: 40px; z-index: 0" tabindex="-1" class="form-check-input" type="checkbox"
                                                   data-target="#privacyPolicyModal" required>
                                        </div>
                                    </div>



                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary" id="register-btn">
                                                {{ __('Kayıt Ol') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="privacyPolicyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">KVKK Aydınlatma Metni</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function () {

//Name validation
            $("input[name='name']").keyup(function(input) {
                var nameSpan = $('#nameSpan');
                if ($(input.target).val().length < 3) {
                    nameSpan.text('En az 3 harf girmelisiniz.');
                    $('#register-btn').attr("disabled", true);
                } else {
                    nameSpan.text('');
                    $('#register-btn').attr("disabled", false);
                }
                $(input.target).bind("keypress", function (e) {
                    var keyCode = e.which ? e.which : e.keyCode
                    if ((keyCode >= 48 && keyCode <= 57)) {
                        nameSpan.text('Sadece harf girmeye çalışınız.');
                        $('#register-btn').attr("disabled", true);
                        return false;
                    } else {
                        nameSpan.css("display", "none");
                        $('#register-btn').attr("disabled", false);
                    }
                });
            });

//Surname validation
            $("input[name='surname']").keyup(function () {
                if ($("input[name='surname']").val().length < 2) {
                    $('#surnameSpan').text('En az 2 harf girmelisiniz.');
                    $('#register-btn').attr("disabled", true);
                } else {
                    $('#surnameSpan').text('');
                    $('#register-btn').attr("disabled", false);
                }
                $("input[name='surname']").bind("keypress", function (e) {
                    var keyCode = e.which ? e.which : e.keyCode
                    if ((keyCode >= 48 && keyCode <= 57)) {
                        $("#surnameSpan").text('Sadece harf girmeye çalışınız.');
                        $('#register-btn').attr("disabled", true);
                        return false;
                    } else {
                        $("#surnameSpan").css("display", "none");
                        $('#register-btn').attr("disabled", false);
                    }
                });
            });

//E-mail validation
            $("input[name='email']").keydown(function () {
                if (!$("input[name='email']").val().includes("@") || !$("input[name='email']").val().includes(".")) {
                    $('#mailSpan').text('Geçerli bir e-posta adresi giriniz');
                    $('#register-btn').attr("disabled", true);
                } else {
                    $('#mailSpan').text('');
                    $('#register-btn').attr("disabled", false);
                }
            });

//TC validation
            var desen_tc = /^[0-9]{11}$/;
            $("input[name='identity_number']").keyup(function () {
                var parTC = $("#identity_number").val();
                var blnSonuc = $("#tcSpan").text('');
                var strTC = String(parTC);
                if (desen_tc.test(strTC) == false) {
                    $("#tcSpan").text('Geçerli bir TC kimlik numarası giriniz.');
                }

                int1 = parseInt(strTC.substr(0, 1));
                int2 = parseInt(strTC.substr(1, 1));
                int3 = parseInt(strTC.substr(2, 1));
                int4 = parseInt(strTC.substr(3, 1));
                int5 = parseInt(strTC.substr(4, 1));
                int6 = parseInt(strTC.substr(5, 1));
                int7 = parseInt(strTC.substr(6, 1));
                int8 = parseInt(strTC.substr(7, 1));
                int9 = parseInt(strTC.substr(8, 1));
                int10 = parseInt(strTC.substr(9, 1));
                int11 = parseInt(strTC.substr(10, 1));

                if ((int1 + int3 + int5 + int7 + int9 + int2 + int4 + int6 + int8 + int10) % 10 != int11)
                {
                    $("#tcSpan").text('Geçerli bir TC kimlik numarası giriniz.');
                }
                if (((int1 + int3 + int5 + int7 + int9) * 7 + (int2 + int4 + int6 + int8) * 9) % 10 != int10)
                {
                    $("#tcSpan").text('Geçerli bir TC kimlik numarası giriniz.');
                }
                if (((int1 + int3 + int5 + int7 + int9) * 8) % 10 != int11)
                {
                    $("#tcSpan").text('Geçerli bir TC kimlik numarası giriniz.');
                }
                if (blnSonuc == true)
                {
                    $("#tcSpan").text('');
                }
                return blnSonuc;
            });
            $("input[name='identity_number']").keydown(function (e) {
                $(e.target).bind("keypress", function (e) {
                    var keyCode = e.which ? e.which : e.keyCode
                    if (!(keyCode >= 48 && keyCode <= 57)) {
                        $("#tcSpan").text('Sadece numerik sayı girmeye çalışınız.');
                        return false;
                    } else {
                        // $("#tcSpan").css("display", "none");
                    }
                });
            });

//Password validation
            var minLength = 8;
            $(document).ready(function () {
                $("input[name='password']").on('keydown keyup change', function () {
                    var char = $(this).val();
                    var charLength = $(this).val().length;
                    if (charLength < minLength) {
                        $('#passwordSpan').text('En az 8 karakter giriniz.');
                        $('#register-btn').attr("disabled", true);
                    } else {
                        $('#passwordSpan').text('');
                        $('#register-btn').attr("disabled", false);
                    }
                });
            })

        });
    </script>
@endpush
