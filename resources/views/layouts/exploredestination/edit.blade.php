@extends('layouts.admin')
@section('title','Explore Destinations')
@section('content')

<div class="container mt-5">
    <h2>Update Explore Destination</h2>

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

    <!-- edit Flight Form -->
    <form action="{{ route('exploredestination.update', $exploredestinations->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $exploredestinations->title) }}" required>
        </div>

        <!-- Image Upload Field -->
        <div class="form-group">
            <div class="row">
                <div class="col-md-6"><label for="image">Upload Image</label>
                    <input type="file" class="form-control" id="image" name="image">                  
                </div>
                <div class="col-md-6"><img src="{{ asset('uploads/' . $exploredestinations->image) }}" alt="{{ $exploredestinations->title }}" class="img-fluid" style="max-width: 100%; height: auto;" /></div>

            </div>
            
            
        </div>
        <!-- Image SEO Field -->
        <div class="form-group">
            <label for="title">Image SEO</label>
            <input type="text" class="form-control" id="image_seo" name="image_seo" value="{{ old('image_seo', $exploredestinations->image_seo) }}" required>
        </div>

        <!-- Price Field -->
        <div class="form-group">
            <label for="title">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $exploredestinations->price) }}" required>
        </div>
        
        <!-- Status Field -->
<div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status" required>
        <option value="active" {{ (old('status', $exploredestinations->status) == 'active') ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ (old('status', $exploredestinations->status) == 'inactive') ? 'selected' : '' }}>Inactive</option>
    </select>
</div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection