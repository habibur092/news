@extends('layouts.backend.app')

@section('content')

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Category table</h3>
              <a href="{{route('admin.category.create')}}" class="btn btn-primary">Add Category</a>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">ID</th>
                    <th scope="col" class="sort" data-sort="budget">Name</th>
                    <th scope="col" class="sort" data-sort="status">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                	@foreach($categorys as $category)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                    	<form action="{{route('admin.category.destroy',$category->id)}}" method="POST">
                    		<a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-success">edit</a>
                    	@csrf
                    	@method('DELETE')
                    	<button type="submit" class="btn btn-danger">Delete</button>
                    	</form>
                    	
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              {!! $categorys->links()!!}
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection