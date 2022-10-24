@extends('layouts.default')

@section('content')


    @foreach ($users as $user )

    {{ $user->id}} - {{ $user->name}} <br><hr>

    @endforeach

@endsection