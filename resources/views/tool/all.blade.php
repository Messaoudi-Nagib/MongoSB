@extends('layouts.app')@section('title')
    Tools
@endsection

@section('content')

    <div class="row">
        <div class="col-4">
            @foreach($tools as $tool)
                <div class="card ">
                    <div class="card-title pl-1">
                        {{$tool->libelle }}
                    </div>

                    <div class="card-text pl-1">
                        <p>Prix en dollars : {{ $tool->prix }}</p>
                    </div>

                </div>
                @endforeach
        </div>

    </div>



    @endsection
