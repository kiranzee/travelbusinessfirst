@extends('layouts.admin')
@section('title','Flight Partner')
@section('content')
<div class="container">
    <h2>Best Of Activities</h2>
    
    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add new destination button -->
    <div class="mb-3">
        <a href="{{ route('flightpartner.create') }}" class="btn btn-primary">Add Flight Partner</a>
    </div>

    <!-- Destination table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th> 
                <th>status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($flightpartner as $flightpartner)
                <tr>
                    <td>{{ $flightpartner->id }}</td>
                               
                    <td><img src="{{ asset('uploads/partners/' . $flightpartner->image) }}" alt="" class="img-fluid" style="max-width: 100%; height: auto;" /></td>                   
                    
                    <td>{{ $flightpartner->status }}</td>                   
                    <td>
                        <!-- Edit button -->
                        <a href="{{ route('flightpartner.edit', $flightpartner->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        
                        <!-- Delete button -->
                        <form action="{{ route('flightpartner.destroy', $flightpartner->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this destination?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection