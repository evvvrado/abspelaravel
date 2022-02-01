@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de Matrículas
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNovaMatricula" role="button">Nova Matrícula</a>
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll;">
                <table id="datatable" data-order='[[ 2, "DESC" ]]' class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            {{-- <th></th> --}}
                            <th>Aluno</th>
                            <th>Turma</th>
                            <th>Início</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach($matriculas as $matricula)
                            <tr>
                                {{-- <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <a href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-bars" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu" style="margin: 0px;">
                                            <a href="{{route('painel.estadual.editar', ['estadual' => $estadual])}}" id="" class="dropdown-item" role="button"><i class="bx bx-edit-alt pr-3"></i> Editar</a>
                                            <a href="{{route('painel.estadual.deletar', ['estadual' => $estadual])}}" id="" class="dropdown-item" role="button"><i class="fas fa-trash-alt pr-3"></i> Excluir</a>
                                            <a href="{{route('painel.diretorias', ['estadual' => $estadual])}}" id="" class="dropdown-item" role="button"><i class="fas fa-user pr-3"></i> Diretoria</a>
                                        </div>
                                    </div>
                                </td> --}}
                                <td>{{$matricula->aluno->nome}}</td>
                                <td>{{$matricula->turma->nome}}</td>
                                <td>{{date("d/m/Y", strtotime($matricula->created_at))}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<div class="modal fade" id="modalNovaMatricula" tabindex="-1" role="dialog" aria-labelledby="modalNovaMatriculaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('painel.matricula.matricular')}}" method="post">
                    @csrf
                    <div class="form-group col-12 mb-3">
                        <label for="tags">Alunos</label>
                        <br>
                        <select class="js-example-basic-multiple js-states form-control" style="width: 100%;" multiple="multiple" name="alunos[]" id="select_alunos" multiple required>
                            <option value="" label="default"></option>
                            @foreach(\App\Models\Aluno::orderBy("nome", "ASC")->get() as $aluno)
                                    <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label for="">Turma</label><br>
                        <select class="form-select select2" style="width: 100%;" name="turma" id="select_turma" required>
                            @foreach(\App\Models\Turma::all() as $turma)
                                <option value="{{$turma->id}}">{{$turma->curso->titulo . ": " . $turma->nome}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-end">
                            <button type="submit"
                                class="btn btn-primary">Matricular</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.10/sorting/datetime-moment.js"></script>
    <script src="{{asset('admin/libs/select2/js/select2.min.js')}}"></script>
    <script>
        $(document).ready(function() {

            $.fn.dataTable.moment( 'DD/MM/YYYY HH:mm:ss' );    //Formatação com Hora
            $.fn.dataTable.moment('DD/MM/YYYY');    //Formatação sem Hor
            $('#datatable').DataTable( {
                language:{
                    "emptyTable": "Nenhum registro encontrado",
                    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "infoFiltered": "(Filtrados de _MAX_ registros)",
                    "infoThousands": ".",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "zeroRecords": "Nenhum registro encontrado",
                    "search": "Pesquisar",
                    "paginate": {
                        "next": "Próximo",
                        "previous": "Anterior",
                        "first": "Primeiro",
                        "last": "Último"
                    },
                    "aria": {
                        "sortAscending": ": Ordenar colunas de forma ascendente",
                        "sortDescending": ": Ordenar colunas de forma descendente"
                    },
                    "select": {
                        "rows": {
                            "_": "Selecionado %d linhas",
                            "0": "Nenhuma linha selecionada",
                            "1": "Selecionado 1 linha"
                        },
                        "1": "%d linha selecionada",
                        "_": "%d linhas selecionadas",
                        "cells": {
                            "1": "1 célula selecionada",
                            "_": "%d células selecionadas"
                        },
                        "columns": {
                            "1": "1 coluna selecionada",
                            "_": "%d colunas selecionadas"
                        }
                    },
                    "buttons": {
                        "copySuccess": {
                            "1": "Uma linha copiada com sucesso",
                            "_": "%d linhas copiadas com sucesso"
                        },
                        "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                        "colvis": "Visibilidade da Coluna",
                        "colvisRestore": "Restaurar Visibilidade",
                        "copy": "Copiar",
                        "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                        "copyTitle": "Copiar para a Área de Transferência",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Mostrar todos os registros",
                            "1": "Mostrar 1 registro",
                            "_": "Mostrar %d registros"
                        },
                        "pdf": "PDF",
                        "print": "Imprimir"
                    },
                    "autoFill": {
                        "cancel": "Cancelar",
                        "fill": "Preencher todas as células com",
                        "fillHorizontal": "Preencher células horizontalmente",
                        "fillVertical": "Preencher células verticalmente"
                    },
                    "lengthMenu": "Exibir _MENU_ resultados por página",
                    "searchBuilder": {
                        "add": "Adicionar Condição",
                        "button": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "clearAll": "Limpar Tudo",
                        "condition": "Condição",
                        "conditions": {
                            "date": {
                                "after": "Depois",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "gt": "Maior Que",
                                "gte": "Maior ou Igual a",
                                "lt": "Menor Que",
                                "lte": "Menor ou Igual a",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "string": {
                                "contains": "Contém",
                                "empty": "Vazio",
                                "endsWith": "Termina Com",
                                "equals": "Igual",
                                "not": "Não",
                                "notEmpty": "Não Vazio",
                                "startsWith": "Começa Com"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Excluir regra de filtragem",
                        "logicAnd": "E",
                        "logicOr": "Ou",
                        "title": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Limpar Tudo",
                        "collapse": {
                            "0": "Painéis de Pesquisa",
                            "_": "Painéis de Pesquisa (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Nenhum Painel de Pesquisa",
                        "loadMessage": "Carregando Painéis de Pesquisa...",
                        "title": "Filtros Ativos"
                    },
                    "searchPlaceholder": "Digite um termo para pesquisar",
                    "thousands": "."
                } 
            } );

            $('#select_alunos').select2({
                tags: true,
            });

            $('#select_turma').select2({
                dropdownParent: $('#modalNovaMatricula')
            });
        } );    
    </script> 
@endsection