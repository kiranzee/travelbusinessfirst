@extends('layouts.admin')
@section('title','Most Popular Flight Destinations')
@section('content')
<div class="container">
    <h2>Popular Flight Destinations</h2>
    
    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add new destination button -->
    <div class="mb-3">
        <a href="{{ route('topthingstodo.create') }}" class="btn btn-primary">Add New To Things to Do</a>
    </div>

    <!-- Destination table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                
                <th>ID</th>
               
                <th>title</th>
                <th>Image</th>
                <th>image_seo</th>
                <th>Short Description</th>
                <th>price</th>
                <th>rating</th>
                <th>Long Description</th>
                <th>status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($topthingstodo as $topthings)
                <tr>
                    <td>{{ $topthings->id }}</td>
                    <td>{{ $topthings->title }}</td>                   
                    <td><img src="{{ asset('uploads/' . $topthings->image) }}" alt="{{ $topthings->title }}" class="img-fluid" style="max-width: 100%; height: auto;" /></td>
                    <td>{{ $topthings->image_seo }}</td>
                    <td>{{ $topthings->short_description }}</td>
                    <td>{{ $topthings->price }}</td>
                    <td>{{ $topthings->rating }}</td>
                    <td>{{ $topthings->Long_description }}</td>
                    <td>{{ $topthings->status }}</td>
                    <td>
                        <!-- Edit button -->
                        <a href="{{ route('topthingstodo.edit', $topthings->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        
                        <!-- Delete button -->
                        <form action="{{ route('topthingstodo.destroy', $topthings->id) }}" method="POST" style="display:inline;">
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