@extends('layout.layout')


@section('conteudo')

    <!--<!DOCTYPE html>
<html>
<head>
    <title>Responsive Bootstrap jQuery Grid</title>
    <meta charset="utf-8" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>Lista de Alunos Inscritos</h3>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
       
        <thead>
            <tr>
                
                <th>RA</th>
                <th data-field="PlaceOfBirth" data-min-width="250" data-priority="1">Nome do Aluno</th>
                <th data-field="DateOfBirth" data-type="date" data-min-width="250" data-priority="2">Curso</th>
            </tr>
        </thead> 
        <tbody>
        @if(count($alunos) > 0)
                @foreach($alunos as $aluno)
                    <tr>
                        <td><div class="col-md-6"> 
                            {{$aluno->ra}}
                        </div></td>

                        <td><div class="col-md-6"> 
                            {{$aluno->nomealuno}}
                        </div></td>

                        <td><div class="col-md-6"> 
                            {{$aluno->curso}}
                        </div></td>

                    </tr>


                    @endforeach
                @endif
        </tbody>
    </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var $grid = $('#grid').grid({

                
                
            });
        });
    </script>
</body>
</html>
--> 
            <!-- Nova Table -->
            <div class="col-xs-6">
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>RA</th>
                        <th>Nome do Aluno</th>
                        <th>Curso</th>
                    </tr>

                    <tbody>
                       @if(count($alunos) > 0)
                        @foreach($alunos as $aluno)
                        <tr>
                            <td><div class="col-md-6">
                                {{$aluno->ra}}
                            </div></td>

                            <td><div class="col-md-6">
                            {{aluno->nomealuno}}
                            </div></td>

                            <td><div class="col-md-6">
                            {{$aluno->curso}}
                            </div></td>

                        </tr>
                        @endforeach

                      @endif
                    </body>

                </table>

            </div>


@endsection