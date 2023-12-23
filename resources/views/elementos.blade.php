@extends('layouts.main')

@section('meta-request-put')
{{-- Meta para configurar o header de requests de alterações no banco, Pesquisar mais depois --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('titulo', 'Elementos Salvos')

@section('ambienteDeConteudo')
<section id="conteudo" class='col-10 offset-1 col-md-7 offset-md-1'>
    <div class="dropdown">
        <h1 id="dropdownMenuButton" style="margin-bottom: 20px;white-space: normal;" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Elementos para Desenvolvimento</h1>
        <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton" style="z-index: 999;">
            <p class="introduction">
                Bem-vindo ao nosso <strong>Sistema de gerenciamento de Elementos Web</strong>! 
                <br><br>
                Aqui, você pode encontrar e visualizar uma variedade de elementos prontos para uso em seus projetos. Desde barras de navegação elegantes até botões estilizados, nossa tabela contém uma ampla gama de componentes prontos para integrar às suas páginas web.
            </p>
            <p class="highlight">
                Explore a tabela abaixo para obter detalhes sobre cada elemento, incluindo o tipo, descrição, código CSS e HTML.
            </p>
        </div>
    </div>
    <!-- row table-responsive -->
    <div class="row">
        <table id="table-elements" class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descrição</th>
            <th scope="col">CSS</th>
            <th scope="col">HTML</th>
            <th scope="col">Imagem</th>
            <th scope="col">Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($elements as $element)
            <tr>
                <th scope="row">{{ $element->id }}</th>
                <td>{{ $element->type }}</td>
                <td>{{ Str::limit($element->description, 25) }}</td>
                <td>{{ Str::limit($element->css, 30) }}</td>
                <td>{{ Str::limit($element->html, 30) }}</td>
                <td>{{ Str::limit($element->link_image, 30) }}</td>
                <td>{{ $element->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</section>
<aside id="lateral" class='d-flex col-10 offset-1 offset-md-0 col-md-3'>
    <h2 id='txtBuscar' class="row">Buscar elemento</h2>
    <div class="submit-line row">
        <input type="search" name="buscarElement" id="buscarElement" class="form-control">
        <button class="submit-lente" type="submit">
            <i class="fa fa-search"></i>
        </button>
        <button type="button" class="disabled btn btn-danger btn-md row mt-3">Visualizar</button>
        <button id="editarBtnModal" type="button" class="disabled btn btn-danger btn-md row mt-1" data-toggle="modal" data-target=".bd-example-modal-lg">Editar</button>
        <button id="apagarBtnModal" type="button" class="disabled btn btn-danger btn-md row mt-1">Apagar</button>
    </div>
</aside>
<div class="modals">
    {{----------------MODAL DE EDIÇÃO----------------}}
    <div class="modal fade bd-example-modal-lg" id="EditarModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloLabelModalEditar"></h5>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <form>
                                <div class="form-group">
                                    <label for="type-name" class="col-form-label">Tipo:</label>
                                    <input type="text" class="form-control" id="typeInput" maxlength="60">
                                </div>
                                <div class="form-group">
                                    <label for="description-name" class="col-form-label">Descrição:</label>
                                    <textarea class="form-control" id="descriptionTextArea" maxlength="255"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="html-code" class="col-form-label">HTML:</label>
                                    <textarea class="form-control txtGeral" id="htmlTextArea"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="css-code" class="col-form-label">CSS:</label>
                                    <textarea class="form-control" id="cssTextArea"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="img-link" class="col-form-label">Link de Imagem:</label>
                                    <input type="text" class="form-control" id="imgLinkInput" maxlength="255">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarModalEditarBtn">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="salvarAlteracoesModalEditarBtn">Salvar Alterações</button>
                </div>
            </div>
        </div>
    </div>
    {{---------------------------------------------}}
</div>
@endsection

@section('imports')
<link rel="stylesheet" href="css/configurarElements.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="js/configurarElementos.js"></script>
@endsection