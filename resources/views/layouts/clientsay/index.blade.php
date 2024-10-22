@extends('layouts.admin')
@section('title','Best Of Activity')
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
        <a href="{{ route('clientsay.create') }}" class="btn btn-primary">Add Client Comments</a>
    </div>

    <!-- Destination table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>               
                <th>Image</th> 
                <th>Comments</th>              
                <th>Rating</th>              
                <th>status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($clientsay as $clientsay)
                <tr>
                    <td>{{ $clientsay->id }}</td>
                    <td>{{ $clientsay->name }}</td>                   
                    <td><img src="{{ asset('uploads/' . $clientsay->image) }}" alt="{{ $clientsay->title }}" class="img-fluid" style="max-width: 100%; height: auto;" /></td>                   
                    <td>{{ $clientsay->comments }}</td>                   
                    
                    <td>{{ $clientsay->rating }}</td>
                   
                    <td>{{ $clientsay->status }}</td>                   
                    <td>
                        <!-- Edit button -->
                        <a href="{{ route('clientsay.edit', $clientsay->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        
                        <!-- Delete button -->
                        <form action="{{ route('clientsay.destroy', $clientsay->id) }}" method="POST" style="display:inline;">
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