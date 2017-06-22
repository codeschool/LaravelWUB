@extends('layouts.app')
@section('title', "All Farms" )
@section('main')
    <h1 class="ml-1">Farms</h1>
    <div class="row justify-content-center">
        @foreach ($farms as $farm)
            <section class="col-md-4 pb-3">
                <div class="card">
                    <img class="card-img-top p-2" src="{{ asset('img/farm.png') }}" height="200" width="auto" />
                    <ul class="card-block list-unstyled">
                        <li class="pull-left">
                            <a href="{{ route('farms.show', $farm) }}">
                                {{ $farm->name }}
                            </a>
                        </li>
                        <li class="pull-right">
                            <a href="{{ route('farms.edit', $farm) }}"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                        </li>
                        <li class="pull-right">
                            <form action="{{ route('farms.destroy', $farm) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="fa fa-trash btn-link text-danger" type="submit"></button>
                          </form>
                        </li>
                    </ul>
                </div>
            </section>
        @endforeach
        {{ $farms->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection
