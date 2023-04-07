@extends('welcome')
@section('content')
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-blod fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Product
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
        <form action="insertData" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-2">
                <input type="text" placeholder="Product Name" class="form-control" name="pname" id="">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Product Price" class="form-control" name="pprice" id="">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Product Quantity" class="form-control" name="pquantity" id="">
            </div>
            <div class="mb-2">
                <input type="file"  class="form-control" name="image" id="">
            </div>
            <button type="submit" class="btn btn-outline-danger fw-blod fs-4 rounded-pill">Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
<table class="table mt-5">
 <thead class="bg-success text-white fw-bold">
 <th>Product Id</th>
 <th>Product Name</th>
  <th>Product Price</th>
  <th>Product Quantity</th>
  <th>Product Image</th>
  <th>Update</th>
  <th>Delete</th>
 </thead>
 <tbody class="text-dark bg-light fs-5">
  @foreach($data as $item)
  <tr>
    <form action="updatedelete" method="get">
<td class="pt-4"><input type="hidden" name="id"value="{{$item['id']}}">{{$item['id']}}</td>
<td class="pt-4"><input type="hidden"name="name" value="{{$item['PName']}}">{{$item['PName']}}</td>
<td class="pt-4"><input type="hidden" name="price" value="{{$item['PPrice']}}">{{$item['PPrice']}}</td>
<td class="pt-4"><input type="hidden"  name="quantity" value="{{$item['PQuantity']}}">{{$item['PQuantity']}}</td>
<td><img src="images/{{$item['PImage']}}" width="100px" height="100px" alt=""></td>
  <td class="pt-3"><input type="submit" class="btn btn-danger fw-blod fs-6 rounded-pill "name="update"value="Update"></td>
  <td class="pt-3"><input type="submit" class="btn btn-danger fw-blod fs-6 rounded-pill "name="delete"value="Delete"></td>
  </form>
</tr>
  @endforeach
 </tbody>

</table>
</div>
@endsection
