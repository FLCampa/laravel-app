@extends('layouts.main')

@section('title', 'Products Page')

@section('content')

<h1>Products Page</h1>

@if ($busca)
<p>O usuário está buscando por: {{ $busca }}</p>
@endif

@endsection