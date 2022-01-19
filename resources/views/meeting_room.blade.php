@extends('layouts.app_no_menu')

@section('content')
    <div class="position-absolute w-100 vh-100 overflow-hidden mx-auto">
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">

            <div class="container h-100 application-container" style="opacity: 0">
                <div class="row align-items-center h-100">
                    <div class="col-6 mx-auto">
                        <div class="landscapeWarning">
                            <div class="innerWarning">
                                <span class="mb-1">Online<br> Virtual Meeting</span>
                                <span style="margin-bottom: -18px;"><img src="{{asset('images/rotate_phone.png')}}" class="lwIcon" alt=""></span>
                                <h5 style="font-family: 'dobrabold';">Lütfen Cihazınızı Yan Çevirin <small
                                        style="font-family: 'open_sanssemibold';">TEŞEKKÜRLER </small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <video autoplay muted loop id="myVideo"
                   class="position-fixed mw-100 w-100 h-100 mx-auto object-fit-cover object-position-center">
                <source src="{{asset('images/meeting_room.mp4')}}" type="video/mp4">
            </video>

            <div class="position-absolute meeting-room-iframe-container iframeContainer">
                <iframe src="https://www.youtube.com/embed/86YLFOog4GM" class="w-100 h-100" style="border:none;"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>


        </div>
    </div>
