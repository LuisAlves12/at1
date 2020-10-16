<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index(){
        return view('entrada');
    }
    
    public function listarEquipas(){
        $equipas =[
            "Equipa 1",
            "Equipa 2",
            "Equipa 3"
        ];
        return view('equipas', [
            'equipas'=>$equipas
        ]);
    }
    public function listarEquipa(Request $request){
        $equipas =[
            "Equipa 1",
            "Equipa 2",
            "Equipa 3",
            "Equipa 4",
            "Equipa 5"
        ];
        $a = $request -> chave;
        $a = is_numeric($a) ? $a :5;
        if($a >= count($equipas) || $a < 0){
            $a="Equipa Inválida!!";
        }
        else{
            $a=$equipas[$request -> chave];
        }
        return view('equipas', ['equipa'=> $a]);
    }
}
