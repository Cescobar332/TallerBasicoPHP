<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        return view('perfil.index');
    }
    public function intereses(){
        return view('perfil.intereses');
    }
    public function habilidades(){
        return view('perfil.habilidades');
    }
    public function metas(){
        return view('perfil.metas');
    }
}
