@extends('layout.user')

@section('content')
<h1>Bienvvenido {{ auth()->user()->name}}</h1>

@endsection