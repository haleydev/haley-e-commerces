@extends('layouts.app')
@section('title', $user->name)
@section('content')
<h1>Listagem do usuarios {{ $user->name }}</h1>

<ul>
    <p>Nome: {{ $user->name }}</Nome:></p>
    <p>E-mail: {{ $user->email }}</p>
    <p>Entrou em: {{ $user->created_at }}</p>
</ul>
<form class="form-details" action="{{ route('users.delete',$user->id) }}" method="POST" >
    @method('delete')
    @csrf
    <button class="btn" type="submit">Deletar</button>
</form>

@endsection