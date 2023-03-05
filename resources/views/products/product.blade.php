@extends('layout.master')

@section('title', 'Add Product')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-center">
        <div class="col">
          <div class="card shadow-sm">
              <img src="/images/product/{{$product->image}}" alt="">
        
            <div class="card-body">
              <p class="card-text">{{$product->model}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{$product->price}}</small>
                <small class="text-muted">{{$product->color}}</small>
              </div>
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>


@endsection