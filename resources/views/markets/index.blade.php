@extends('layouts.app')
@section('title', "All Markets" )
@section('main')
    <h1 class="ml-1">Markets</h1>
    <div class="row justify-content-center">
        @foreach ($markets as $market)
            <section class="col-md-4 pb-3">
                <div class="card">
                    <img class="card-img-top p-2" src="{{ asset('img/market.png') }}" height="200" width="auto" />
                    <ul class="card-block list-unstyled">
                        <li class="pull-left">
                            <a href="{{ route('markets.show', $market) }}">
                                {{ $market->name }}
                            </a>
                        </li>
                        <li class="pull-right">
                            <a href="{{ route('markets.edit', $market) }}"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                        </li>
                        <li class="pull-right">
                            <form action="{{ route('markets.destroy', $market) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="fa fa-trash btn-link text-danger" type="submit"></button>
                          </form>
                        </li>
                    </ul>
                </div>
            </section>
        @endforeach
        {{ $markets->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection
