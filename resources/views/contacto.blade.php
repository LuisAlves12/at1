@extends('layout')
@section('titulo-pagina')
Contactos
@endsection
@section('header')
Fale connosco
@endsection
@section('conteudo')
<form method="post" action="{{route('processar.form')}}">
    @csrf
<label for="nome">Nome</label>
<input type="text" name="nome">
<label for="morada">Morada</label>
<input type="text" name="morada">
<label for="automovel">Automovel</label>
<select name="automovel">
    <option value="Volvo">Volvo</option>
    <option value="Saab">Saab</option>
    <option value="Mercedes">Mercedes</option>
    <option value="Audi">Audi</option>
</select>
<button type="submit">Enviar</button>
</form>
@endsection