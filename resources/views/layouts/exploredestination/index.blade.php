@extends('layouts.admin')
@section('title','Explore Destinations')
@section('content')
<div class="container">
    <h2>Explore Destination</h2>
    
    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add new destination button -->
    <div class="mb-3">
        <a href="{{ route('exploredestination.create') }}" class="btn btn-primary">Add Explore Destination</a>
    </div>

    <!-- Destination table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titile</th>               
                <th>Image</th> 
                <th>Image seo</th> 
                <th>Price</th>              
                <th>status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($exploredestinations as $exploredestination)
                <tr>
                    <td>{{ $exploredestination->id }}</td>
                    <td>{{ $exploredestination->title }}</td>                   
                    <td><img src="{{ asset('uploads/' . $exploredestination->image) }}" alt="{{ $exploredestination->title }}" class="img-fluid" style="max-width: 100%; height: auto;" /></td>                   
                    <td>{{ $exploredestination->image_seo }}</td>                   
                    <td>{{ $exploredestination->price }}</td>
                    
                    <td>{{ $exploredestination->status }}</td>                   
                    <td>
                        <!-- Edit button -->
                        <a href="{{ route('exploredestination.edit', $exploredestination->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        
                        <!-- Delete button -->
                        <form action="{{ route('exploredestination.destroy', $exploredestination->id) }}" method="POST" style="display:inline;">
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