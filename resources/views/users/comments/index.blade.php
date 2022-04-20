@extends('layouts.app')

@section('title', "Comentarios do Usuário {$user->name}")

@section('content')
    <h1>
        Comentarios do Usuário {{$user->name}}
        <a href="{{route('users.create')}}"> + Novo</a>
    </h1>

    <form action="{{route('users.index')}}" method="get">
            <input type="text" name="search" placeholder="Pesquisar">
            <button>Pesquisar</button>
    </form>
    
    <ul>
        @foreach ($comments as $comment)
            <li>
                {{$user->body}} - 
                {{$user->visible}}
                    <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                    | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </li>
            <br>
        @endforeach
    </ul>  
@endsection

