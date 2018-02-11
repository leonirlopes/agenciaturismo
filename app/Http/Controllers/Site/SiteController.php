<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $title = 'Agência de Turismo - Portal';
        
        return view('site.home.index', compact('title'));
    }

    public function promotions()
    {
        $title = 'Promocoes - Agência de Turismo';

        return view('site.promotions.list', compact('title'));
    }
}
