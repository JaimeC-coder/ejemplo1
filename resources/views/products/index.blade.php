@extends('layouts.layout')

@section('title', $title)


@section('content')

<div class="content">
    <div class="container">
        @if ($mensaje = Session::get('success'))
            <div class="alert alert-primary" role="alert">
                <strong>{{ $mensaje }}</strong>
            </div>
        @endif
    </div>

    <h1>Lista de Productos!</h1>


    <table class="table">
        <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">category</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->prodName }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->catName }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('products.edit', $product) }}">Editar</a>
                        <a class="btn btn-dark" href="{{ route('products.show', $product) }}">Mostrar</a>

                        <form action="{{ route('products.destroy', $product) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection
