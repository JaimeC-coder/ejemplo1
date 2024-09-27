@extends('layouts.layout')

@section('title', 'Welcome')

@section('content')

<a class="btn btn-primary" href="{{route('users.index')}}">Usuarios</a>
<a class="btn btn-secondary" href="{{route('products.index')}}">Productos</a>
<a class="btn btn-dark" href="{{route('categories.index')}}">Productos</a>

