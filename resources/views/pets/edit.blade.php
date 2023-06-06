<!-- resources/views/pets/edit.blade.php -->

@extends('app')

@section('content')
    <div class="container ">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h2>Edit Pet</h2>

                <form action="{{ route('pets.update', $pet) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-2">
                        <label for="pet_name">Pet Name</label>
                        <input type="text" class="form-control" id="pet_name" name="pet_name" value="{{ $pet->pet_name }}" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="owner_name">Owner Name</label>
                        <input type="text" class="form-control" id="owner_name" name="owner_name" value="{{ $pet->owner_name }}" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="img">Image URL</label>
                        <input type="text" class="form-control" id="img" name="img" required value="{{ $pet->img }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="specie_id">Species</label>
                        <select class="form-control" id="specie_id" name="specie_id" required>
                            @foreach($species as $specie)
                                <option value="{{ $specie->specie_id }}" {{ $specie->specie_id == $pet->specie_id ? 'selected' : '' }}>
                                    {{ $specie->species_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
