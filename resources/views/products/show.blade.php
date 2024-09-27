@extends('layouts.layout')

@section('title', $title)


@section('content')

<div class="content">



    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">proce</th>
                <th scope="col">category_id</th>
                <th scope="col">catName</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->prodName }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->category->catName }}</td>

            </tr>
        </tbody>
    </table>

</div>

@endsection
