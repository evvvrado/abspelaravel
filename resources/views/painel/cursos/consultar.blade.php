@extends('painel.template.main')

@section('styles')
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
Listagem de Cursos
@endsection

@section('botoes')
<a name="" id="" class="btn btn-success" onclick="novoCurso()" role="button">Novo Curso</a>
@endsection

@section('conteudo')
{{-- <div class="row">
    <div class="form-group col-12">
        <form action="#" class="dropzone">
            <div class="fallback">
                <input name="file" type="file" multiple="multiple">
            </div>
            <div class="dz-message needsclick">
                <div class="mb-3">
                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                </div>

                <h4>Drop files here or click to upload.</h4>
            </div>
        </form>

    </div>
</div> --}}
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll; min-height: 80vh;">
                <table id="datatable" class="table table-bordered dt-responsive text-left nowrap w-100">
                    <thead>
                        <tr>
                            <th style="width: 30px;"></th>
                            <th>Título, Turmas</th>
                            <th style="text-align: left; width: 150px;">Valor</th>
                            <th style="width: 30px;">Status</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($cursos as $curso)
                        <tr>
                            <td class="text-center">
                                <div class="dropdown mt-4 mt-sm-0">
                                    <a href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bars" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu" style="margin: 0px;">
                                        <a class="dropdown-item" onclick="carregaCurso({{ $curso->id }})" role="button"><i class="bx bx-edit-alt"></i> Editar</a>
                                        @if ($curso->ativo)
                                        <a href="{{ route('painel.curso.ativo', ['curso' => $curso]) }}" class="dropdown-item" role="button"><i class="fas fa-eye-slash"></i> Desativar</a>
                                        @else
                                        <a href="{{ route('painel.curso.ativo', ['curso' => $curso]) }}" class="dropdown-item" role="button"><i class="fas fa-eye"></i>
                                            Ativar</a>
                                        @endif
                                        {{-- <a href="{{route('painel.curso.deletar', ['curso' => $curso])}}" id="" class="dropdown-item" role="button"><i class="fas fa-trash-alt pr-3"></i>
                                            Excluir</a> --}}
                                        <a href="{{ route('painel.turmas', ['curso' => $curso]) }}" id="" class="dropdown-item" role="button"><i class="fas fa-user pr-3"></i>
                                            Turmas</a>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span>{{ $curso->titulo }}</span>
                                <br>
                                <small>{{ $curso->turmas->count() }} turmas</small>
                            </td>

                            <td>
                                @if ($curso->turmas->where("ativo", true)->count() > 0)
                                R$ {{ number_format($curso->turmas->where("ativo", true)->sortBy("data")->first()->preco, 2, ",", ".") }}
                                @else
                                Sem turmas ativadas
                                @endif
                            </td>

                            <td class="text-center" style="vertical-align: middle;">
                                <i class="fa fa-check" @if ($curso->ativo) style="color: green;" @endif aria-hidden="true"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

