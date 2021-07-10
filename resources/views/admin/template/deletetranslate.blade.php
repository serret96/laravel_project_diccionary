@extends('master')
        <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>
@section('content')
    <div class="container" style="width: 50%;">
        <div class="panel panel-default">
            <h3>Estar segur d'eliminar: </h3>
            <div class="container">
                <div class="form-group">
                    <label>
                        <h3 class="panel panel-heading" style="padding-right: 120px;">Traducció:
                            <strong>{{$translations ->translate}}</strong>
                        </h3>
                    </label>

                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="...">
                    <div class="btn-group" role="group" aria-label="...">

                        <form method="get" action="{{url('/admin/api/deleteTranslate')}}" style="padding-left: 1cm">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" value="{{$translations->id}}">

                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-check-square-o"></i> Acceptar
                            </button>
                        </form></div>
                    <div class="btn-group" role="group" aria-label="..."><form method="get" action="{{url('/admin/panel')}}" style="padding-left: 1cm">
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-ban"></i> Cancelar
                            </button>
                        </form></div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>



</body>

@endsection
</html>