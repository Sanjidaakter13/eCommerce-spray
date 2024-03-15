@extends('backend.template.master')

@section('content')

<form action="{{route('product.store')}}" method="post">
    @csrf
   <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input  required name="pro_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input  required name="pro_price" type="number" class="form-control" id="formGroupExampleInput" placeholder="Price">
    </div>

    <div class="form-group">
    <label for="formGroupExampleInput">Select Category:</label>
   <select required class="form-control" name="category" id="formGroupExampleInput"  placeholder="Category Name">

    @foreach ($categories as $cat )
    <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
   
   </select>
  </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Stock</label>
        <input  required name="pro_stock" type="number" class="form-control" id="formGroupExampleInput" placeholder="Stock">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" name="pro_status" class="custom-select custom-select-sm">
            <option selected>Open this select menu</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <input name="pro_description" type="text" class="form-control" id="formGroupExampleInput2"
            placeholder="Description">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="pro_image" type="file" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>


@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
 @endif

@endsection