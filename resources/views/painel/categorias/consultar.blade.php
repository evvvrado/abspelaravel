@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de Categorias
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNovaCategoria" role="button">Nova Categoria</a>
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll;">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th></th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach($categorias as $categoria)
                            <tr>
                                <td>{{$categoria->nome}}</td>
                                <td>
                                    <a href="" id="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditaCategoria{{$categoria->id}}" role="button">Editar</a>
                                    <a name="" id="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluiCategoria{{$categoria->id}}" role="button">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<div class="modal fade" id="modalNovaCategoria" tabindex="-1" role="dialog" aria-labelledby="modalNovaCategoriaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('painel.categoria.cadastrar')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome"
                                id="nome" aria-describedby="helpId" 
                            >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-end">
                            <button type="submit"
                                class="btn btn-primary">Salvar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@foreach($categorias as $categoria)
    <div class="modal fade" id="modalEditaCategoria{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditaCategoria{{$categoria->id}}Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{route('painel.categoria.salvar', ['categoria' => $categoria])}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" name="nome"
                                    id="nome" aria-describedby="helpId" 
                                    value="{{$categoria->nome}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-end">
                                <button type="submit"
                                    class="btn btn-primary">Salvar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalExcluiCategoria{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="modalExcluiCategoria{{$categoria->id}}Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>Ao excluir a categoria "{{$categoria->nome}}" todas as not??cias relacionadas a ela tamb??m ser??o exclu??das. Deseja continuar ?</h5>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <a name="" id="" class="btn btn-danger" href="{{route('painel.categoria.deletar', ['categoria' => $categoria])}}" role="button">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable( {
                language:{
                    "emptyTable": "Nenhum registro encontrado",
                    "info": "Mostrando de _START_ at?? _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 at?? 0 de 0 registros",
                    "infoFiltered": "(Filtrados de _MAX_ registros)",
                    "infoThousands": ".",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "zeroRecords": "Nenhum registro encontrado",
                    "search": "Pesquisar",
                    "paginate": {
                        "next": "Pr??ximo",
                        "previous": "Anterior",
                        "first": "Primeiro",
                        "last": "??ltimo"
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
                            "1": "1 c??lula selecionada",
                            "_": "%d c??lulas selecionadas"
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
                        "collection": "Cole????o  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                        "colvis": "Visibilidade da Coluna",
                        "colvisRestore": "Restaurar Visibilidade",
                        "copy": "Copiar",
                        "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a ??rea de transfer??ncia do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                        "copyTitle": "Copiar para a ??rea de Transfer??ncia",
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
                        "fill": "Preencher todas as c??lulas com",
                        "fillHorizontal": "Preencher c??lulas horizontalmente",
                        "fillVertical": "Preencher c??lulas verticalmente"
                    },
                    "lengthMenu": "Exibir _MENU_ resultados por p??gina",
                    "searchBuilder": {
                        "add": "Adicionar Condi????o",
                        "button": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "clearAll": "Limpar Tudo",
                        "condition": "Condi????o",
                        "conditions": {
                            "date": {
                                "after": "Depois",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "not": "N??o",
                                "notBetween": "N??o Entre",
                                "notEmpty": "N??o Vazio"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "gt": "Maior Que",
                                "gte": "Maior ou Igual a",
                                "lt": "Menor Que",
                                "lte": "Menor ou Igual a",
                                "not": "N??o",
                                "notBetween": "N??o Entre",
                                "notEmpty": "N??o Vazio"
                            },
                            "string": {
                                "contains": "Cont??m",
                                "empty": "Vazio",
                                "endsWith": "Termina Com",
                                "equals": "Igual",
                                "not": "N??o",
                                "notEmpty": "N??o Vazio",
                                "startsWith": "Come??a Com"
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
                            "0": "Pain??is de Pesquisa",
                            "_": "Pain??is de Pesquisa (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Nenhum Painel de Pesquisa",
                        "loadMessage": "Carregando Pain??is de Pesquisa...",
                        "title": "Filtros Ativos"
                    },
                    "searchPlaceholder": "Digite um termo para pesquisar",
                    "thousands": "."
                } 
            } );
        } );    
    </script> 
@endsection