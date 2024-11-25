@extends('layouts.admin')
@section('title', 'Hotel Enquiry')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container">
        <h2>Hotel Enquiry</h2>

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
                    <th>Destination</th>
                    <th>Check In Date</th>
                    <th>Check Out Date</th>
                    <th>Status</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @if ($hotelEnquiry->isNotEmpty())
                    @foreach ($hotelEnquiry as $hotel)
                        <tr>
                            <td>{{ $hotel->id }}</td>
                            <td>{{ $hotel->customer_name }}</td>
                            <td><a href="mailto:{{ $hotel->customer_email }}">{{ $hotel->customer_email }}</a></td>
                            <td><a href="tel:+44{{ $hotel->customer_phone }}">{{ $hotel->customer_phone }}</a></td>
                            <td>{{ $hotel->destination }}</td>
                            <td>{{ Carbon::parse($hotel->checkin)->format('D, d M y') }}</td>
                            <td>{{ Carbon::parse($hotel->checkout)->format('D, d M y') }}</td>
                            <td>
                                <select class="form-control status-dropdown" data-ticket-id="{{ $hotel->id }}"
                                    name="status" id="status" data-model="HotelEnquiry">
                                    <option value="Pending" {{ $hotel->status == 'Pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="On Hold" {{ $hotel->status == 'On Hold' ? 'selected' : '' }}>On Hold
                                    </option>
                                    <option value="Call Back" {{ $hotel->status == 'Call Back' ? 'selected' : '' }}>Call
                                        Back</option>
                                    <option value="Payment Pending"
                                        {{ $hotel->status == 'Payment Pending' ? 'selected' : '' }}>Payment Pending
                                    </option>
                                    <option value="Payment Received"
                                        {{ $hotel->status == 'Payment Received' ? 'selected' : '' }}>Payment Received
                                    </option>
                                    <option value="Not Interested"
                                        {{ $hotel->status == 'Not Interested' ? 'selected' : '' }}>Not Interested
                                    </option>
                                    <option value="Completed" {{ $hotel->status == 'Completed' ? 'selected' : '' }}>
                                        Completed</option>
                                    <option value="Fake hotel" {{ $hotel->status == 'Fake Enquiry' ? 'selected' : '' }}>
                                        Fake Enquiry</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary toggle-details" data-ticket-id="{{ $hotel->id }}">
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="details-row" id="details-{{ $hotel->id }}" style="display: none;">
                            <td colspan="8">
                                <table border="1" cellpadding="10" cellspacing="0"
                                    style="width: 100%; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No.of Nights</th>
                                            <th>Hotel Rating</th>
                                            <th>Room Type</th>
                                            <th>Adult Count</th>
                                            <th>Child Count</th>
                                            <th>Infant Count</th>
                                            <th>No.of Rooms</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{ $hotel->noofnightstay }}</td>
                                            <td>{{ $hotel->starhotel }}</td>
                                            <td>{{ $hotel->Roomtype }}</td>
                                            <td>{{ $hotel->adultcount }}</td>
                                            <td>{{ $hotel->childcount }}</td>
                                            <td>{{ $hotel->infantcount }}</td>
                                            <td>{{ $hotel->noofrooms }}</td>
                                            <td>{{ $hotel->customer_comments }}</td>
                                        </tr>

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
