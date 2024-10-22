@extends('layouts.admin')
@section('title', 'Ticket Enquiry')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container">
        <h2>Ticket Enquiry</h2>

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

                    <th>Flight ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Phone</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>Passenger(s)</th>
                    <th>Class Type</th>
                    <th>Create Date</th>


                </tr>
            </thead>
            <tbody>
                @if ($ticket->isNotEmpty())
                    @foreach ($ticket as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td>{{ $ticket->flight_id }}</td>
                            <td>{{ $ticket->customer_name }}</td>
                            <td><a href="mailto:{{ $ticket->customer_email }}">{{ $ticket->customer_email }}</td>
                            <td><a href="tel:+44{{ $ticket->customer_phone }}">{{ $ticket->customer_phone }}</a></td>

                            <td>{{ $ticket->source }}</td>
                            <td>{{ $ticket->destination }}</td>
                            <td>{{ Carbon::parse($ticket->departure_date)->format('D, d M y') }}</td>
                            <td>{{ Carbon::parse($ticket->return_date)->format('D, d M y') }}</td>
                            <td>{{ $ticket->passengers }}</td>
                            <td>
                                @if ($ticket->class_type == '1')
                                    Economy Class
                                @elseif($ticket->class_type == '2')
                                    Business Class
                                @elseif($ticket->class_type == '3')
                                    First Class
                                @elseif($ticket->class_type == '4')
                                    Premium Economy
                                @endif
                            </td>
                            <td>{{ Carbon::parse($ticket->created_at)->format('D, d M y') }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">
                            <p>No Ticket Enquiries available at the moment.</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>

@endsection
