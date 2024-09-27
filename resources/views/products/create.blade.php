@extends('layouts.layout')

@section('title', $title)

@section('content')

<form action="{{route('products.store')}}" method="POST">
    @csrf



    <div class="mb-3">
      <label for="prodName" class="form-label">produc name </label>
      <input type="text" class="form-control" id="prodName" name="prodName">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">category</label>
        <select class="form-select" id="category_id" name="category_id">
          <option selected>select category</option>
          @foreach($categories as $key  => $category)
          <option value="{{$key}}">{{$category}}</option>
          @endforeach
        </select>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
