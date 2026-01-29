@extends('layouts.index')

@section('title', 'Cadastro | Bowl')

@section('content')
    <h1>Criar Conta</h1>

    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <button type="submit">Cadastrar</button>
    </form>
@endsection
