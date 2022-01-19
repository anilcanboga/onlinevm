@extends('layouts.app')

@section('content')
    <div class="position-absolute w-100 vh-100 overflow-hidden mx-auto"
         style="background-image: url({{asset('/images/bg_wallpaper.jpg')}});background-repeat: no-repeat; background-size: cover;">
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a type="button" class="btn btn-outline-dark" href="{{url('/agenda/crud')}}">Index</a>
                        <div style="height: 300px; overflow: auto">
                            <table class="table table-striped table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ZAMAN</th>
                                    <th scope="col">KONU</th>
                                    <th scope="col">KONUŞMACI</th>
                                    <th scope="col">İŞLEMLER</th>
                                </tr>
                                </thead>
                                @foreach($agendas as $key => $agenda)
                                    <tbody>
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$agenda->start_datetime}} - {{$agenda->end_datetime}}</td>
                                        <td>{{$agenda->title}}</td>
                                        <td>{{$agenda->speakers}}</td>
                                        <td>
                                        <a href="{{route('deleteAgenda',['id'=>$agenda->id])}}" class="btn btn-sm btn-danger">Sil</a>
                                        <a href="{{route('getEditAgenda',['id'=>$agenda->id])}}" class="btn btn-sm btn-success">Düzenle</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>

                        <form action="{{isset($first_agenda) ? url('/agenda/edit') : url('/agenda/store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <strong class="bg-info">KONU:</strong>
                                        <input type="text" name="title" class="form-control" placeholder="Konu"
                                                value="{{isset($first_agenda) ? $first_agenda->title : ''}}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <strong class="bg-info">KONUŞMACI:</strong>
                                        <input type="text" name="speakers" class="form-control" placeholder="Konuşmacı"
                                               value="{{isset($first_agenda) ? $first_agenda->speakers : ''}}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <strong class="bg-info">Başlangıç Zamanı:</strong>
                                        <input type="datetime-local" name="start_datetime" class="form-control" id="start_datetime"
                                               value="{{ Carbon\Carbon::parse(isset($first_agenda) ? $first_agenda->start_datetime : '')->format('Y-m-d\TH:i') }}" required
                                               onchange="dateLimiter()">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <strong class="bg-info">Bitiş Zamanı:</strong>
                                        <input type="datetime-local" name="end_datetime" class="form-control" id="end_datetime"
                                               value="{{ Carbon\Carbon::parse(isset($first_agenda) ? $first_agenda->end_datetime : '')->format('Y-m-d\TH:i') }}" required>
                                    </div>
                                </div>
                                <div class="col-12 text-center">

                                    {!! isset($first_agenda) ? '<input type="hidden" name="agenda_id" value="'.$first_agenda->id.'">' : '' !!}

                                    <input type="submit" class="btn btn-primary"
                                    value="{{isset($first_agenda) ? 'Güncelle' : 'Ekle'}}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('script')
<script>
    function dateLimiter() {
        document.getElementById("end_datetime").min = document.getElementById("start_datetime").value;
    }
</script>
@endpush
