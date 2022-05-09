@extends('layouts.app')
@section('title', 'Listagem de todos usuarios')
@section('content')

    <h1>Listagem de todos usuarios (<a href="{{ route('users.create') }}">+</a>)</h1>

    <form class="search-form" action="{{ route('users.list') }}" method="GET">
        <input type="text" name="search" id="" placeholder="Pesquisar">
        <button class="btn" type="submit">Pesquisar</button>
    </form>
    {{ csrf_token() }}

@foreach ($users as  $user)

    <div class="list">
        <p>Usurio: {{ $user->name }} - E-mail: {{ $user->email }} </p>
        <div class="btns">  
            <a class="btn" href="{{ route('users.details', $user->id) }}"> Detalhes</a> 
            <a class="btn" href="{{ route('users.edit', $user->id) }}"> Editar</a>
            <a class="btn" href="{{ route('users.comments', $user->id) }}"> Comentarios</a>
        </div>      
    </div> 

@endforeach    
@endsection