@extends('layouts.main')

@section('title','Products')

@section('content')
<br>
<h3>Daftar Nama Product</h3>
<div class="my-5 d-flex justify-content-between">
    <a href="products-add" class="btn btn-primary">add data </a>
    {{-- <a href="student-deleted" class="btn btn-info">Show Deleted Data </a> --}}
</div>


@if(Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
  </div>
@endif

<div class="my-3 col-12 col-sm-6 col-md-5">
    <form action="" method="get" class="">
        <div class="input-group mb-3 ">
            <input type="text" class="form-control" id="floatingInputGroup1" name = "keyword" placeholder="Keyword...">
            <button class="input-group-text btn btn-primary">Search </button>
          </div>
    </form>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>NAMA</th>
        <th>PRICE</th>
        <th>Action</th>
    </tr>
    @foreach ( $productList as $data )
    <tr>
       <td> {{$loop->iteration}} </td>
       <td> {{$data->id}} </td>
       <td> {{$data->name}} </td>
       <td> {{$data->price}} </td>
       <td>
            <a href="product/{{$data->id}}" class="btn btn-success" >Detail</a>
            <a href="product-edit/{{$data->id}}" class="btn btn-warning"> Edite</a>
            <a href="product-delete/{{$data->id}}" class="btn btn-danger"> Delete</a>
        </td>
    </tr>
    @endforeach

</table>
{{-- <div class="my-5">
    {{$productList->withQueryString()->links()}}
</div> --}}
@endsection
