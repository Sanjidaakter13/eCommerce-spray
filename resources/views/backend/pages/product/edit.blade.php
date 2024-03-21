@extends('backend.template.master')

@section('content')
<form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input name="pro_name" type="text" class="form-control" id="name" placeholder="name" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input  name="pro_price" type="number" class="form-control" id="formGroupExampleInput" placeholder="Price" value="{{$product->price}}">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput">Select Category:</label>
   <select class="form-control" name="category" id="formGroupExampleInput"  placeholder="Category Name" value="{{$product->category}}">

    @foreach ($categories as $cat )
    <option {{ $cat->id == $product->category_id ? 'selected' : ''}} value={{$cat->id}}>{{$cat->name}}</option>
    @endforeach
   
   </select>
  </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Stock</label>
        <input  required name="pro_stock" type="number" class="form-control" id="formGroupExampleInput" placeholder="Stock" value="{{$product->price}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status:</label>
        <input name="pro_status" type="text" class="form-control" id="exampleFormControlInput1" placeholder="status"
            value="{{$product->status}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
        <textarea name="pro_description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$product->description}}</textarea>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="pro_image" type="file" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
    <button type="submit" style="border-radius:20px;" class="btn btn-primary">Update <img style="height:30px; width:30px;"
            src="{{url('backend/assets/icon/update-icon.png')}}" alt=""></button>

</form>
@endsection
