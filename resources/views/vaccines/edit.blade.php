<!-- vaccines/edit.blade.php -->

@extends('app')

@section('content')

    <div class="container">
        <div class="row py-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <h1>Edit Vaccine</h1>

                <form action="{{ route('vaccines.update', $vaccine->vaccine_id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-2">
                        <label for="vaccine_name">Vaccine Name</label>
                        <input type="text" class="form-control" id="vaccine_name" name="vaccine_name" value="{{ $vaccine->vaccine_name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
