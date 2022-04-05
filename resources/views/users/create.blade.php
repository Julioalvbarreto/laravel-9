@extends('layouts.app')

@section('title', 'Cadastrar Usuário')

@section('content')
    <h1>
        Novo Usuário
    </h1>
    @include('includes.validations-form')

    <form action="{{route('users.store')}}" method="POST">
        @include('users._partials.form')
    </form>

@endsection
