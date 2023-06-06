<!-- resources/views/species/show.blade.php -->

@extends('app')

@section('content')

    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
            <h1>Species Details</h1>

            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $species->species_name }}</h5>
                </div>
            </div>

            <a href="{{ route('species.index') }}" class="btn btn-primary">Back to All Species</a>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
