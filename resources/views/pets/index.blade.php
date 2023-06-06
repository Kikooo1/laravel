<!-- resources/views/pets/index.blade.php -->

@extends('app')

@section('content')
    <!-- pets/index.blade.php -->


<div class="container ">
   <div class="row py-5 ">
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
         <div class="container-fluid d-flex justify-content-between align-items-center">
             <h1>Pets List</h1>
             <a href="{{ route('pets.create') }}" class="btn btn-success mb-3">Add Pet</a>
         </div>
           <table class="table">
               <thead>
               <tr>
                   <th>ID</th>
                   <th>Pet Name</th>
                   <th>Owner Name</th>
                   <th>Species</th>
                   <th>Actions</th>
               </tr>
               </thead>
               <tbody>
               @foreach($pets as $pet)
                   <tr>
                       <td>{{ $pet->pet_id }}</td>
                       <td>{{ $pet->pet_name }}</td>
                       <td>{{ $pet->owner_name }}</td>
                       <td>{{ $pet->species->species_name }}</td>
                       <td>
                           <a href="{{ route('pets.show', $pet->pet_id) }}" class="btn btn-sm btn-info">Show</a>
                           <a href="{{ route('pets.edit', $pet->pet_id) }}" class="btn btn-sm btn-primary">Edit</a>
                           <a href="{{ route('vaccines_administered.create', $pet->pet_id) }}" class="btn btn-sm btn-success">Add Vaccine</a>
                           <a href="{{ route('history.create', $pet) }}" class="btn btn-sm btn-warning">Add History</a>

                           <form action="{{ route('pets.destroy', $pet->pet_id) }}" method="POST" style="display: inline">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this pet?')">Delete</button>
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
