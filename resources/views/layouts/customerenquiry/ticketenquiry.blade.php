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


        <!-- Ticket Enquire table -->
        <table class="table table-bordered w-100">
            <thead>
                <tr>

                    <th>Ticket ID</th>

                    <th>Flight ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Phone</th>
                    <th>Class Type</th>
                    <th>Create Date</th>
                    <th>Status</th>
                    <th>Details</th>


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
                            <td>
                                <select class="form-control status-dropdown" data-ticket-id="{{ $ticket->id }}"
                                    name="status" id="status" data-model="TicketEnquiry">
                                    <option value="Pending" {{ $ticket->status == 'Pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="On Hold" {{ $ticket->status == 'On Hold' ? 'selected' : '' }}>On Hold
                                    </option>
                                    <option value="Call Back" {{ $ticket->status == 'Call Back' ? 'selected' : '' }}>Call
                                        Back</option>
                                    <option value="Payment Pending"
                                        {{ $ticket->status == 'Payment Pending' ? 'selected' : '' }}>Payment Pending
                                    </option>
                                    <option value="Payment Received"
                                        {{ $ticket->status == 'Payment Received' ? 'selected' : '' }}>Payment Received
                                    </option>
                                    <option value="Not Interested"
                                        {{ $ticket->status == 'Not Interested' ? 'selected' : '' }}>Not Interested</option>
                                    <option value="Completed" {{ $ticket->status == 'Completed' ? 'selected' : '' }}>
                                        Completed</option>
                                    <option value="Fake Enquiry" {{ $ticket->status == 'Fake Enquiry' ? 'selected' : '' }}>
                                        Fake Enquiry</option>
                                </select>
                            </td>

                            <td>
                                <button class="btn btn-sm btn-primary toggle-details" data-ticket-id="{{ $ticket->id }}">
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="details-row" id="details-{{ $ticket->id }}" style="display: none;">
                            <td colspan="8">
                                <table border="1" cellpadding="10" cellspacing="0"
                                    style="width: 100%; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>Source</th>
                                            <th>Destination</th>
                                            <th>Departure Date</th>
                                            <th>Return Date</th>
                                            <th>Passenger(s)</th>
                                            <th>Sales Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{ $ticket->source }}</td>
                                            <td>{{ $ticket->destination }}</td>
                                            <td>{{ Carbon::parse($ticket->departure_date)->format('D, d M y') }}</td>
                                            <td>{{ Carbon::parse($ticket->return_date)->format('D, d M y') }}</td>
                                            <td>{{ $ticket->passengers }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6"><input type="text" id="sa-{{ $ticket->id }}"
                                                            name="sales_amount" class="form-control w-20"
                                                            value="{{ old('sales_amount', $ticket->sales_amount) }}"></div>
                                                    <div class="col-6"><button type="submit" data-model="TicketEnquiry"
                                                            data-ticket-id="{{ $ticket->id }}"
                                                            class="btn btn-primary salesAmtBtn">Update</button></div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>
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
