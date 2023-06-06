
@extends('app')

@section('content')
<!-- vaccines/create.blade.php -->

<div class="container">
    <div class="row py-5 ">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h1>Add Vaccine</h1>

            <form action="{{ route('vaccines.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="vaccine_name">Vaccine Name</label>
                    <input type="text" class="form-control" id="vaccine_name" name="vaccine_name" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection
