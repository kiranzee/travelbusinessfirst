@extends('layouts.admin')
@section('title','Client Comments')
@section('content')

<div class="container mt-5">
    <h2>Create Client Comments </h2>

    <!-- Display success message if available -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors if available -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Flight Form -->
    <form action="{{ route('clientsay.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
         
        
         <!-- Image Upload Field -->
         <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        

        <!-- comments Field -->
        <div class="form-group">
            <label for="price">Comments</label>
            <input type="text" class="form-control" id="comments" name="comments" value="{{ old('comments') }}" required>
        </div>
        <!-- Rating Field -->
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating') }}" required>
        </div>
        
        <!-- Status Field -->
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection