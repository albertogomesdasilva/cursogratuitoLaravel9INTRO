@extends('layouts.default')

@section('title', 'Lista de todos os usuários')
@section('content')


    @foreach ($users as $user )

   

    {{ $user->id }} - {{ $user->name}} </a><br><hr>

    {{-- <a href="{{ route('user/{{$user->id}}') }}">teste</a> <br><hr> --}}

    @endforeach
    

@endsection

