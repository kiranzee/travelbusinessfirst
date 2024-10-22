@extends('layouts.admin')
@section('title','Hero Section Banner')
@section('content')

<div class="container mt-5">
    <h2>Create Hero Section Banner </h2>

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
    <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Heading Field -->
        <div class="form-group">
            <label for="title">Heading</label>
            <input type="text" class="form-control" id="heading" name="heading" value="{{ old('heading') }}" required>
        </div>
        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

       
       
        <!-- First Class Price -->
        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="form-group">
            <label for="short_description">Short Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required>
        </div>

         <!-- Image Upload Field -->
         <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image">
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