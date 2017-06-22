@extends('layouts.app')
@section('title', "Edit $farm->name" )
@section('main')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>

    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $farm->name }}</h1>
        <form action="{{ url('farms', $farm) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('patch') }}
          <div class="form-group">
            <label for="name">Farm Name</label>
            <input type="text" class="form-control" name="name" value="{{ $farm->name }}">
          </div>
          <div class="form-group">
            <label for="city">Farm City</label>
            <input type="text" class="form-control" name="city" value="{{ $farm->city }}">
          </div>
          <div class="form-group">
            <label for="website">Farm Website</label>
            <input type="text" class="form-control" name="website" value="{{ $farm->website }}">
          </div>
          <h3 class='h5 pb-2'>Markets</h3>
          <div class="row form-group">
            @foreach ($markets as $id => $market)
              <div class="form-check col-md-6">
                <label class="form-check-label" for="{{ $market }}">
                  <input type="checkbox" name="markets[]" value="{{ $id }}"
                    {{ $farm->markets()->allRelatedIds()->contains($id) ? "checked" : "" }}>
                  {{ $market }}
                </label>
              </div>
            @endforeach
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
