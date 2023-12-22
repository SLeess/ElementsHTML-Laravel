<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class ElementController extends Controller
{
    public function index(){
        $rows = Element::all();
        return view('welcome', ['elements' => $rows]);
    }
}
