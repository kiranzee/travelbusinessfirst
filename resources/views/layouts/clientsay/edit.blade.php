@extends('layouts.admin')
@section('title', 'Client Comments')
@section('content')

    <div class="container mt-5">
        <h2>Update Client Comments</h2>

        <!-- Display success message if available -->
        @if (session('success'))
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
        <form action="{{ route('clientsay.update', $clientsay->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $clientsay->name) }}" required>
            </div>

            <!-- Image Upload Field -->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6"><label for="image">Upload Client Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="col-md-6"><img src="{{ asset('uploads/' . $clientsay->image) }}"
                            alt="{{ $clientsay->name }}" class="img-fluid" style="max-width: 100%; height: auto;" /></div>

                </div>
                <!-- Rating Field -->
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating"
                        value="{{ old('rating', $clientsay->rating) }}" required>
                </div>

            </div>
            <!-- Image SEO Field -->
            <div class="form-group">
                <label for="title">Comments</label>
                <input type="text" class="form-control" id="comments" name="comments"
                    value="{{ old('comments', $clientsay->comments) }}" required>
            </div>


            <!-- Status Field -->
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="active" {{ old('status', $clientsay->status) == 'active' ? 'selected' : '' }}>Active
                    </option>
                    <option value="inactive" {{ old('status', $clientsay->status) == 'inactive' ? 'selected' : '' }}>
                        Inactive</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection
