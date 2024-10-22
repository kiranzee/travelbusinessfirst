@extends('layouts.admin')
@section('title', 'Most Popular Flight Destinations')
@section('content')
    <div class="container">
        <h2>Popular Flight Destinations</h2>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add new destination button -->
        <div class="mb-3">
            <a href="{{ route('flight-destination.create') }}" class="btn btn-primary">Add New Destination</a>
        </div>

        <!-- Destination table -->
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>ID</th>
                    <th>region</th>
                    <th>title</th>
                    <th>Image</th>
                    <th>First Class Price</th>
                    <th>Business Class Price</th>
                    <th>Pre Economy Class Price</th>
                    <th>Economy Class Price</th>
                    <th>status</th>
                    <th>user name</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinations as $destination)
                    <tr>
                        <td>{{ $destination->id }}</td>
                        <td>{{ $destination->region }}</td>
                        <td>{{ $destination->title }}</td>
                        <td><img src="{{ asset('uploads/' . $destination->title . '/' . $destination->image) }}"
                                alt="{{ $destination->title }}" class="img-fluid" style="max-width: 100%; height: auto;" />
                        </td>
                        <td>{{ $destination->first_class_price }}</td>
                        <td>{{ $destination->business_class_price }}</td>
                        <td>{{ $destination->premier_economy_price }}</td>
                        <td>{{ $destination->economy_price }}</td>
                        <td>{{ $destination->status }}</td>
                        <td>{{ $destination->user ? $destination->user->name : 'N/A' }}</td>
                        <td>
                            <!-- Edit button -->
                            <a href="{{ route('flightdestination.edit', $destination->id) }}"
                                class="btn btn-sm btn-warning">Edit</a>

                            <!-- Delete button -->
                            <form action="{{ route('flightdestination.destroy', $destination->id) }}" method="POST"
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
