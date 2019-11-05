@extends('layouts.backend.app')

@section('content')

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card-wrapper">
            <!-- Custom form validation -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Category Forms</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="{{route('admin.category.store')}}" method="POST">
                @csrf
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label class="form-control-label" for="name">Category name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Category name"  required value="{{$category->name}}">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection