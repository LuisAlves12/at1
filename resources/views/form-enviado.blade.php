@extends('layout')
            @section('titulo-paginas')
            Formulário submetido
            @endsection
            @section('header')
            Informação enviada através de form 
            @endsection
            @section('conteudo')
            {{$nome}}<br>
            {{$morada}}<br>
            {{$automovel}}<br>
            @endsection