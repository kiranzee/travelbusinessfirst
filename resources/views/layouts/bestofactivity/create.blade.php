@extends('layouts.admin')
@section('title', 'Best Of Activities')
@section('content')

    <div class="container mt-5">
        <h2>Create Best Of Activities </h2>

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

        <!-- Flight Form -->
        <form action="{{ route('bestofactivity.store') }}" method="POST" enctype="multipart/form-data">
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
            <!-- Image SEO Field -->
            <div class="form-group">
                <label for="image_seo">Image SEO</label>
                <input type="text" class="form-control" id="image_seo" name="image_seo" value="{{ old('image_seo') }}"
                    required>
            </div>

            <!-- Price Field -->
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"
                    required>
            </div>
            <!-- Rating Field -->
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating') }}"
                    required>
            </div>
            <!-- Rating Count Field -->
            <div class="form-group">
                <label for="rating_count">Rating Count</label>
                <input type="text" class="form-control" id="rating_count" name="rating_count"
                    value="{{ old('rating_count') }}" required>
            </div>

            <!-- package_heading Field -->
            <div class="form-group">
                <label for="hours">Package Heading</label>
                <input type="text" class="form-control" id="package_heading" name="package_heading"
                    value="{{ old('package_heading') }}" required>
            </div>
            <!-- cancellation Field -->
            <div class="form-group">
                <label for="cancellation">Free Cancellation</label>
                <select class="form-control" id="cancellation" name="cancellation" required>
                    <option value="0" {{ old('cancellation') == 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="1" {{ old('cancellation') == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <!-- long description Field -->
            <div class="form-group">
                <label for="long_description">Long Description</label>
                <div id="editor">
                    <h2>Page Content</h2>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
                <!-- Hidden input to store editor content -->
                <input type="hidden" name="long_description" id="long_description">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quill = new Quill('#editor', {
                modules: {
                    toolbar: [
                        [{
                            header: [1, 2, false]
                        }],
                        ['bold', 'italic', 'underline'],
                        ['image', 'code-block'],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }], // Add bullet point and ordered list
                        //['table'] // Add table option
                    ],
                },
                placeholder: 'Compose an epic...',
                theme: 'snow'
            });

            // Attach event listener to the form submission
            const form = document.getElementById('flightDestination');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting right away

                // Get HTML content from Quill editor
                var longDescription = quill.root.innerHTML;
                console.log(longDescription); // Debugging output

                // Set the hidden input field with the HTML content
                document.getElementById('long_description').value = longDescription;

                // Submit the form after setting the value
                form.submit();
            });



        });
    </script>
@endsection
