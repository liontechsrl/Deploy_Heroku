<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvisosController extends Controller
{
    function avisosD(){
        return view('docente.avisosD');
    }
    function convocatoriasD(){
        return view('docente.convocatoriasD');
    }
}
