<!-- resources/views/species/index.blade.php -->

@extends('app')

@section('content')


    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <!-- resources/views/species/index.blade.php -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif


                <div class="d-flex justify-content-between align-items-center">
                   <h1>All Species</h1>

                   <a href="{{ route('species.create') }}" class="btn btn-primary">Create New Species</a>
               </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($species as $specie)
                        <tr>
                            <td>{{ $specie->specie_id }}</td>
                            <td>{{ $specie->species_name }}</td>
                            <td>
                                <a href="{{ route('species.show', $specie->specie_id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('species.edit', $specie->specie_id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('species.destroy', $specie->specie_id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this species?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
