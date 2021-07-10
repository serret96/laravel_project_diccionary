@extends('layouts.app')

@section('title', 'Cerca')

@section('content')
    <link href="/src/css/freelancer.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">
    <script src="src/js/jquery-3.1.0.js"></script>

    {{--<script src="src/css/font-awesome.css"></script>--}}
    <div class="container">
        <br><br><br><br>
        <div class="row">
            <h3>Buscador</h3>
            <br>
            <form method="get" action="search" class="" role="search">

                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="term" placeholder="Cercador de paraules...">
                    <span class="input-group-btn">
                                <button class="btn btn-default-sm" type="submit">
                                    <i class="fa fa-search">
                                    </i>
                                </button>
                         </span>
                </div>
            </form>

        <br>
        <div class="panel panel-default">
            <div class="container">
                <div class="row" style="margin-right: 30px">


                    <h3 class="panel panel-heading" >
                        <strong>Resultats de la cerca:</strong>
                    </h3>
                </div>

                <div class="panel-body">

                    @foreach($dictionaries as $dictionary)
                        <div class="list-group collapse navbar-collapse">

                            <form action="{{url('search/wordSelect')}}" method="get">
                                <button type="submit" class="btn btn-group-justified">
                                    <input type="hidden" name="id" value="{{$dictionary->id}}">

                                    {{ $dictionary->words_ebrenques }}</a>
                                </button>
                            </form>

                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
