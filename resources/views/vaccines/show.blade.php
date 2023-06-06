
@extends('app')

@section('content')<!-- vaccines/show.blade.php -->


<div class="container">
    <div class="row py-5 ">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">

            <h1>{{ $vaccine->vaccine_name }}</h1>

            <p>ID: {{ $vaccine->vaccine_id }}</p>
            <p>Name: {{ $vaccine->vaccine_name }}</p>

            <a href="{{ route('vaccines.edit', $vaccine->vaccine_id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('vaccines.destroy', $vaccine->vaccine_id) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this vaccine?')">Delete</button>
            </form>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection
