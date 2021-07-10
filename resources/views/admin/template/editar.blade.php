@extends('master')
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar - {{$dictionaries->words_ebrenques}}</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

<!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
@section('content')
<h1><small>Edició Paraules</small></h1>
<div class="container">
<form method="POST" action="{{url('/admin/api/editar/save')}}" style="padding-left: 1cm">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="put"/>
    <div class="form-group">
        <label>Paraula / Expressió: </label>
        <input type="text"
               class="form-control"
               name="words_ebrenques"
               value="{{$dictionaries ->words_ebrenques}}">
    </div>
    <select name="types">
        <option selected value="{{$dictionaries->types}}"> {{$dictionaries->types}}</option>
        <option value="Substantiu">Substantiu</option>
        <option value="Adjectiu">Adjectiu</option>
        <option value="Article">Article</option>
        <option value="Verb">Verb</option>
        <option value="Expressio">Expressió</option>
        <option value="Pronoms">Pronoms</option>
        <option value="Adverbi">Adverbis</option>
    </select>
    <div class="form-group">
        <label>Descripció:</label>
        <br>
        <textarea type="text"
                  class="form-control"
                  name="descriptionts"
                  value=""
                  rows="9">{{$dictionaries->descriptionts}}</textarea>

        {{--<input type="text" class="form-control" name="descriptionts" value="">--}}
    </div>
    <input type="hidden" name="id" value="{{$dictionaries->id}}">
    <center>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-btn fa-edit"></i>
    </button>
    </center>

</form>
</div>
@endsection
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
