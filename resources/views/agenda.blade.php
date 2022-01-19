@extends('layouts.app')

@section('content')
    <div class="position-absolute w-100 vh-100 overflow-hidden mx-auto"
         style="background-image: url({{asset('/images/bg_wallpaper.jpg')}});background-repeat: no-repeat; background-size: cover;">
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">

            <div class="position-absolute w-100 vh-100 overflow-hidden"
                 style="background-image: url({{asset('assets/images/white_background.jpg')}}); background-repeat: no-repeat; background-size: cover;">
                <div class="h-100 d-flex align-items-center">
                    <div class="container-fluid agenda h-100">

                        <div class="row align-items-center h-100">

                            <div class="col-12 col-xl-11 mx-auto" style=" background-color: rgba(255,255,255,.5); border-radius: 15px">
                                <h2 class="text-center">TAKVİMMM <span>20 OCAK,
                        Perşembe | 8:00 - 10:30 PM</span></h2>
                                <div>
                                    <table class="table table-striped rounded">
                                        <thead>
                                        <tr>
                                            <th scope="col">ZAMAN</th>
                                            <th scope="col">KONU</th>
                                            <th scope="col">KONUŞMACI</th>
                                        </tr>
                                        </thead>
                                        @foreach($agendas as $key => $agenda)
                                            <tbody style="font-size: 2vh;">
                                            <tr>
                                                <td>{{$agenda->start_datetime}} - {{$agenda->end_datetime}}</td>
                                                <td>{{$agenda->title}}</td>
                                                <td>{{$agenda->speakers}}</td>
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>

                                {{--                                <a href="#" class="btn btn-link text-white btn-lg w-50 text-decoration-none mb-2"--}}
                                {{--                                   id="agenda_button"--}}
                                {{--                                   style="background-color: #EC942C;"><span--}}
                                {{--                                        id="text_btn_agenda">Katıl--}}
                                {{--                                <img src="{{asset('')}}"></span></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
