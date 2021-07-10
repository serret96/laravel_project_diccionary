@extends('master')
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

@section('content')

{{--Petit formulari de redireccio per afegir la primera traduccio--}}
<label> Estar segur d'inserir aquesta traducció: {{$translation-> translate}}</label>
<form type="hidden" action="/admin/api/insertarTraduccio/save" method="post">
    <input type="hidden" name="translate" value="{{$translation-> translate}}">
    <input type="hidden" name="id_words" value="{{$translation -> id_words}}">

    <button type="submit" value="editar" data-toggle="tooltip"
            title="Guardar!">
        <a href="/admin/panel"><i class="fa fa-arrow-right">

            </i></a>
    </button>

</form>

@endsection