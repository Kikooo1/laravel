<!-- resources/views/species/create.blade.php -->

@extends('app')

@section('content')
    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1>Create New Species</h1>

                <form action="{{ route('species.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="species_name">Species Name:</label>
                        <input type="text" name="species_name" id="species_name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Species</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
