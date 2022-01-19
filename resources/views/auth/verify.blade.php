@extends('layouts.app')

@section('content')
    <div class="position-absolute w-100 vh-100 overflow-hidden mx-auto"
         style="background-image: url({{asset('/images/bg_wallpaper.jpg')}});background-repeat: no-repeat; background-size: cover;">
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card" style="opacity: .9; border-radius: 15px">
                            <div class="card-header">{{ __('Email adresinizi doğrulayın') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('E-posta adresinize yeni bir doğrulama bağlantısı gönderildi.') }}
                                    </div>
                                @endif

                                {{ __('Devam etmeden önce, lütfen bir doğrulama bağlantısı için e-postanızı kontrol edin.') }}
                                {{ __('E-postayı almadıysanız') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('yeniden göndermek için buraya tıklayın') }}</button>.
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
