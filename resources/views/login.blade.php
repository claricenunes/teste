@extends('layouts.index')

@section('title', 'Login | Bowl')

@section('content')
    <h1>Página de Login</h1>

    <form method="POST" action="{{ route('login.process') }}">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">Entrar</button>
    </form>

    <a href="{{ route('register.page') }}" class="btn-default">
        Registrar
    </a>
@endsection
