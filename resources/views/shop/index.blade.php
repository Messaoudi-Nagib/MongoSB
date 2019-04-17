@extends('layout.home')

@section('title', 'Shop')


@section('content')
    <div class="col-12 d-flex justify-content-center mt-3">
        <h2>Bienvenue sur la partie shop du site !</h2>

    </div>

    <div class="row mt-5">
        <div class="col-6">
            <div class="card bg-dark text-white">
                <div class="card-title">
                    <h3 class="mt-2 ml-2">Skates</h3>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <p>
                            Découvrez tous les modèles de skate en magazin ici

                        </p>
                        <div class="col-3">
                            <a href=" {{ route('skate.index') }}"><button class="btn btn-dark">Découvrir ! </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card bg-light text-dark">
                <div class="card-title">
                    <h3 class="mt-2 ml-2">Accessoires</h3>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <p>
                            Découvrez tous les accessoires pour le skate ici

                        </p>
                        <div class="col-3">
                            <a href=" {{ route('shop.index') }}"><button class="btn btn-light">Découvrir ! </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
