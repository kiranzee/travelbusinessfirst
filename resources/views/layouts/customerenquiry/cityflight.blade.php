@extends('layouts.admin')
@section('title', 'Ticket Enquiry')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container">
        <h2>City Flight Enquiry</h2>

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
                    <th>Passenger(s)</th>
                    <th>Class Type</th>
                    <th>Create Date</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @if ($cityflight->isNotEmpty())
                    @foreach ($cityflight as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td>{{ $ticket->customer_name }}</td>
                            <td><a href="mailto:{{ $ticket->customer_email }}">{{ $ticket->customer_email }}</a></td>
                            <td><a href="tel:+44{{ $ticket->customer_phone }}">{{ $ticket->customer_phone }}</a></td>
                            <td>{{ $ticket->passengers }}</td>
                            <td>{{ $ticket->class_type }}</td>
                            <td>{{ Carbon::parse($ticket->created_at)->format('D, d M y') }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary toggle-details" data-ticket-id="{{ $ticket->id }}">
                                    Show Details
                                </button>
                            </td>
                        </tr>
                        <tr class="details-row" id="details-{{ $ticket->id }}" style="display: none;">
                            <td colspan="8">
                                <table border="1" cellpadding="10" cellspacing="0"
                                    style="width: 100%; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Departure Date</th>
                                            <th>Return Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ticket->flightDetailsEnquiry as $detail)
                                            <tr>
                                                <td>{{ $detail->from }}</td>
                                                <td>{{ $detail->to }}</td>
                                                <td>{{ Carbon::parse($detail->departure_date)->format('D, d M y') }}</td>
                                                <td>{{ $detail->return_date ? Carbon::parse($detail->return_date)->format('D, d M y') : '' }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">
                            <p>No City Flight Enquiries available at the moment.</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>




    </div>

@endsection
