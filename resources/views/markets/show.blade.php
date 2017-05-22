@extends('layouts.app')
@section('title', "$market->name" )
@section('main')
    <div class="row justify-content-center">
      <div class="card col">

        <div class="card-block">
          <div class="row">
            <h1 class="col-11 pb-2">{{ $market->name }}</h1>
            <div class="col-1 d-flex justify-content-end">
                <a href="{{ route('markets.edit', $market) }}"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                <form action="{{ route('markets.destroy', $market) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="fa fa-trash btn-link text-danger" type="submit"></button>
                </form>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 d-flex flex-column">
              <img class="pb-3" src="{{ asset('img/market.png') }}"/>
              <ul class="list-group">
                <li class="list-group-item text-muted">Location City: {{ $market->city }}</li>
                <li class="list-group-item text-muted">Website: {{ $market->website }}</li>
              </ul>
            </div>

        </div>

      </div>
    </div>
@endsection
