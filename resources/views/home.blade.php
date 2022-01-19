@extends('layouts.app')

@section('content')
    <div class="position-absolute w-100 vh-100 overflow-hidden mx-auto"
         style="background-image: url({{asset('/images/bg_wallpaper.jpg')}});background-repeat: no-repeat; background-size: cover;">

        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Online Virtual Meeting Etkinliğine Hoş geldiniz') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                {{ __('Giriş Yaptınız!') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
