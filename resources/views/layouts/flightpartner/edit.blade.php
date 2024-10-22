@extends('layouts.admin')
@section('title','Flight Partner')
@section('content')

<div class="container mt-5">
    <h2>Update Flight Partner</h2>

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
    <form action="{{ route('flightpartner.update', $flightpartner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
       
        <!-- Image Upload Field -->
        <div class="form-group">
            <div class="row">
                <div class="col-md-6"><label for="image">Upload Client Image</label>
                    <input type="file" class="form-control" id="image" name="image">                  
                </div>
                <div class="col-md-6"><img src="{{ asset('uploads/partners/' . $flightpartner->image) }}" alt="" class="img-fluid" style="max-width: 100%; height: auto;" /></div>

            </div>
            
            
        </div>
               
        <!-- Status Field -->
<div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status" required>
        <option value="active" {{ (old('status', $flightpartner->status) == 'active') ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ (old('status', $flightpartner->status) == 'inactive') ? 'selected' : '' }}>Inactive</option>
    </select>
</div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection