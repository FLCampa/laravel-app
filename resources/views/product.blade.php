@extends('layouts.main')

@section('title', 'Product Page')

@section('content')

@if ($id)
<p>Product id: {{ $id }}</p>
@endif

@endsection