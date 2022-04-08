@extends('layouts.main')

@section('content')
    <div class="card" style="max-width: 180rem; padding: 2rem">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img style="width: 100%" src="{{ asset($dish->image) }}" alt="{{ $dish->name }}">
            </div>
            <div class="col-sm-12 col-md-6">

                <div class="card-body">
                    <h3 class="card-title">{{ $dish->name }}</h3>
                    <h4 class="card-title">${{ $dish->sell_price }}</h4>
                    <p class="card-text">{!! $dish->description !!}</p>
                    {{-- <a href="{{ route('welcome') }}" class="btn btn-primary">Regresar</a> --}}
                </div>

            </div>
        </div>
    </div>
@endsection
