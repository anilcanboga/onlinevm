@extends('layouts.app_no_menu')

@section('content')

    <div class="d-flex h-100 intro">
        <video autoplay muted id="introVideo" onended="window.location.href='{{route('login')}}'"
               class="position-fixed mw-100 w-100 h-100 mx-auto z-10 object-fit-cover object-position">
            <source src="{{asset('images/intro.mp4')}}" type="video/mp4">
        </video>
        <a href="{{route('home')}}" class="btn btn-intro pl-4 pr-4" id="skip_btn">İntro'yu Geç</a>
    </div>

@endsection

