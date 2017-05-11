@extends('layouts.app')

@include('layouts.header')

@section('content')
<div class="container-fluid" style="margin-top: 50px">
  <h1> Product List</h1>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-3">
      <h2>Product 1</h2>
      <p> this is product #1</p>
      <p> quantity: <strong> 3 </strong></p>
      <p>
        <a href="#" target="_blank" class="btn btn-success"> Add to cart &raquo;</a>
      </p>
    </div>
    <div class="col-xs-3">
      <h2>Product 2</h2>
      <p> this is product #2</p>
      <p> quantity: <strong> 3 </strong></p>
      <p>
        <a href="#" target="_blank" class="btn btn-success"> Add to cart &raquo;</a>
      </p>
    </div>
      <div class="col-xs-3">
      <h2>Product 3</h2>
      <p> this is product #2</p>
      <p> quantity: <strong> 3 </strong></p>
      <p>
        <a href="#" target="_blank" class="btn btn-success"> Add to cart &raquo;</a>
      </p>
    </div>
  </div>
@endsection
