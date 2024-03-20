@extends('backend.template.master')

@section('content')

<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input  required name="cat_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" name="cat_status" class="custom-select custom-select-sm">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <input name="cat_description" type="text" class="form-control" id="formGroupExampleInput2"
            placeholder="Description">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="cat_image" type="file" class="form-control" id="exampleInputPassword1" 
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