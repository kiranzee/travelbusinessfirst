@extends('layouts.admin')
@section('title', 'Best Of Activity')
@section('content')
    <div class="container">
        <h2>Best Of Activities</h2>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add new destination button -->
        <div class="mb-3">
            <a href="{{ route('bestofactivity.create') }}" class="btn btn-primary">Add Best Of Activities</a>
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
                    <th>Rating</th>
                    <th>Rating Count</th>
                    <th>Free Cancellation</th>
                    <th>package Heading</th>
                    <th>status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($bestofactivity as $bestofactivity)
                    <tr>
                        <td>{{ $bestofactivity->id }}</td>
                        <td>{{ $bestofactivity->title }}</td>
                        <td><img src="{{ asset('uploads/' . $bestofactivity->image) }}" alt="{{ $bestofactivity->title }}"
                                class="img-fluid" style="max-width: 100%; height: auto;" /></td>
                        <td>{{ $bestofactivity->image_seo }}</td>
                        <td>{{ $bestofactivity->price }}</td>
                        <td>{{ $bestofactivity->rating }}</td>
                        <td>{{ $bestofactivity->rating_count }}</td>
                        <td>{{ $bestofactivity->cancellation }}</td>
                        <td>{{ $bestofactivity->package_heading }}</td>

                        <td>{{ $bestofactivity->status }}</td>
                        <td>
                            <!-- Edit button -->
                            <a href="{{ route('bestofactivity.edit', $bestofactivity->id) }}"
                                class="btn btn-sm btn-warning">Edit</a>

                            <!-- Delete button -->
                            <form action="{{ route('bestofactivity.destroy', $bestofactivity->id) }}" method="POST"
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
