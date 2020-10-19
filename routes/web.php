<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/toni', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function (){
    echo('Olá Mundo');
});

Route::get('/a', function (){
    echo('<h1> Olá mundo!</h1>');
});

Route::get('/bem-vindo/aedah',function(){
    echo('<h1> Esta é só para o Agrupamento :) </h1>');
});

Route::get('/nome/{nome}',function($nome){
    echo('<h1> Olá ' .$nome. ' </h1>');
});

Route::get('/nome/{nome}/{apelido}',function($nome,$apelido){
   echo('<h1> Olá '.$nome.' '.$apelido.'</h1>');
});

Route::get('/name/{nome}/{numero}', function($nome,$numero){
    $numero=is_numeric($numero)?$numero:5;
    for($i=0; $i<$numero; $i++){
        echo($nome. '<br> ');
    }
});

Route::get('/', function () {
    return view('bemvindo');
});

Route::get('/nomes/{nome}/{apelido}',
           function($nome=null, $apelido=null){
                return view('mostranome',[
                    'nome'=> $nome,
                    'apelido'=> $apelido
                ]);
});
     
Route::get('/nomes/{nome}/{apelido}/{numero}',
           function($nome=null, $apelido=null, $numero=null){
               return view('mostranomenum',[
                    'nome'=> $nome,
                    'apelido'=> $apelido,
                   'numero'=> $numero
                ]);
});           
    
Route::get('/tarefas', function(){
    $tarefas=[
        'comprar senha',
        'Imprimir fotocópias',
        'Carregar cartão'
    ];
    return view('tarefas',[
        'tarefas'=>$tarefas
    ]);
});

Route::get('/index','App\Http\Controllers\PortalController@index');

Route::get('/equipas/{chave}/{nome?}','App\Http\Controllers\PortalController@listarEquipa');


           
           