<!-- resources/views/pets/edit.blade.php -->

@extends('app')

@section('content')
    <div class="container ">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <h2>Add History for {{ $pet->pet_name }}</h2>

                <form action="{{ route('history.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="pet_id" value="{{ $pet->pet_id }}">

                    <div class="form-group mb-2">
                        <label for="reason_of_visit">Reason of Visit</label>
                        <input type="text" class="form-control" id="reason_of_visit" name="reason_of_visit" required>
                    </div>

                    <div class="form-groupmb-2">
                        <label for="weight_kg">Weight (kg)</label>
                        <input type="number" class="form-control" id="weight_kg" name="weight_kg" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="date_visited">Date Visited</label>
                        <input type="datetime-local" class="form-control" id="date_visited" name="date_visited" required>
                    </div>

                    <!-- Add other fields as needed -->

                    <button type="submit" class="btn btn-primary">Add History</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


@endsection
