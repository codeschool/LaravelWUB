@extends('layouts.app')
@section('main')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Create a Market</h1>

    <form class="card" action="{{ route('markets.store') }}" method="post">
      <div class="card-block">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Market Name</label>
          <input type="text" class="form-control" name="name" placeholder="Your Market's Name">
        </div>
        <div class="form-group">
          <label for="city">Market City</label>
          <input type="text" class="form-control" name="city" placeholder="Market Location City">
        </div>
        <div class="form-group">
          <label for="website">Market Website</label>
          <input type="text" class="form-control" name="website" placeholder="Market Website">
        </div>
        <button type="submit" class="btn btn-primary">
          Create
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
