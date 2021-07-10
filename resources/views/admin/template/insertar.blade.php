@extends('master')
{{--Es tracta del formulari per a poder inserir les paraules ebrenques i una primera traduccio--}}
        <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">




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

    <div class="col-md-8 col-md-offset-2">
        <div class="panel-heading">
            <h1 style="text-align: center">
                <small>Inserció de paraula ebrenca
                </small>
            </h1>
        </div>
        <div class="panel" style="padding: 20px">

            <div class="panel-body">

                <div class="container col-xs-6">
                    {{--usem la etiqueta form per definir en quin lloc es redifira el formulari--}}
                    <form method="post" action="{{url('/admin/api/insertar/save')}}" style="padding-left: 1cm; width: 200%">

                        {{--Declarel el token per tal de evitar errors--}}
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{--Variable words_ebrenques--}}

                        <div class="form-group"{{ $errors->has('words_ebrenques') ? ' has-error' : '' }}>
                            <label for="name" class="col-md-4 control-label">Paraula / Expressió: </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="words_ebrenques" value="{{ old('words_ebrenques' )}}">
                                @if ($errors->has('words_ebrenques'))
                                    <span class="help-block ">
                                        <strong style="color: #860000">{{ $errors->first('words_ebrenques') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <br><br>

                        {{--Variable tipus, aquest funcionara mitjançant un desplegable per triar entre les diferents opcions--}}
                        <select name="types">
                            <option selected value="Falta assignar"> Eligeix una opció</option>
                            <option value="Substantiu">Substantiu</option>
                            <option value="Adjectiu">Adjectiu</option>
                            <option value="Article">Article</option>
                            <option value="Verb">Verb</option>
                            <option value="Expressio">Expressió</option>
                            <option value="Pronoms">Pronom</option>
                            <option value="Adverbi">Adverbi</option>
                        </select>

                        <br><br>

                        {{--Variable descipcio, amb text area --}}
                        <div class="form-group">
                            <label>Descripció:</label>
                            <br>
                            <textarea type="text" class="form-control" name="descriptionts" value="" rows="9"></textarea>
                        </div>
                        {{--Afegim la variable translate per poder declarar una traduccio--}}
                        <div>
                            <label>Traducció</label>
                            <div class="form-group"{{ $errors->has('words_ebrenques') ? ' has-error' : '' }}>
                                <input type="text" class="form-control" name="translate" value="">
                                @if ($errors->has('translate'))
                                    <span class="help-block">
                                        <strong style="color: #860000">{{ $errors->first('translate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div style="text-align: right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-book"></i>Inserir
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
</body>
</html>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
