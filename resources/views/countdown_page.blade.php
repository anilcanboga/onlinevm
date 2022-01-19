@extends('layouts.app_no_menu')

@section('content')
    <style>
        /* Start Main Rule */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        * {
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body {
            background-repeat: no-repeat;
            background-size:cover;
            background-position:top;
            min-height:100vh;
            display:flex;
            flex-direction:column;
            align-items:center;
            font-family: 'Poppins', sans-serif;
            position: relative;
        }
        .overlay{
            background-image:url({{asset('/images/bg_wallpaper.jpg')}});
            position:absolute;
            top:0;
            left:0;
            right:0;
            bottom:0;
            /*background:rgba(0,0,0,0.4);*/
            width:100%;
            height:100%;
            z-index:-1;
        }
        .countdown-container{
            display:flex;
            justify-content: space-around;
        }
        .big-text{
            font-size:4rem;
        }
        .title{
            margin:10px;
            text-align:center;
            color:#fff;
            width:100%;
            letter-spacing:2px;
            font-size: 3rem;
            line-height: 5.5rem;
        }
        .title span{
            display:block;
            font-size:6rem;
        }
        .wrapper{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-wrap: wrap;
            min-height:100vh;
        }
        .countdown-container > div{
            margin:0 2rem;
            text-align: center;
            border:2px solid #fff;
            padding:0px 20px;
            border-radius: 12px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.5);
            box-sizing: border-box;
            color:#fff;
            min-width:150px;
        }
        @media (max-width:992px){
            .countdown-container > div{
                margin:0 1rem;
            }
            .wrapper{
                transform: scale(.7);
            }
        }
        @media (max-width:767px){
            .countdown-container{
                flex-wrap: wrap;
            }
            .countdown-container > div{
                margin:1rem auto;
                max-width:150px;
            }
            .title{
                font-size: 1.5rem;
                line-height: 3.5rem;
                margin:10px 0px;
            }
            .title span{
                font-size: 2rem;
                letter-spacing: 1rem;
            }
        }
    </style>

    <div id="countdown_page_style">
        <div class="overlay"></div>
        <div class="wrapper">
            <div class="">
                <h1 class="title"><span>Virtual Meeting</span> Etkinliğinin başlamasına kalan süre</h1>
                <div class="countdown-container">
                    <div>
                        <p id="days" class="big-text">0</p>
                        <span>Gün</span>
                    </div>
                    <div>
                        <p id="hours" class="big-text">0</p>
                        <span>Saat</span>
                    </div>
                    <div>
                        <p id="min" class="big-text">0</p>
                        <span>Dakika</span>
                    </div>
                    <div>
                        <p id="sec" class="big-text">0</p>
                        <span>Saniye</span>
                    </div>
                </div>
                <div class="text-center mt-2 mt-lg-3">
                    <form action="{{route("outlookCalendar")}}" class="d-inline">
                        <input class="btn btn-primary" type="submit" value="Outlook Tarihi Ekle">
                    </form>
                    <form action="{{route("googleCalendar")}}" class="d-inline">
                        <input class="btn btn-primary d-inline" type="submit" value="Google Tarihi Ekle">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
