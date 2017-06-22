@extends('layouts.app')
@section('main')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Create a Farm</h1>

    <form class="card" action="{{ route('farms.store') }}" method="post">
      <div class="card-block">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Farm Name</label>
          <input type="text" class="form-control" name="name" placeholder="Your Farm's Name">
        </div>
        <div class="form-group">
          <label for="city">Farm City</label>
          <input type="text" class="form-control" name="city" placeholder="Farm Location City">
        </div>
        <div class="form-group">
          <label for="website">Farm Website</label>
          <input type="text" class="form-control" name="website" placeholder="Farm Website">
        </div>
        <button type="submit" class="btn btn-primary">
          Create
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
