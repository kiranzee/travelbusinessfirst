@extends('layouts.admin')
@section('title', 'Ticket Enquiry')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container">
        <h2>Track Price Enquiry</h2>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <!-- Ticket Enquire table -->
        <table class="table table-bordered w-100">
            <thead>
                <tr>

                    <th>Ticket ID</th>

                    <th>Departure</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>Customer Phone</th>
                    <th>Customer Email</th>
                    <th>Requested Date</th>
                </tr>
            </thead>
            <tbody>
                @if ($trackprice->isNotEmpty())
                    @foreach ($trackprice as $trackprice)
                        <tr>
                            <td>{{ $trackprice->id }}</td>
                            <td>{{ $trackprice->source }}</td>
                            <td>{{ $trackprice->destination }}</td>
                            <td>{{ Carbon::parse($trackprice->departure_date)->format('D, d M y') }}</td>
                            <td>{{ Carbon::parse($trackprice->return_date)->format('D, d M y') }}</td>
                            <td><a href="mailto:{{ $trackprice->customer_email }}">{{ $trackprice->customer_email }}</td>
                            <td><a href="tel:+44{{ $trackprice->customer_phone }}">{{ $trackprice->customer_phone }}</a></td>
                            <td>{{ Carbon::parse($trackprice->updated_at)->format('D, d M y') }}</td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">
                            <p>No Track Price Enquiries available at the moment.</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>


@endsection
