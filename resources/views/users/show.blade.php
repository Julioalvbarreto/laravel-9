@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')

    <h1>
    Detalhes do usuário - {{ $user->name }}
    </h1>

    <ul>
        <li>
            ID = {{ $user->id }}
        </li>

        <li>
            NOME = {{ $user->name }}
        </li>

        <li>
            EMAIL = {{ $user->email }}
        </li>

        <li>
            CRIADO EM = {{ $user->created_at }}
        </li>
    </ul>
    
    <button style="margin-bottom: 10px;"><a href="{{route('users.index')}}">Retornar</a></button>
    <form action="{{route('users.delete', $user->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Deletar</button>
    </form>

@endsection