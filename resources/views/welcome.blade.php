@extends('layouts.main')

@section('titulo', 'Menu principal')

@section('conteudo')
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

<div class="row table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descrição</th>
        <th scope="col">CSS</th>
        <th scope="col">HTML</th>
        <th scope="col">Data de Criação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($elements as $element)
        <tr>
            <th scope="row">{{ $element->id }}</th>
            <td>{{ $element->type }}</td>
            <td>{{ $element->description }}</td>
            <td>{{ $element->css }}</td>
            <td>{{ $element->html }}</td>
            <td>{{ $element->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection

@section('line-styles')
<style>
    /* Estilização para os parágrafos */
    .introduction {
        font-size: 15px;
        color: #000;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .highlight {
        font-size: 20px;
        color: var(--cor-navbar);
        font-weight: bold;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    .show{
        display: inline-block;
    }
</style>
@endsection