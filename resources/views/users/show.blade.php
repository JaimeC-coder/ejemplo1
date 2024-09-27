@extends('layouts.layout')

@section('title', $title)


@section('content')

<div class="content">



    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        </tbody>
    </table>

</div>

@endsection
