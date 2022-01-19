@extends('layouts.app')

@section('content')

    <div class="position-absolute w-100 vh-100 overflow-hidden mx-auto"
         style="background-image: url({{asset('/images/bg_wallpaper.jpg')}});background-repeat: no-repeat; background-size: cover;">

        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card" style="opacity: .9">
                            <div class="card-header">{{ __('Şifre Sıfırla') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Posta Adresi') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Şifre Sıfırlama Linki Gönder') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
