@extends('layouts.default')

@section('title', 'Página de um usuário')
@section('content')

   
        <h1>Passando variável direto: {{ $name }} </h1>
        <hr>
        <h1>Listando o Retorno da Model User</h1>
        <h2>{{ $user }} </h2>
        <p>Data de Hoje: {{ date('d/m/Y')}}</p>
        <p>Selecionando o nome fica: {{ $user->name }} </p>
        <p>Selecionando o Email fica: {{ $user->email }} </p>
   
@endsection