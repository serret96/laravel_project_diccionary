@extends('master')
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Delete - {{$dictionaries->words_ebrenques}}</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


</head>
<body>
@section('content')
    <div class="container">
        <label style="align-items: ;"><h4>Estar segur d'eliminar: </h4></label>


        <div class="container">
        <h3 class="panel panel-heading" style="padding-right: 120px;">Paraula / Expressió:
            <strong>{{$dictionaries ->words_ebrenques}}</strong>
        </h3>
        </div>
        <div class="btn-toolbar" role="toolbar" aria-label="...">
            <div class="btn-group" role="group" aria-label="...">

        <form method="get" action="{{url('/admin/api/delete')}}" style="padding-left: 1cm">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id" value="{{$dictionaries->id}}">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-btn fa-check-square-o"></i> Acceptar
    </button>


</form></div>
<form method="get" action="{{url('/admin/panel')}}" style="padding-left: 1cm">
    <button type="submit" class="btn btn-danger">
        <i class="fa fa-btn fa-ban"></i> Cancelar
    </button>
</form>
        </div>
        <br><br>
    </div>
    </div>
    </div>
    </div>

</body>

@endsection
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
