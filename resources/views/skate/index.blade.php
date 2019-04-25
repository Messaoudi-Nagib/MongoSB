@extends('layouts.app')@section('title')
    Skateboards
@endsection

@section('content')
    <div class="col-12 d-flex justify-content-center mt-3">
        <h2 class="mb-5">Visualiser les skateboards</h2>

    </div>


    <div class="row">
        @foreach($skates as $skate)

    <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 mb-3">
        @if($skate->type  == 'longboard')
        <div class="card bg-light text-black mt-5">
            @else
                <div class="card bg-dark text-white mt-5">
            @endif
            <h3 class="card-title mt-3 ml-3">
                {{ $skate->model }}
            </h3>
            <div class="card-body">
                <div class="card-text">
                    <p>
                        Taille : {{ $skate->size }}<br/>
                        Type : {{ $skate->type }}<br/>
                        Prix en dollars : {{ $skate->price }}$

                    </p>

                        @if($skate->type  == 'longboard')
                        <a href="{{ route('skate.show', $skate->id) }}"><button class="btn btn-light mb-4">Voir la description</button> </a>
                        <form action="{{route('skate.destroy', $skate->id)}}" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <input type="submit" class="btn btn-danger" value="Supprimer l'article ?"/>
                        </form>






                    @else
                        <a href="{{ route('skate.show', $skate->id) }}"><button class="btn btn-dark mb-4">Voir la description</button> </a>
                        <form action="{{route('skate.destroy', $skate->id)}}" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <input type="submit" class="btn btn-danger" value="Supprimer l'article ?"/>
                        </form>


                    @endif



                </div>
            </div>
        </div>

    </div>
            @endforeach
    </div>
    </div>



@endsection

