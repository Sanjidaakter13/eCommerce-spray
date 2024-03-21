@extends('backend.template.master')

@section('content')

<h2 style="background-color: #4e73df; color:white; text-align: center;">Category list</h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $key=>$data)
    <tr>

      <td>{{$key+1}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->description}}</td>
      <td><img style="height:40px; width:40" src="{{url('uploads/categories' .'/'. $data->image)}}" alt="">
      </td>
      <td>
      <div class="row">
      <div class="col-md-4"><a href="{{route('category.delete',$data->id)}}"><img style="height:30px; width:30px;" src="{{url('backend/assets/icon/icons-delete.png')}}" alt=""></a></div>
      <div class="col-md-4"><a href="{{route('category.view',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/icons-view.png')}}" alt=""></a></div>
      <div class="col-md-r"><a href="{{route('category.edit',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/edit-icons.png')}}" alt=""></a></div>
      </div>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>
{{$categories->links()}}
<a class="btn btn-primary" href="{{route('category.create')}}"> Create Category</a>

@endsection