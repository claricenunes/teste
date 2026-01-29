@extends('layouts.index')

@section('title', 'Cadastro | Bowl')

@section('content')
    <div class="login-form">
        <h1>Criar Conta</h1>

        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input id="name" class="form-input" type="text" name="name" placeholder="Seu nome completo">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" class="form-input" type="email" name="email" placeholder="seu@email.com">
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" class="form-input" type="password" name="password" placeholder="••••••••">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar senha</label>
                <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" placeholder="••••••••">
            </div>

            <button type="submit" class="btn-default btn-primary">Cadastrar</button>
        </form>

        <a href="{{ route('login.page') }}" class="btn-register">Já tenho conta</a>
    </div>
@endsection
