@extends('layouts.app')
@section('title', 'Editar usuário {{ $users->name }}')
@section('content')

    <h1>Editar usuário {{ $user->name }}</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update',$user->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email }}"">
        <input type="password" name="password" placeholder="Senha:">
        <button class="btn" type="submit">Enviar</button>
    </form>
@endsection