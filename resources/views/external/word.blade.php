@extends('layouts.app')

@section('title', 'Cerca:'. "$dictionary->words_ebrenques")

@section('content')
    <!-- Theme CSS -->
    <link href="/src/css/freelancer.min.css" rel="stylesheet">

    >
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    {{--<link rel="stylesheet" href="src/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    {{--<script src="src/js/jquery-3.1.0.js"></script>--}}

    <br><br>
    <div class="container" style="padding-top: 20px">
        <div class="container-fluid">
            <div class="row">

                <form method="get" action="/search" class="" role="search">
                    <h3>
                        <small>Cercador de paraules
                        </small>
                    </h3>

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
</div>
    </div>
    <br>

    <div class="container" >
        <div class="panel">

        </div>

        <div class="container-fluid" style="text-align: left">
            <font size="5">
            <article>
                <h2>  {{$dictionary->words_ebrenques}}
                </h2>
                <label>
                    Tipus : <small>{{$dictionary->types}}
                    </small>
                </label>
                <div class="row">
                    <font size="5">
                        <div class="panel">

                            <div class="panel-body">
                                {{$dictionary->descriptionts}}
                            </div>
                            <br>
                            <div class="panel-body">
                                <label> Les Traduccions són:
                                </label>


                                <td>
                                    <ol>
                                        <?php
                                        for($k = 0; $k<count($dictionary->translations);$k++){?>
                                        <li c><?php echo $dictionary->translations[$k]['translate'];
                                            echo '<br/>';
                                            }
                                            ?>
                                        </li>
                                    </ol>
                                </td>

                            </div>
                        </div>
                </font>
            </div>

    </article>
                </font>
            </div>
        </article>

    </div>
    </div>
@endsection