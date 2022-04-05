@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1>
        Editar o Usuário {{$user->name}}
    </h1>

    @include('includes.validations-form')
        
    <form action="{{route('users.update', $user->id)}}" method="post">
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        @method('PUT')
        @include('users._partials.form')
    </form>

    <button style="margin-top: 10px;"><a href="{{route('users.index')}}">Cancelar</a></button>

@endsection
