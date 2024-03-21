@extends('backend.template.master')

@section('content')
<h2 style="background-color: #4e73df; color:white; text-align: center;">Product list</h2>

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
      <td>{{$data->category}}</td>
      <td>{{$data->stock}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->description}}</td>
      <td><img style="height:40px; width:40" src="{{url('uploads/products' .'/'.$data->image)}}" alt="">
      </td>
      <td>
      <div class="row">
      <div class="col-md-4"><a href="{{route('product.delete',$data->id)}}"><img style="height:30px; width:30px;" src="{{url('backend/assets/icon/icons-delete.png')}}" alt=""></a></div>
      <div class="col-md-4"><a href="{{route('product.view',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/icons-view.png')}}" alt=""></a></div>
      <div class="col-md-r"><a href="{{route('product.edit',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/edit-icons.png')}}" alt=""></a></div>
      </div>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>
{{$products->links()}}
<a class="btn btn-primary" href="{{route('product.create')}}"> Create Product</a>

@endsection