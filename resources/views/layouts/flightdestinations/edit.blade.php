@extends('layouts.admin')
@section('title', 'Most Popular Flight Destinations')
@section('content')

    <div class="container mt-5">
        <h2>Update Flight Destination</h2>

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
        <form action="{{ route('flightdestination.update', $destination->id) }}" method="POST" enctype="multipart/form-data"
            id="flightDestination">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="homepage_display">
                            Homepage Display
                        </label>
                        <input class="form-control" type="checkbox" name="homepage_display" id="homepage_display"
                            {{ $destination->homepage_display === '0' ? 'checked' : '' }}
                            value="{{ $destination->homepage_display }}">
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="region">Region-</label>
                        <select class="form-control" name="region" id="region" required>
                            <option value="ASIA & Middle East" {{ $destination->region == 'ASIA & Middle East' ? 'selected' : '' }}>ASIA
                                & Middle East</option>
                            <option value="America & Canada" {{ $destination->region == 'America & Canada' ? 'selected' : '' }}>
                                America & Canada</option>
                            <option value="Europe" {{ $destination->region == 'Europe' ? 'selected' : '' }}>Europe
                            <option value="South America" {{ $destination->region == 'South America' ? 'selected' : '' }}>South
                                America
                            <option value="Africa" {{ $destination->region == 'Africa' ? 'selected' : '' }}>Africa
                            <option value="Carribean" {{ $destination->region == 'Carribean' ? 'selected' : '' }}>Carribean
                            <option value="Australia and New Zealand"
                                {{ $destination->region == 'Australia and New Zealand' ? 'selected' : '' }}>Australia and
                                New Zealand
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6"> <!-- Title Field -->
                    <div class="form-group">
                        <label for="title">Title (homepage)</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $destination->title) }}" required>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6"> <!-- Title Field -->
                    <div class="form-group">
                        <label for="heading">Heading (Detail page)</label>
                        <input type="text" class="form-control" id="heading" name="heading"
                            value="{{ old('heading', $destination->heading) }}" required>
                    </div>
                </div>

                <div class="col-md-6"> <!-- Title Field -->
                    <div class="form-group">
                        <label for="linkname">Link Name (for URL)</label>
                        <input type="text" class="form-control" id="link_name" name="link_name"
                            value="{{ old('link_name', $destination->link_name) }}" required>
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
                    <div class="col-md-6"><img
                            src="{{ asset('uploads/' . $destination->title . '/' . $destination->image) }}"
                            alt="{{ $destination->destination_name }}" class="img-fluid"
                            style="max-width: 100%; height: auto;" /></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image_seo">Image SEO Data (homepage)</label>
                        <input type="text" class="form-control" name="image_seo" id="image_seo"
                            value="{{ old('image_seo', $destination->image_seo) }}">
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
                    <div class="col-md-6"><img
                            src="{{ asset('uploads/' . $destination->title . '/' . $destination->banner_image) }}"
                            alt="{{ $destination->banner_image_seo }}" class="img-fluid"
                            style="max-width: 100%; height: auto;" /></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="banner_image_seo">Banner Image SEO Data (Detail page)</label>
                        <input type="text" class="form-control" name="banner_image_seo" id="banner_image_seo"
                            value="{{ old('banner_image_seo', $destination->banner_image_seo) }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- First Class Price -->
                    <div class="form-group">
                        <label for="first_class_price">First-Class Price</label>
                        <input type="number" step="0.01" class="form-control" id="first_class_price"
                            name="first_class_price"
                            value="{{ old('first_class_price', $destination->first_class_price) }}" required>
                    </div>


                </div>
                <div class="col-md-6"><!-- Business Class Price -->
                    <div class="form-group">
                        <label for="business_class_price">Business Class Price</label>
                        <input type="number" step="0.01" class="form-control" id="business_class_price"
                            name="business_class_price"
                            value="{{ old('business_class_price', $destination->business_class_price) }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6"> <!-- Premier Economy Price -->
                    <div class="form-group">
                        <label for="premier_economy_price">Premier Economy Price</label>
                        <input type="number" step="0.01" class="form-control" id="premier_economy_price"
                            name="premier_economy_price"
                            value="{{ old('premier_economy_price', $destination->premier_economy_price) }}" required>
                    </div>
                </div>
                <div class="col-md-6"><!-- Economy Price -->
                    <div class="form-group">
                        <label for="economy_price">Economy Price</label>
                        <input type="number" step="0.01" class="form-control" id="economy_price"
                            name="economy_price" value="{{ old('economy_price', $destination->economy_price) }}"
                            required>
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
                    <div class="col-md-6"><img
                            src="{{ asset('uploads/' . $destination->title . '/' . $destination->airline_image1) }}"
                            alt="" class="img-fluid" style="max-width: 100%; height: auto;" /></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from1">Source</label>
                        <input type="text" class="form-control" id="airline_from1" name="airline_from1"
                            value="{{ old('airline_from1', $destination->airline_from1) }}" required>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to1">Destination</label>
                        <input type="text" class="form-control" id="airline_to1" name="airline_to1"
                            value="{{ old('airline_to1', $destination->airline_to1) }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline1_price">Price</label>
                        <input type="number" class="form-control" id="airline1_price" name="airline1_price"
                            value="{{ old('airline1_price', $destination->airline1_price) }}" required>
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
                    <div class="col-md-6"><img
                            src="{{ asset('uploads/' . $destination->title . '/' . $destination->airline_image2) }}"
                            alt="" class="img-fluid" style="max-width: 100%; height: auto;" /></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from2">Source</label>
                        <input type="text" class="form-control" id="airline_from2" name="airline_from2"
                            value="{{ old('airline_from2', $destination->airline_from2) }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to2">Destination</label>
                        <input type="text" class="form-control" id="airline_to2" name="airline_to2"
                            value="{{ old('airline_to2', $destination->airline_to2) }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline2_price">Price</label>
                        <input type="number" class="form-control" id="airline2_price" name="airline2_price"
                            value="{{ old('airline2_price', $destination->airline2_price) }}" required>
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
                    <div class="col-md-6"><img
                            src="{{ asset('uploads/' . $destination->title . '/' . $destination->airline_image3) }}"
                            alt="" class="img-fluid" style="max-width: 100%; height: auto;" /></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from3">Source</label>
                        <input type="text" class="form-control" id="airline_from3" name="airline_from3"
                            value="{{ old('airline_from3', $destination->airline_from3) }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to3">Destination</label>
                        <input type="text" class="form-control" id="airline_to3" name="airline_to3"
                            value="{{ old('airline_to3', $destination->airline_to3) }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline3_price">Price</label>
                        <input type="number" class="form-control" id="airline3_price" name="airline3_price"
                            value="{{ old('airline3_price', $destination->airline3_price) }}" required>
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
                    <div class="col-md-6"><img
                            src="{{ asset('uploads/' . $destination->title . '/' . $destination->airline_image4) }}"
                            alt="" class="img-fluid" style="max-width: 100%; height: auto;" /></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from4">Source</label>
                        <input type="text" class="form-control" id="airline_from4" name="airline_from4"
                            value="{{ old('airline_from4', $destination->airline_from4) }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to4">Destination</label>
                        <input type="text" class="form-control" id="airline_to4" name="airline_to4"
                            value="{{ old('airline_to4', $destination->airline_to4) }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline4_price">Price</label>
                        <input type="number" class="form-control" id="airline4_price" name="airline4_price"
                            value="{{ old('airline4_price', $destination->airline4_price) }}" required>
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
                    <div class="col-md-6"><img
                            src="{{ asset('uploads/' . $destination->title . '/' . $destination->airline_image5) }}"
                            alt="" class="img-fluid" style="max-width: 100%; height: auto;" /></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_from5">Source</label>
                        <input type="text" class="form-control" id="airline_from5" name="airline_from5"
                            value="{{ old('airline_from5', $destination->airline_from5) }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="airline_to5">Destination</label>
                        <input type="text" class="form-control" id="airline_to5" name="airline_to5"
                            value="{{ old('airline_to5', $destination->airline_to5) }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="airline5_price">Price</label>
                        <input type="number" class="form-control" id="airline5_price" name="airline5_price"
                            value="{{ old('airline5_price', $destination->airline5_price) }}" required>
                    </div>
                </div>
            </div>


            <div>
                <strong>Long Description</strong>
            </div>
            <div id="editor">
                {!! $destination->long_description !!}
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


            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const toolbarOptions = [
                        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                        ['blockquote', 'code-block'],
                        ['link', 'image', 'video', 'formula'],

                        [{
                            'header': 1
                        }, {
                            'header': 2
                        }], // custom button values
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }, {
                            'list': 'check'
                        }],
                        [{
                            'script': 'sub'
                        }, {
                            'script': 'super'
                        }], // superscript/subscript
                        [{
                            'indent': '-1'
                        }, {
                            'indent': '+1'
                        }], // outdent/indent
                        [{
                            'direction': 'rtl'
                        }], // text direction

                        [{
                            'size': ['small', false, 'large', 'huge']
                        }], // custom dropdown
                        [{
                            'header': [1, 2, 3, 4, 5, 6, false]
                        }],

                        [{
                            'color': []
                        }, {
                            'background': []
                        }], // dropdown with defaults from theme
                        [{
                            'font': []
                        }],
                        [{
                            'align': []
                        }],

                        ['clean'] // remove formatting button
                    ];
                    const quill = new Quill('#editor', {
                        modules: {
                            toolbar: toolbarOptions
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
