@extends('layouts.app')

@section('title', 'Cadastrar Usuário')

@section('content')
    <h1>
        Novo Usuário
    </h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error">{{$error}}</li>
            @endforeach
        </ul>   
    @endif

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="exemplo@exemplo.com">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Cadastrar</button>
    </form>

@endsection
