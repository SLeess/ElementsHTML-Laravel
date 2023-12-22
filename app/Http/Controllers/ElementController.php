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
}
