@extends('master')
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>
@section('master')
<form method="get" action="{{url('/admin/api/delete/suggest')}}" style="padding-left: 1cm">
    <label>Estar segur d'eliminar: </label>

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label class="col-lg-3 control-label">Suggeriment: </label>
        <input type="text"
               class="form-control"
               name="words_ebrenques"
               value="{{$suggest -> word }}">
    </div>

    <input type="hidden" name="id" value="{{$suggest->id}}">

    <button type="submit">Acceptar</button>

</form>
<form method="get" action="{{url('/admin/api/suggest')}}" style="padding-left: 1cm">
    <button type="submit">Cancelar</button>
</form>
</body>

@endsection
</html>