{{-- <div class="modal fade" id="modalNovoCurso" tabindex="-1" role="dialog" aria-labelledby="modalNovoCursoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('painel.curso.cadastrar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" maxlength="255" required>
                        </div>
                    </div>
                    <hr>
                    <h4>Detalhes</h4>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Resumo</label>
                            <textarea class="form-control" name="detalhes_resumo" id="detalhes_resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Conteúdo</label>
                            <textarea class="form-control" name="detalhes_conteudo" id="detalhes_conteudo" rows="10"></textarea>
                        </div>
                    </div>

                    <hr>
                    <h4>Programação</h4>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Resumo</label>
                            <textarea class="form-control" name="programacao_resumo" id="programacao_resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Conteúdo</label>
                            <textarea class="form-control" name="programacao_conteudo" id="programacao_conteudo" rows="10"></textarea>
                        </div>
                    </div>

                    <hr>
                    <h4>Instrutores</h4>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Resumo</label>
                            <textarea class="form-control" name="instrutores_resumo" id="instrutores_resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Conteúdo</label>
                            <textarea class="form-control" name="instrutores_conteudo" id="instrutores_conteudo" rows="10"></textarea>
                        </div>
                    </div>

                    <hr>
                    <h4>Local</h4>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Resumo</label>
                            <textarea class="form-control" name="local_resumo" id="local_resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Conteúdo</label>
                            <textarea class="form-control" name="local_conteudo" id="local_conteudo" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal fade" id="modalCurso" tabindex="-1" role="dialog" aria-labelledby="modalCursoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" id="modalCursoBody">

            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- Required datatable js -->
<script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/dropzone/min/dropzone.min.js') }}"></script>
<script>
    function loadSummernote() {
            $('#detalhes_resumo').summernote({
                height: 100,
            });

            $('#detalhes_conteudo').summernote({
                height: 300,
            });

            $('#programacao_resumo').summernote({
                height: 100,
            });

            $('#programacao_conteudo').summernote({
                height: 300,
            });

            $('#instrutores_resumo').summernote({
                height: 100,
            });

            $('#instrutores_conteudo').summernote({
                height: 300,
            });

            $('#local_resumo').summernote({
                height: 100,
            });

            $('#local_conteudo').summernote({
                height: 300,
            });

        }

        function novoCurso() {
            //$("#modalCursoBody").html("");
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/includes/loading');
            xhr.onreadystatechange = function() {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                $("#modalCursoBody").html(this.responseText);
                $("#modalCurso").modal("show");
                xhr.open('GET', '/includes/curso/formulario');
                xhr.onreadystatechange = function() {
                    if (this.readyState !== 4) return;
                    if (this.status !== 200) return; // or whatever error handling you want
                    $("#modalCursoBody").html(this.responseText);
                    return loadSummernote();
                }
                xhr.send();
            }
            xhr.send();
        }

        function carregaCurso(id) {
            var nome = $("input[name='nome']").val();
            var _token = $('meta[name="_token"]').attr('content');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': _token
                }
            });

            $.ajax({
                url: '/sistema/cursos/api/getCurso/' + id,
                type: 'GET',
                dataType: 'JSON',
                beforeSend: function() {
                    //$("#modalCursoBody").html("");
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', '/includes/loading');
                    xhr.onreadystatechange = function() {
                        if (this.readyState !== 4) return;
                        if (this.status !== 200) return; // or whatever error handling you want
                        $("#modalCursoBody").html(this.responseText);
                        $("#modalCurso").modal("show");
                    }
                    xhr.send();

                },
                success: function(data) {
                    data = JSON.parse(data);
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', '/includes/curso/formulario');
                    xhr.onreadystatechange = function() {
                        if (this.readyState !== 4) return;
                        if (this.status !== 200) return; // or whatever error handling you want
                        $("#modalCursoBody").html(this.responseText);
                        $("#form-edicao input[id='titulo']").val(data.titulo);
                        $("#form-edicao input[id='curso_id']").val(data.id);
                        $("#form-edicao img[id='miniatura-preview']").attr("src", "/" + data.miniatura);
                        $("#form-edicao img[id='banner-preview']").attr("src", "/" + data.banner);
                        $("#form-edicao textarea[id='detalhes_resumo']").html(data.detalhes_resumo);
                        $("#form-edicao textarea[id='detalhes_conteudo']").html(data.detalhes_conteudo);
                        $("#form-edicao textarea[id='programacao_resumo']").html(data.programacao_resumo);
                        $("#form-edicao textarea[id='programacao_conteudo']").html(data
                            .programacao_conteudo);
                        $("#form-edicao textarea[id='instrutores_resumo']").html(data.instrutores_resumo);
                        $("#form-edicao textarea[id='instrutores_conteudo']").html(data
                            .instrutores_conteudo);
                        $("#form-edicao textarea[id='local_resumo']").html(data.local_resumo);
                        $("#form-edicao textarea[id='local_conteudo']").html(data.local_conteudo);
                        if (data.modalidade == 0) {
                            $("#modalidade_curso").attr("checked", "checked");
                        } else {
                            $("#modalidade_evento").attr("checked", "checked");
                        }
                        return loadSummernote();
                    }
                    xhr.send();
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }

        $(document).ready(function() {
            var tabela = $('#datatable').DataTable({
                language: {
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
            });
            tabela.columns.adjust().draw();
        });
</script>
@endsection