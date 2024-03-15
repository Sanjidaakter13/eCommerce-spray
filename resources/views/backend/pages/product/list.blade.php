@extends('backend.template.master')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Stock</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $key=>$data)
    <tr>

      <td>{{$key+1}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->category_id}}</td>
      <td>{{$data->stock}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->image}}</td>
    </tr>

    @endforeach
  </tbody>
</table>
{{$products->links()}}
<a class="btn btn-primary" href="{{route('product.create')}}"> Create Product</a>

@endsection