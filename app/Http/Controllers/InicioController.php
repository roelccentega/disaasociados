<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
    	return view('web.index');
    }
    public function nosotros()
    {
    	return view('web.nosotros');
    }
    public function contact()
    {
    	return view('web.contacto');
    }
}
