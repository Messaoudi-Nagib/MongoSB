@extends('layouts.app')@section('title')
    Tools
@endsection

@section('content')

    <div class="row">
        <h2 class="mx-auto mb-5">

            {{ $categ->Libelle }}

        </h2>

    </div>

    <div class="row">
        @foreach($categ->tools as $tool)

        <div class="col-4">
                <div class="card ">
                    <div class="card-title pl-1">
                        {{$tool->libelle }}
                    </div>

                    <div class="card-text pl-1">
                        <p>Prix en dollars : {{ $tool->prix }}</p>
                    </div>

                </div>
        </div>
        @endforeach

    </div>

    @endsection
