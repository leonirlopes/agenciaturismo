<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index (){

        $title = 'Agência de Turismo - Painel';

        return view('panel.home.index', compact('title'));
    }
}
