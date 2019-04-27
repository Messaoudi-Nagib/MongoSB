@extends('layouts.app')@section('title')
    Tools
@endsection

@section('content')
    <div class="row mb-5">
            <h2 class="mx-auto">Choisissez votre type d'accessoire ! </h2>
    </div>

    <div class="row">
        @foreach($categs as $categ)
            <div class="col-3 pb-3">
                <a href="{{ route('tool.all', $categ->id) }}" style="text-decoration: none;">
                <div class="card">
                    <div class="card-body">
                        <h2 style="font-size: 1em" class="d-flex justify-content-center">
                            {{ $categ->Libelle }}
                        </h2>
                    </div>
                </div>
                </a>
            </div>
                @endforeach


            </div>

@endsection
