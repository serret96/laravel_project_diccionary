@extends('master')

<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
{{--@include('admin.template.partials.nav')--}}
{{--<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">--}}
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#myTable').DataTable();
    } );
</script>
@section('content')

    <h1>Taula Traduccions Paraules Ebrenques</h1>
    <div class="container-fluid" style="background: white; margin: 5ch;">
        <article class="row">
            <div class="table" style="margin: auto; padding: 5ch">
                <table class="table" id="myTable" cellspacing="0" width="100%" style="padding: 5ch;">
                    <thead >
                    <tr style="background: #D9D9D9">
                        <th colspan="3" style="text-align: center;">

                            Inf.
                            Traducció
                        </th>

                        <th colspan="2">
                            OP
                        </th>

                    </tr>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Traducció
                        </th>
                        <th>
                            Paraula de referència
                        </th>
                        <th>
                            Editar
                        </th>
                        <th><center>
                                Eliminar
                            </center></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($translations as $translation)


                        <tr class="active">
                            <td>
                                {{$translation->id_words}}
                            </td>
                            <td>
                                {{$translation->translate}}
                            </td>
                            <td>
                                <?php
                                    if ($translation) {
                                        echo $translation->dictionaries->words_ebrenques;
                                    } else {
                                        echo "no hi ha elements";
                                    }
                                ?>
                            </td>
                            <td style="width:4%;">
                                <form method="get"
                                      action="{{url('/admin/api/editTranslate')}}">
                                    <input type="hidden"
                                           name="id"
                                           value="{{$translation->id}}">
                                   <center>
                                       <button type="submit" class="btn btn-success">
                                           <i class="fa fa-btn fa-edit">

                                           </i>
                                       </button>
                                   </center>
                                </form>
                            </td><td>
                                <form method="get"
                                      action="{{url('/admin/api/beforeDeleteTranslate')}}">
                                    <input type="hidden"
                                           name="id"
                                           value="{{$translation->id}}">
                                    <center>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-remove">

                                            </i>
                                        </button>
                                    </center>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </article>
        </div>

    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
        $('#myTable').DataTable( {
            responsive: true
        } );

    </script>
@endsection