<!-- resources/views/species/edit.blade.php -->

@extends('app')

@section('content')

    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1>Edit Species</h1>

                <form action="{{ route('species.update', $species) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-2">
                        <label for="species_name">Species Name:</label>
                        <input type="text" name="species_name" id="species_name" class="form-control" value="{{ $species->species_name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Species</button>
                </form>
            </div>
            <div class="col-sm-10">
            </div>
        </div>
@endsection
