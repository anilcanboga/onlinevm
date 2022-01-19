<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function view_create_agenda()
    {
        $agendas = Agenda::all();
        return view('crud_page.crud_index',["agendas" => $agendas]);
    }



    public function postAgenda(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'speakers' => 'required',
            'start_datetime' => 'required',
            'end_datetime' => 'required',
        ]);

//        $agenda = new Agenda();
//        $agenda->title = $request->title;
//        $agenda->speakers = $request->speakers;
//        $agenda->start_datetime = $request->start_datetime;
//        $agenda->end_datetime = $request->end_datetime;
//        $agenda->save();
//        return back();

                $agenda = Agenda::create([
                    'title' => $request->title,
                    'speakers' => $request->speakers,
                    'start_datetime' => $request->start_datetime,
                    'end_datetime' => $request->end_datetime,
                ]);
                $agenda->save();
                return back();
    }

    public function deleteAgenda(int $id)
    {
          Agenda::where('id',$id)->delete();

//        $agenda = Agenda::findOrFail($id);
//        $agenda->delete();

        return redirect()->route('view_create_agenda');

    }

    public function getEditAgenda(int $id)
    {
        $agendas = Agenda::all();
        $agenda = Agenda::where('id',$id)->first();
        return view("crud_page.crud_index", ["agendas" => $agendas, "first_agenda"=>$agenda]);


    }

    public function postEditAgenda(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'speakers' => 'required',
            'start_datetime' => 'required',
            'end_datetime' => 'required',
            'agenda_id' => 'required',
        ]);

        //Güncelleme işlemleri
//        $agenda = Agenda::find($request->agenda_id);
//        $agenda->title = $request->title;
//        $agenda->speakers = $request->speakers;
//        $agenda->start_datetime = $request->start_datetime;
//        $agenda->end_datetime = $request->end_datetime;
//        $agenda->save();


        //farklı bir yolla

        $agenda = Agenda::where('id', $request->agenda_id);
        $agenda->update([
            'title' => $request->title,
            'speakers' => $request->speakers,
            'start_datetime' => $request->start_datetime,
            'end_datetime' => $request->end_datetime,
        ]);
//       $agenda->touch();

        return redirect()->route('view_create_agenda');
    }

}
