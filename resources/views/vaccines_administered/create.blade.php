<!-- resources/views/pets/create.blade.php -->

@extends('app')

@section('content')
    <!-- vaccines_administered/create.blade.php -->
    <div class="container ">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h2>Add Vaccine for {{ $pet->pet_name }}</h2>

                <form action="{{ route('vaccines_administered.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="pet_id" value="{{ $pet->pet_id }}">

                    <div class="form-group mb-2">
                        <label for="vaccine_id">Vaccine</label>
                        <select class="form-control" id="vaccine_id" name="vaccine_id" required>
                            @foreach($vaccines as $vaccine)
                                <option value="{{ $vaccine->vaccine_id }}">{{ $vaccine->vaccine_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Add other fields as needed -->

                    <button type="submit" class="btn btn-primary">Add Vaccine</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

@endsection
