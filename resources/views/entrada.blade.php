@extends('layout')
            @section('titulo-paginas')
            A minha APPm
            @endsection
            @section('header')
            Bem-vindo
            @endsection
            @section('conteudo')
            <h2>Esta é a minha primeira web APP em laravel </h2>
            <p>Para que conste...estou a usar um controller</p>
            <img src="{{asset('imagens/a.jpg')}}">
            @endsection