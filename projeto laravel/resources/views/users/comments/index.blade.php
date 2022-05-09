@extends('layouts.app')
@section('title', 'Comentarios do usuario {{ $user->name }}')
@section('content')

    <h1>Comentarios do usuario {{ $user->name }}
    (<a href="{{ route('create.comments',$user->id) }}">+</a>)</h1>

    <form class="search-form" action="{{ route('users.list') }}" method="GET">
        <input type="text" name="search" id="" placeholder="Pesquisar">
        <button class="btn" type="submit">Pesquisar</button>
    </form>

@foreach ($comments as  $comment)

    <div class="list">
        <p>Comentario {{ $comment->body }} - Visivel {{ $comment->visible ? 'SIM ' : 'NAO' }} </p>
        {{-- <div class="btns">  
            <a class="btn" href="{{ route('users.details', $user->id) }}"> Detalhes</a> 
            <a class="btn" href="{{ route('users.edit', $user->id) }}"> Editar</a>
        </div>       --}}
    </div> 

@endforeach    
@endsection