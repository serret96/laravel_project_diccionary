@extends('master')
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Traducció</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>
@section('content')
{{--Aquest formulari es per inserir traduccions,
    consta de dos variables invisibles lo token i el id_words
    El id_words l'extraem e la paraula que li volem afegir la traduccio--}}
<form method="post" action="{{url('/admin/api/insertarTraduccio/save')}}" style="padding-left: 1cm">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <label>Traducció: </label>
    <input type="text" class="form-control" name="translate" value="">
    <input type="hidden" name="id_words" value="{{Input::get('id')}}">
    <button type="submit"
            class="btn btn-primary"
            data-toggle="tooltip"
            title="Insertar!">
        <i class="fa fa-tag">

        </i>
    </button>

</form>
@endsection
</body>
</html>
