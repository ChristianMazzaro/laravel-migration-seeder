@extends('layouts.main')

@section('page_title','trains')

@section('main_content')

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1>
                Trains
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($trains as $train)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">compagnia ferroviaria: {{$train->company}}</h5>
                        <p class="card-text">
                            stazione di partenza: {{$train->departure_station}}
                        </p>
                        <p class="card-text">
                            stazione di arrivo: {{$train->arrival_station}}
                        </p>
                        <p class="card-text">
                            orario di partenza: {{$train->departure_time}}
                        </p>
                        <p class="card-text">
                            orario d'arrivo: {{$train->arrival_time}}
                        </p>
                        <p class="card-text">
                            numero del treno: {{$train->train_code}}
                        </p>
                        <p class="card-text">
                            numero di carrozze: {{$train->carriage_number}}
                        </p>
                        <p class="card-text">
                            ritardo: {{$train->delay}}
                        </p>
                        <p class="card-text">
                            cancellato: {{$train->deleted}}
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection