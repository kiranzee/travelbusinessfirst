@extends('layouts.admin')
@section('title', 'Ticket Enquiry')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container">
        <h2>Holiday Enquiry</h2>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <!-- Destination table -->
        <table class="table table-bordered w-100">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Phone</th>
                    <th>Holiday Date</th>
                    <th>Package Name</th>
                    <th>Package Price</th>
                    <th>Status</th>
                    <th>Create Date</th>

                </tr>
            </thead>
            <tbody>
                @if ($holidaydeal->isNotEmpty())
                    @foreach ($holidaydeal as $enquiry)
                        <tr>
                            <td>{{ $enquiry->id }}</td>
                            <td>{{ $enquiry->customer_name }}</td>
                            <td><a href="mailto:{{ $enquiry->customer_email }}">{{ $enquiry->customer_email }}</a></td>
                            <td><a href="tel:+44{{ $enquiry->customer_phone }}">{{ $enquiry->customer_phone }}</a></td>
                            <td>{{ Carbon::parse($enquiry->holiday_date)->format('D, d M y') }}</td>
                            <td>{{ $enquiry->bestofactivity->title }}</td>
                            <td>£{{ $enquiry->bestofactivity->price }}</td>
                            <td>
                                <select class="form-control status-dropdown" data-ticket-id="{{ $enquiry->id }}"
                                    name="status" id="status" data-model="HolidayEnquiry">
                                    <option value="Pending" {{ $enquiry->status == 'Pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="On Hold" {{ $enquiry->status == 'On Hold' ? 'selected' : '' }}>On Hold
                                    </option>
                                    <option value="Call Back" {{ $enquiry->status == 'Call Back' ? 'selected' : '' }}>Call
                                        Back</option>
                                    <option value="Payment Pending"
                                        {{ $enquiry->status == 'Payment Pending' ? 'selected' : '' }}>Payment Pending
                                    </option>
                                    <option value="Payment Received"
                                        {{ $enquiry->status == 'Payment Received' ? 'selected' : '' }}>Payment Received
                                    </option>
                                    <option value="Not Interested"
                                        {{ $enquiry->status == 'Not Interested' ? 'selected' : '' }}>Not Interested
                                    </option>
                                    <option value="Completed" {{ $enquiry->status == 'Completed' ? 'selected' : '' }}>
                                        Completed</option>
                                    <option value="Fake Enquiry"
                                        {{ $enquiry->status == 'Fake Enquiry' ? 'selected' : '' }}>
                                        Fake Enquiry</option>
                                </select>
                            </td>
                            <td>{{ Carbon::parse($enquiry->created_at)->format('D, d M y') }}</td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">
                            <p>No Holiday Deals Enquiries available at the moment.</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>




    </div>

@endsection
