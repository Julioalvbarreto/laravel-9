@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1>
        Editar o Usuário {{$user->name}}
    </h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error">{{$error}}</li>
            @endforeach
        </ul>   
    @endif

    <form action="{{route('users.update', $user->id)}}" method="post">
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{$user->name}}">
        <input type="email" name="email" placeholder="exemplo@exemplo.com" value="{{$user->email}}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Alterar</button>
    </form>

@endsection
