<!-- resources/views/pets/show.blade.php -->

@extends('app')

@section('content')
    <!-- pets/show.blade.php -->
    <div class="container ">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="text-uppercase">{{ $pet->pet_name }}</h1>

                        <p>ID: {{ $pet->pet_id }}</p>
                        <p>Owner: {{ $pet->owner_name }}</p>
                        <p>Species: {{ $pet->species->species_name }}</p>
                        <img src="{{ $pet->img }}" width="300">
                        <!-- Display other fields as needed -->

                    </div>
                   <div>
                       <a href="{{ route('pets.edit', $pet) }}" class="btn btn-sm btn-primary">Edit</a>

                       <form action="{{ route('pets.destroy', $pet) }}" method="POST" style="display: inline">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this pet?')">Delete</button>
                       </form>
                   </div>
                </div>

                <h5 class="mt-2">Vaccines Administered</h5>
                @if ($pet->vaccinesAdministered->isEmpty())
                    <p>No vaccines administered for this pet.</p>
                @else
                    <ul>
                        @foreach ($pet->vaccinesAdministered as $vaccinesAdministered)
                            <li>{{ $vaccinesAdministered->vaccine->vaccine_name }}</li>
                        @endforeach
                    </ul>
                @endif

                <h5 class="mt-2">History</h5>
                @if ($pet->histories->isEmpty())
                    <p>No history available for this pet.</p>
                @else
                    <ul>
                        @foreach ($historiesWithReasons as $history)
                            <li>
                                <em>Reason of Visit:</em> {{ $history['reasonOfVisit'] }} <br>
                                <em>Weight (kg):</em> {{ $history['weight_kg'] }} <br>
                                <em>Date Visited:</em> {{ $history['date_visited'] }} <br>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


@endsection
