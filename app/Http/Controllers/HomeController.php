<?php

namespace App\Http\Controllers;

use App\Agenda;
use DateTime;
use Illuminate\Http\Request;
use Spatie\CalendarLinks\Link;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function countdown_page()
    {
        return view('countdown_page');
    }

    public function intro()
    {
        return view('intro');
    }

    public function agenda()
    {
        $agendas = Agenda::all();
        return view("agenda", ["agendas" => $agendas]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function googleCalendar(Request $request)
    {
        $from = DateTime::createFromFormat('Y-m-d H:i', '2022-01-20 09:00');
        $to = DateTime::createFromFormat('Y-m-d H:i', '2022-01-20 18:00');

        /*
        $from = DateTime::createFromFormat('Y-m-d H:i', $request->from);
        $to = DateTime::createFromFormat('Y-m-d H:i', $request->to);
        */

        $link = Link::create('Virtual Meeting', $from, $to)
            ->description("<p>Virtual Meeting</p><a href='#'>Link</a>");

        return response()->json(['url' => $link->google()]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function outlookCalendar(Request $request)
    {
        $from = DateTime::createFromFormat('Y-m-d H:i', '2022-01-20 09:00');
        $to = DateTime::createFromFormat('Y-m-d H:i', '2022-01-20 18:00');

        /*
        $from = DateTime::createFromFormat('Y-m-d H:i', $request->from);
        $to = DateTime::createFromFormat('Y-m-d H:i', $request->to);
        */

        $link = Link::create('Virtual Meeting', $from, $to)
            ->description("<a href='#'>Link</a>'");

        return response()->json(['url' => $link->webOutlook()]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function meeting_room()
    {
        return view('meeting_room');
    }
}
