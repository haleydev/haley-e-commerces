@extends('layouts.app')
@section('title', 'Novo comentario para o usuario {{ $user->name }}')
@section('content')

    <h1>Novo comentario para o usuario {{ $user->name }}</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comments.store',$user->id) }}" method="POST">
        @csrf
        <textarea name="body" id="" cols="30" rows="10" placeholder="comentario"></textarea>
        <input type="checkbox" name="visible" id="">        
        <button class="btn" type="submit">Enviar</button>
    </form>
@endsection