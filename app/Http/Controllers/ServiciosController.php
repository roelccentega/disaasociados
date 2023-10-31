<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function contable()
    {
    	return view('web.servicios.asesoria-contable');
    }
     public function legal()
    {
        return view('web.servicios.asesoria-legal');
    }
  
    public function oTributario()
    {
        return view('web.servicios.outsourcing-tributario');
    }

    public function oNominas()
    {
        return view('web.servicios.outsourcing-de-nominas');
    }
  
        public function oContable()
    {
        return view('web.servicios.outsourcing-contable');
    }
  
  


}
