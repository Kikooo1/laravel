<!-- vaccines/index.blade.php -->

@extends('app')

@section('content')

    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif


                <div class="d-flex justify-content-between align-items-center">
                    <h1>Vaccine List</h1>

                    <a href="{{ route('vaccines.create') }}" class="btn btn-success mb-3">Add Vaccine</a>
                </div>


                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vaccines as $vaccine)
                        <tr>
                            <td>{{ $vaccine->vaccine_id }}</td>
                            <td>{{ $vaccine->vaccine_name }}</td>
                            <td>
                                <a href="{{ route('vaccines.show', $vaccine->vaccine_id) }}" class="btn btn-sm btn-info">Show</a>
                                <a href="{{ route('vaccines.edit', $vaccine->vaccine_id) }}" class="btn  btn-sm btn-primary">Edit</a>
                                <form action="{{ route('vaccines.destroy', $vaccine->vaccine_id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn  btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this vaccine?')">Delete</button>
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
