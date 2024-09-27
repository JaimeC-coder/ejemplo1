@extends('layouts.layout')

@section('title', $title)

@section('content')

<form action="{{route('products.update',$product)}}" method="POST">
    {{ method_field('PATCH') }}
    @csrf
    <div class="mb-3">
      <label for="prodName" class="form-label">Name</label>
      <input type="text" class="form-control" id="prodName" name="prodName" value="{{$product->prodName}}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">category</label>
        <select class="form-select" id="category_id" name="category_id">
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->catName}}</option>
          @endforeach
        </select>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
