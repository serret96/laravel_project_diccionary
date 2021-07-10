@extends('master')



<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
<link type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">



@section('content')

    <h1>Paraula Ebrenca : {{$dictionaries->words_ebrenques}}
 </h1>
    <div class="container-fluid" style="background: white; margin: 5ch;">
        <article class="row">
            <div class="table" style="margin: auto; padding: 5ch">
                <table class="table" id="myTable" cellspacing="0" width="100%" style="padding: 5ch;">
                    <thead >
                    <tr style="background: #D9D9D9">
                        <th colspan="2" style="text-align: center;">
                            Inf.
                            Traducció
                        </th>

                        <th colspan="2">
                            OP
                        </th>

                    </tr>
                    <tr>
                        <th style="text-align: center">
                            Id
                        </th>
                        <th style="text-align: center">
                            Traducció
                        </th>
                        <th style="text-align: center">
                            Editar
                        </th>
                        <th style="text-align: center">
                            Eliminar
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($translations as $translation)

                        <tr>
                            <td style="text-align: center">
                                {{$translation->id_words}}
                            </td>
                            <td  style="text-align: center">
                                {{$translation->translate}}
                            </td>
                            <td style="width:4%;">
                                <form method="get"
                                      action="{{url('/admin/api/editTranslate')}}">
                                    <input type="hidden"
                                           name="id"
                                           value="{{$translation->id}}">
                                    <center>
                                        <button type="submit" class="btn btn-success" data-toggle="tooltip" title="Editar!">
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
                                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Eliminar!">
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

    <script src="{{asset('src/js/jquery.dataTables.min.js')}}"></script>


    <script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function() {
            jQuery('#myTable').dataTable({"oLanguage": {
                "sEmptyTable": "Tabellen innehåller ingen data",
                "sInfo": "Veient _START_ a _END_ del total de _TOTAL_ files",
                "sInfoEmpty": "Veient 0 a 0 del total de 0 files",
                "sInfoFiltered": "(filtrerade från totalt _MAX_ rader)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "Veient _MENU_ files",
                "sLoadingRecords": "Carregant...",
                "sProcessing": "transformació...",
                "sSearch": "Recerca:",
                "sZeroRecords": "No hi ha resultats que coincideixen",
                "oPaginate": {
                    "sFirst": "Primer",
                    "sLast": "Passar",
                    "sNext": "Següent",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": habilitat per ordenar la columna en ordre ascendent",
                    "sSortDescending": ": habilitat per ordenar la columna en ordre descendent"
                }
            }
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

@endsection
