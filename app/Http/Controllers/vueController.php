<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\estado;

class vueController extends Controller
{
    public function editaEstado(Request $request,$id){
        return Inertia::render('viewEstadoEditar');
    }
    public function index()
    {
        return Inertia::render('inicio');
    }
    public function estados()
    {
        $estados = estado::all();
        return Inertia::render('estados',["estados"=>$estados]);
    }
    public function estadoInsertView()
    {
        return Inertia::render('estadoInsert');
    }
    public function estadoInsert(Request $request){
        //dd($request);
        $estado = new estado();
        $estado->nombre=$request->nombre;
        $estado->clave=$request->clave;
        if ($estado->save()) {
            $estados = estado::all();
            return Inertia::render('estados',["estados"=>$estados]);
        }
    }
}
