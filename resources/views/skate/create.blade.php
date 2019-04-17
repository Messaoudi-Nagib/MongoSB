@extends('layout.home')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h2>Créer un nouveau skate</h2>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
        <form action="{{ route('skate.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="model">Modèle</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Marque/N° de modele...">
            </div>
            <div class="form-group row">
                <label for="size">Taille de board </label>
                <select class="form-control" id="size" name="size">
                    <option>7</option>
                    <option>8</option>
                </select>
            </div>

            <div class="form-group row">
                <label for="size">Type de skate</label>
                <select class="form-control" id="type" name="type">
                    <option>longboard</option>
                    <option>pennyboard</option>
                    <option>skate</option>
                </select>
            </div>

            <div class="form-group row">
                <label for="price">Prix</label>
                <input class="form-control" id="price" name="price" rows="3">
            </div>


            <div class="form-group row">
                <label for="exampleFormControlTextarea1">Ajouter une description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">Valider</button>
            </div>
        </form>
        </div>
    </div>
@endsection
