@extends('layout.home')

@section('content')

    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
            <h2>{{ $skate->model }}</h2>

        </div>

    </div>

    <div class="row">
    <div class="col-12">
    <div class="mt-5 d-flex justify-content-center">
        <img src="{{url('img/skateboard.png') }}">
    </div>
    </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
            <p>
                {{ $skate->description }}
            </p>
        </div>
    </div>

@endsection
