<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NumerosController extends Controller
{
    //
    public function number(){
        $usuario = auth()->user();
        $producto_por_usuario=Producto::where("id_usuario",Auth::id())->first();
        $palabra='aaaaaaa';
        $ost= "golden sun";
        $pre= "para pullear"
        return view('prueba.numeros',compact('usuario','producto_por_usuario','palabra','ost','pre'));
    }
}
