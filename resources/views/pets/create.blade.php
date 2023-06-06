<!-- resources/views/pets/create.blade.php -->

@extends('app')

@section('content')
    <!-- pets/create.blade.php -->
    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1>Add Pet</h1>

                <form action="{{ route('pets.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="pet_name">Pet Name</label>
                        <input type="text" class="form-control" id="pet_name" name="pet_name" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="owner_name">Owner Name</label>
                        <input type="text" class="form-control" id="owner_name" name="owner_name" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="img">Image URL</label>
                        <input type="text" class="form-control" id="img" name="img" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="specie_id">Species</label>
                        <select class="form-control" id="specie_id" name="specie_id" required>
                            @foreach($species as $specie)
                                <option value="{{ $specie->specie_id }}">{{ $specie->species_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
