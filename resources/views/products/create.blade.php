@extends('layout.master')

@section('title', 'Add Product')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 ">
<form method="post" action="/products" enctype="multipart/form-data">
    <h1 class="h3 mb-3 fw-normal">Create Form</h1>
    @csrf
    <div class="form-floating">
      <input type="text" name="model" class="form-control" id="model" placeholder="model">
      <label for="floatingInput">Model</label>
    </div>
    <br/>

    <div class="form-floating">
      <input type="text" name="color" class="form-control" id="color" placeholder="color">
      <label for="floatingInput">Color</label>
    </div>
    <br/>

    <div class="form-floating">
      <input type="text" name="price" class="form-control" id="price" placeholder="price">
      <label for="floatingInput">Price</label>
    </div>

    <br/>

      <input type="file" id="image" name="image" class="form-control" id="image">


    <br/>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
  </form>

</div>
  </div>
</div>
@endsection