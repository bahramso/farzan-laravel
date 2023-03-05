@extends('layout.master')

@section('title', 'All Products')

@section('content')



<div class="album py-5 bg-light">
    <div class="container">

        <form class="row g-3" method="get" action="products">
        <div class="col-auto">
        <select name="color" class="form-select" aria-label="Default select example">
          <option value="">Open this select menu</option>
          <option value="red">Red</option>
          <option value="blue">Blue</option>
        </select>
          </div>
        
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Filter By Color</button>
      </div>
        </form>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        @foreach($products as $value)
        <div class="col">
          <div class="card shadow-sm">
              <img src="/images/product/{{$value->image}}" alt="">
        
            <div class="card-body">
              <p class="card-text">{{$value->model}}</p>
              <p class="card-text">{{$value->color}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/products/{{$value->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                  <form action="/products/{{$value->id}}" method="post" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                                    </form>
                  
                </div>
                <small class="text-muted">{{$value->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        
      </div>

      <div class="row justify-content-center">
      <div class="col-md-6 d-flex justify-content-center">
      {{$products->links()}}
      </div>
      </div>
    </div>
    
  </div>

  @endsection