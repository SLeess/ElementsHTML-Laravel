@extends('layouts.main')

@section('meta-request-put')
{{-- Meta para configurar o header de requests de alterações no banco, Pesquisar mais depois --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('titulo', 'Visualizar Elementos')

@section('ambienteDeConteudo')
<section id="conteudo" class='col-11 offset-1 col-md-11 offset-md-1'>
    <h1 id="dropdownMenuButton" style="margin-bottom: 20px;white-space: normal; text-align: center;">Lista de elementos criados</h1>
    <div class="card-deck d-flex row px-1" style="padding: 0 80px;">
        @foreach($elements as $element)
            @if($element->type[0] != '#')
                <div class="card col-lg-3 col-md-6 col-sm-5 col-12" style="margin-bottom: 20px;">
                    <img class="card-img-top" src=" @if($element->link_image != null && $element->link_image != 'null') {{$element->link_image}} @else data:image/jpeg;base64,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 @endif " 
                    alt="Imagem salva do: {{$element->type}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ucwords(trim($element->type))}}</h5>
                        <p class="card-text">{{ Str::limit($element->description, 70)}}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Última atualização há @php 
                                $diff = now()->diff($element->updated_at);
                                $formattedDiff = '';
                                $validator = false;

                                if ($diff->days > 0) {
                                    $formattedDiff .= $diff->days . ' dias';
                                    $validator = true;
                                }

                                if ($diff->h > 0) {
                                    $formattedDiff .= ($validator?', ':'') . $diff->h . ' horas';
                                    $validator = true;
                                }

                                if ($diff->i > 0) {
                                    $formattedDiff .= ($validator?' e ':'') . $diff->i . ' minutos.';
                                }

                                echo $formattedDiff ?: 'alguns segundos';
                            @endphp 
                        </small>
                    </div>
                </div>
            @endif
        @endforeach
    </div>    
</section>
@endsection

@section('imports')
<link rel="stylesheet" href="css/configurarElements.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection

@section("line-styles")
<style>
    .row > * {
        padding: 0;
    }

    .card:hover{
        cursor: pointer;
        transform: scale(1.06);
        border: 1px solid var(--cor2);
        transition: 0.4s all ease-in-out;
        z-index: 997;
    }

    .card{
        transition: 0.4s all ease-in-out;
        z-index: 1;
    }
</style>
@endsection