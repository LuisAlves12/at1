@extends('layout')
            @section('titulo-paginas')
            Equipas do torneio
            @endsection
            @section('header')
            Equipas
            @endsection
            @section('conteudo')
            @if(isset($equipas))
            @foreach ($equipas as $equipa)
            <h3>{{$equipa}}</h3>
            @endforeach
            @else
            <h1>{{$equipa}}</h1>
            @endif
            @endsection







