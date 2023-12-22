@extends('layouts.main')

@section('titulo', 'Menu principal')

@section('ambienteDeConteudo')
<section id="conteudo" class='col-10 offset-1 col-md-10 offset-md-1'>
<div class="row">
        <div class="col-md-6">
            <img src="/img/banner-web-dev.png" style="border-radius: 5px 4px 2px 6px;" alt="Imagem 1" class="img-fluid mb-3">
        </div>
        <div class="col-md-6">
            <h3>Bem-vindo ao Meu Site</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in arcu justo. 
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
            <p>
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
            </p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6 order-md-2">
            <img src="/img/banner-pessoa-prog.png" style="border-radius: 30px;" alt="Imagem 2" class="img-fluid mb-3">
        </div>
        <div class="col-md-6 order-md-1">
            <h3>Objetivo do site</h3>
            <p>
                Consectetur adipiscing elit. Nullam in arcu justo. Sed ut perspiciatis unde 
                omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore.
            </p>
            <p>
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
            </p>
        </div>
    </div>
</section>
@endsection

@section('line-styles')
<style>
    #conteudo {
        max-width: 95vw;
        margin-top: 20px;
    }

    #conteudo img {
        max-width: 100%;
        height: auto;
    }

    h3 {
        color: #DB472F;
    }

    p {
        color: #333;
    }
</style>
@endsection