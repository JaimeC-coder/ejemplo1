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

    <h1>Lista de Usuarios!</h1>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}

                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('users.edit', $user) }}">Editar</a>
                        <a class="btn btn-dark" href="{{ route('users.show', $user) }}">Mostrar</a>

                        <form action="{{ route('users.destroy', $user) }}" method="post">
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
