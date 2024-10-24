@extends('layouts.admin')
@section('title', 'Most Popular Flight Destinations')
@section('content')

    <div class="container mt-5">
        <h2>Create Flight</h2>

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
        <form action="{{ route('flight-destination.store') }}" method="POST" enctype="multipart/form-data"
            id="flightDestination">
            @csrf

            <div class="row">
                <div class="col-md-3">
                    <label class="form-check-label" for="homepage_display">
                        Homepage Display
                    </label>
                    <input class="form-control" type="checkbox" name="homepage_display" id="homepage_display"
                        value="1">

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="region">Region</label>
                        <select class="form-control" name="region" id="region" required>
                            <option value="ASIA & Middle East">ASIA & Middle East</option>
                            <option value="America & Canad">America & Canada</option>
                            <option value="South America">South America</option>
                            <option value="Africa">Africa</option>
                            <option value="Carribean">Carribean</option>
                            <option value="Australia and New Zealand">Australia and New Zealand</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6"> <!-- Title Field -->
                    <div class="form-group">
                        <label for="title">Title (homepage)</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                            required>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6"> <!-- Title Field -->
                    <div class="form-group">
                        <label for="heading">Heading (Detail page)</label>
                        <input type="text" class="form-control" id="heading" name="heading"
                            value="{{ old('heading') }}" required>
                    </div>
                </div>

                <div class="col-md-6"> <!-- Title Field -->
                    <div class="form-group">
                        <label for="linkname">Link Name (for URL)</label>
                        <input type="text" class="form-control" id="link_name" name="link_name"
                            value="{{ old('link_name') }}" required>
                    </div>
                </div>

            </div>


            <!-- Image Upload Field -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Upload Image (homepage)</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image_seo">Image SEO Data (homepage)</label>
                        <input type="text" class="form-control" name="image_seo" id="image_seo"
                            value="{{ old('image_seo') }}">
                    </div>
                </div>
            </div>

            <!-- Banner Image Upload Field -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="banner_image">Banner Upload Image (Detail page)</label>
                        <input type="file" class="form-control" id="banner_image" name="banner_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="banner_image_seo">Banner Image SEO Data (Detail page)</label>
                        <input type="text" class="form-control" name="banner_image_seo" id="banner_image_seo"
                            value="{{ old('banner_image_seo') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- First Class Price -->
                    <div class="form-group">
                        <label for="first_class_price">First-Class Price</label>
                        <input type="number" step="0.01" class="form-control" id="first_class_price"
                            name="first_class_price" value="{{ old('first_class_price') }}" required>
                    </div>


                </div>
                <div class="col-md-6"><!-- Business Class Price -->
                    <div class="form-group">
                        <label for="business_class_price">Business Class Price</label>
                        <input type="number" step="0.01" class="form-control" id="business_class_price"
                            name="business_class_price" value="{{ old('business_class_price') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6"> <!-- Premier Economy Price -->
                    <div class="form-group">
                        <label for="premier_economy_price">Premier Economy Price</label>
                        <input type="number" step="0.01" class="form-control" id="premier_economy_price"
                            name="premier_economy_price" value="{{ old('premier_economy_price') }}" required>
                    </div>
                </div>
                <div class="col-md-6"><!-- Economy Price -->
                    <div class="form-group">
                        <label for="economy_price">Economy Price</label>
                        <input type="number" step="0.01" class="form-control" id="economy_price"
                            name="economy_price" value="{{ old('economy_price') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">


                        <label for="count">1</label>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_image1">Upload Image</label>
                        <input type="file" class="form-control" id="airline_image1" name="airline_image1">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from1">Source</label>
                        <input type="text" class="form-control" id="airline_from1" name="airline_from1"
                            value="{{ old('airline_from1') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to1">Destination</label>
                        <input type="text" class="form-control" id="airline_to1" name="airline_to1"
                            value="{{ old('airline_to1') }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline1_price">Price</label>
                        <input type="number" class="form-control" id="airline1_price" name="airline1_price"
                            value="{{ old('airline1_price') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">


                        <label for="count">2</label>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_image2">Upload Image</label>
                        <input type="file" class="form-control" id="airline_image2" name="airline_image2">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from2">Source</label>
                        <input type="text" class="form-control" id="airline_from2" name="airline_from2"
                            value="{{ old('airline_from2') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to2">Destination</label>
                        <input type="text" class="form-control" id="airline_to2" name="airline_to2"
                            value="{{ old('airline_to2') }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline2_price">Price</label>
                        <input type="number" class="form-control" id="airline2_price" name="airline2_price"
                            value="{{ old('airline2_price') }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">


                        <label for="count">3</label>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_image3">Upload Image</label>
                        <input type="file" class="form-control" id="airline_image3" name="airline_image3">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from3">Source</label>
                        <input type="text" class="form-control" id="airline_from3" name="airline_from3"
                            value="{{ old('airline_from3') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to3">Destination</label>
                        <input type="text" class="form-control" id="airline_to3" name="airline_to3"
                            value="{{ old('airline_to3') }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline3_price">Price</label>
                        <input type="number" class="form-control" id="airline3_price" name="airline3_price"
                            value="{{ old('airline3_price') }}" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">


                        <label for="count">4</label>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_image4">Upload Image</label>
                        <input type="file" class="form-control" id="airline_image4" name="airline_image4">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from4">Source</label>
                        <input type="text" class="form-control" id="airline_from4" name="airline_from4"
                            value="{{ old('airline_from4') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to4">Destination</label>
                        <input type="text" class="form-control" id="airline_to4" name="airline_to4"
                            value="{{ old('airline_to4') }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline4_price">Price</label>
                        <input type="number" class="form-control" id="airline4_price" name="airline4_price"
                            value="{{ old('airline4_price') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">


                        <label for="count">5</label>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_image5">Upload Image</label>
                        <input type="file" class="form-control" id="airline_image5" name="airline_image5">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from5">Source</label>
                        <input type="text" class="form-control" id="airline_from5" name="airline_from5"
                            value="{{ old('airline_from5') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to5">Destination</label>
                        <input type="text" class="form-control" id="airline_to5" name="airline_to5"
                            value="{{ old('airline_to5') }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline5_price">Price</label>
                        <input type="number" class="form-control" id="airline5_price" name="airline5_price"
                            value="{{ old('airline5_price') }}" required>
                    </div>
                </div>
            </div>


            <div>
                <strong>Long Description</strong>
            </div>
            <div id="editor">
                <h2>Page Content</h2>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <!-- Hidden input to store editor content -->
            <input type="hidden" name="long_description" id="long_description">
            <!-- Status Field -->
            <div class="form-group w-25">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const quill = new Quill('#editor', {
                        modules: {
                            toolbar: [
                                [{
                                    header: [1, 2, 3, 4, false]
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

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
