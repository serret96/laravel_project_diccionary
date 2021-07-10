@extends('master')

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
<link type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">


@section('content')
    <h3>Taula Suggeriments</h3>
    <div class="container-fluid" style="background: white; margin: 5ch;">
        <article class="row">
            <div class="table" style="margin: auto; padding: 5ch">
                <div class="table-responsive" style="margin: auto; padding: 5ch">
                    <table class="table" id="myTable" cellspacing="0" width="100%">

                        <thead>
                        <tr style="background: #D9D9D9">
                            <th style="text-align: center">id</th>
                            <th style="text-align: center">Paraules</th>
                            <th style="text-align: center">Suggeriments</th>
                            <th style="width: 2%">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody style="background: white">
                        @foreach($suggest as $suggests)
                            <tr>

                                <td style="text-align: center">{{$suggests->id}}</td>
                                <td style="text-align: center">{{$suggests->words}}</td>
                                <td style="text-align: center">{{$suggests->suggest}}</td>
                                <td style="text-align: center">
                                        <form action="{{url('/admin/api/delete/suggest')}}"
                                              method="get">
                                            <input type="hidden" name="id" value="{{$suggests->id}}">
                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Eliminar!">
                                                <i class="fa fa-btn fa-remove"></i>
                                            </button>
                                        </form>
                                    </center>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
