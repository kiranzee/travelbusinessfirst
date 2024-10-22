@extends('layouts.admin')
@section('title','Top Things to do in Destinations')
@section('content')

<div class="container mt-5">
    <h2>Create Top Things to do in Destinations </h2>

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
    <form action="{{ route('topthingstodo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <!-- Image Upload Field -->
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="image_seo">Image SEO Data</label>
            <input type="text" class="form-control" name="image_seo" id="image_seo">
        </div>
        <!-- First Class Price -->
        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="form-group">
            <label for="short_description">Short Description</label>
            <input type="text" class="form-control" id="short_description" name="short_description" value="{{ old('short_description') }}" required>
        </div>

        <!-- Business Class Price -->
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
        </div>

        <!-- Premier Economy Price -->
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" step="0.01" class="form-control" id="rating" name="rating" value="{{ old('rating') }}" required placeholder="4.5">
        </div>

        <!-- Economy Price -->
        <div class="form-group">
            <label for="Long_description">Long Description</label>
            <input type="text" class="form-control" id="long_description" name="long_description" value="{{ old('long_description') }}" required>
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