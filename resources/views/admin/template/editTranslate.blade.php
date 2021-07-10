@extends('master')

        <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Traduccio</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>
@section('content')
    <h1><small>Editar aquesta traducció</small></h1>

    <div class="container">
        <form method="POST" action="{{url('/admin/api/editTranslate/save')}}" style="padding-left: 1cm">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="put"/>
            <div class="form-group">
                <label>Traducció: </label>
                <input type="text"
                       class="form-control"
                       name="translate"
                       value="{{$translations ->translate}}">
            </div>
            <input type="hidden" name="id" value="{{$translations->id}}">

            <button type="submit" class="btn btn-success">
                <i class="fa fa-btn fa-edit"></i>
            </button>

        </form>
    </div>

@endsection
</body>
</html>
