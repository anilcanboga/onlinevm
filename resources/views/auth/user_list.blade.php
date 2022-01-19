@extends('layouts.app')

@section('content')
    <div class="position-absolute w-100 vh-100 overflow-hidden mx-auto"
         style="background-image: url({{asset('/images/bg_wallpaper.jpg')}});background-repeat: no-repeat; background-size: cover;">
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1> Kullanıcı Listesi </h1>
                        <div style="height: 300px; overflow: auto">
                            <table class="table table-striped table-dark" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">İsim</th>
                                    <th scope="col">Soyisim</th>
                                    <th scope="col">TC Kimlik No</th>
                                    <th scope="col">E-Posta</th>
                                    <th scope="col">E-Posta Doğrulama Tarihi</th>
                                </tr>
                                </thead>
                                @foreach($users as $key => $user)
                                    <tbody>
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->surname}}</td>
                                        <td>{{$user->identity_number}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->email_verified_at}}</td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
