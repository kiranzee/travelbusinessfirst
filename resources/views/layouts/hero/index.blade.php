@extends('layouts.admin')
@section('title', 'Most Popular Flight Destinations')
@section('content')
    <div class="container">
        <h2>Hero Section Banner</h2>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add new destination button -->
        <div class="mb-3">
            <a href="{{ route('hero.create') }}" class="btn btn-primary">Add Hero Section Banner</a>
        </div>

        <!-- Destination table -->
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>ID</th>

                    <th>Heading</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Image</th>
                    <th>status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($herosection as $herosection)
                    <tr>
                        <td>{{ $herosection->id }}</td>
                        <td>{{ $herosection->heading }}</td>
                        <td>{{ $herosection->title }}</td>
                        <td>{{ $herosection->description }}</td>
                        <td><img src="{{ asset('uploads/' . $herosection->image) }}" alt="{{ $herosection->title }}"
                                class="img-fluid" style="max-width: 100%; height: auto;" /></td>
                        <td>{{ $herosection->status }}</td>
                        <td>
                            <!-- Edit button -->
                            <a href="{{ route('herosection.edit', $herosection->id) }}"
                                class="btn btn-sm btn-warning">Edit</a>

                            <!-- Delete button -->
                            <form action="{{ route('herosection.destroy', $herosection->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this destination?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
