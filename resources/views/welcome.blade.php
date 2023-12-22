@extends('layouts.main')

@section('titulo', 'Menu principal')

@section('conteudo')
<h1 style="margin-bottom: 20px;">Elementos para Desenvolvimento</h1>

<p class="introduction">
    Bem-vindo ao nosso <strong>Sistema de gerenciamento de Elementos Web</strong>! 
    <br>
    Aqui, você pode encontrar e visualizar uma variedade de elementos prontos para uso em seus projetos. Desde barras de navegação elegantes até botões estilizados, nossa tabela contém uma ampla gama de componentes prontos para integrar às suas páginas web.
</p>
<p class="highlight">
    Explore a tabela abaixo para obter detalhes sobre cada elemento, incluindo o tipo, descrição, código CSS e HTML.
</p>

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
        font-size: 26px;
        color: var(--cor-navbar);
        font-weight: bold;
        margin-bottom: 30px;
        line-height: 1.6;
    }
</style>
@endsection