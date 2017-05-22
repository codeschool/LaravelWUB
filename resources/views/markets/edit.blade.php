@extends('layouts.app')
@section('title', "Edit $market->name" )
@section('main')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>

    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $market->name }}</h1>
        <form action="{{ url('markets', $market) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('patch') }}
          <div class="form-group">
            <label for="name">Market Name</label>
            <input type="text" class="form-control" name="name" value="{{ $market->name }}">
          </div>
          <div class="form-group">
            <label for="city">Market City</label>
            <input type="text" class="form-control" name="city" value="{{ $market->city }}">
          </div>
          <div class="form-group">
            <label for="website">Market Website</label>
            <input type="text" class="form-control" name="website" value="{{ $market->website }}">
          </div>
          <button type="submit" class="btn btn-primary">
            Update
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
