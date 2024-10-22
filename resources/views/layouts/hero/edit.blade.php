@extends('layouts.admin')
@section('title','Most Popular Flight Destinations')
@section('content')

<div class="container mt-5">
    <h2>Update Hero Section</h2>

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
    <form action="{{ route('herosection.update', $herosection->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
        <!-- Heading Field -->
        <div class="form-group">
            <label for="title">Heading</label>
            <input type="text" class="form-control" id="heading" name="heading" value="{{ old('heading', $herosection->heading) }}" required>
        </div>

        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $herosection->title) }}" required>
        </div>

        <!-- Image Upload Field -->
        <div class="form-group">
            <div class="row">
                <div class="col-md-6"><label for="image">Upload Image</label>
                    <input type="file" class="form-control" id="image" name="image">                  
                </div>
                <div class="col-md-6"><img src="{{ asset('uploads/' . $herosection->image) }}" alt="{{ $herosection->herosection_title }}" class="img-fluid" style="max-width: 100%; height: auto;" /></div>

            </div>
            
            
        </div>
        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $herosection->description) }}" required>
        </div>
        
        <!-- Status Field -->
<div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status" required>
        <option value="active" {{ (old('status', $herosection->status) == 'active') ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ (old('status', $herosection->status) == 'inactive') ? 'selected' : '' }}>Inactive</option>
    </select>
</div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection