<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public $equipas =[
        "Equipa 1",
        "Equipa 2",
        "Equipa 3",
        "Equipa 4",
        "Equipa 5"
    ];
    //
    public function index(){
        return view('entrada');
    }
    
    /*public function listarEquipas(){
        $equipas =[
            "Equipa 1",
            "Equipa 2",
            "Equipa 3"
        ];
        return view('equipas', [
            'equipas'=>$equipas
        ]);
    } */

    public function listarEquipa(Request $request){
        $a = $request -> chave;
        $b = $request -> nome;
        if(!isset($b)){
            // $num = is_numeric($a);
            $a = is_numeric($a) ? $a :5;
            // if($a >= count($this->equipas) || $a < 0 || $num){
            if($a >= count($this->equipas) || $a < 0){
                $a="Equipa de Inválidos!!";
            }   
            else{
                $a=$this->equipas[$request -> chave];
            }
            return view('equipas', ['equipa'=> $a]);
        }
        else{
            return view('equipas', ['equipas'=>$this->equipas]);
        }
    }
}
