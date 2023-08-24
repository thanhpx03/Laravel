@extends('layout')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
@csrf
 
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">category_id:</label>
    <input type="text" class="form-control" id="category_id" placeholder="Enter category_id" name="category_id">
  </div>
  <div class="">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
  </div>
  <div class="">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">sku:</label>
    <input type="text" class="form-control" id="sku" placeholder="Enter sku" name="sku">
  </div>
  <div class="">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">slug:</label>
    <input type="text" class="form-control" id="slug" placeholder="Enter slug" name="slug">
  </div>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">describe:</label>
    <input type="text" class="form-control" id="describe" placeholder="Enter describe" name="describe">
  </div>
  <div class="">
  <label for="img">img:</label>
 <input class="form-control" rows="5" name="img" type="file" id="img"></input>
  </div>
 <hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection