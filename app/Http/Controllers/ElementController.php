<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class ElementController extends Controller
{
    public function index(){
        return view('inicio');
    }
    public function elementos(){
        $rows = Element::all();
        return view('elementos', ['elements' => $rows]);
    }

    public function indexConteudo(){
        $rows = Element::all();
        return view('conteudo', ['elements' => $rows]);
    }

    public function obterDetalhesElemento($id) {
        $elementDetails = Element::find($id);
        return response()->json($elementDetails);
    }

    public function desativarElemento($id){
        $elemento = Element::find($id);

        $elemento->type = "#". $elemento->type;
        $elemento->save();

        return response()->json(['message' => 'Elemento desativado com sucesso!']);
    }

    public function destroy($id){
        Element::findOrFail($id)->delete();
        return response()->json(['message', 'Sucesso! Elemento apagado.']);
    }
    public function atualizarElemento($id){
        $type = request('type');
        $description = request('description');
        $html = request('html');
        $css = request('css');
        $imgLink = request('imgLink');

        $elemento = Element::find($id);

        $elemento->type = $type;
        $elemento->description = $description;
        $elemento->html = $html;
        $elemento->css = $css;
        $elemento->link_image= $imgLink;

        $elemento->save();

        return response()->json(['message' => 'Elemento atualizado com sucesso!']);
    }
}
