@extends('welcome')
@section('content')
<div class="col-md-4 m-auto border nt-3 p-2 border-warning">
<h2 class="text-center text-dark bg-success fw-blod"> Update Product</h2>
<form action="" method="get">
  <div class="mb-2">
    <label for="">Product Name</label>
    <input type="text" name="" value="{{$pname}}"class="form-control" id="">
  </div>
  <div class="mb-2">
    <label for="">Product Price</label>
    <input type="text" name="" value="{{$pprice}}"class="form-control" id="">
  </div>
 
  <div class="mb-2">
    <label for="">Product Quantity</label>
    <input type="text" name=""  value="{{$pquantity}}"class="form-control" id="">
  </div>
  <br>
  <button type="Submit" class="btn btn-outline-success fw-blod fs-6 rounded-pill" >Update</button>
    

    

</form>
</div>
@endsection