@extends('layouts.main')

@section('title', 'Home')

@section('content')

<h1>Title</h1>

<img src="/assets/placeholder.png" alt="placeholder image" width="200">

@if ($name == 'John')
    <p>Salve John</p>
@else
    <p>Bem vindo {{ $name }} tem {{ $age }} anos</p>
@endif

@for ($i = 0; $i < count($arr); $i++)
    <p>Item {{ $arr[$i] }}</p>
@endfor

@php
    $teste = 'teste';
    echo $teste;
@endphp

<!-- Comentario HTML -->
{{-- Comentario BLADE --}}

@foreach ($names as $name)
    <p>{{ $loop->index }}</p>
    <p>{{ $loop->iteration }}</p>
    <p>{{ $name }}</p>
@endforeach

@endsection
