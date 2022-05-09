@extends('layouts.app')
@section('title', 'Criar usuário')
@section('content')

    <h1>Criar usuário</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="E-mail:" value="{{ old('email') }}"">
        <input type="password" name="password" placeholder="Senha:">
        <button class="btn" type="submit">Enviar</button>
    </form>
@endsection