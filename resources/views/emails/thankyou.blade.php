@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html>

<head>
    <title>Thank You for Your Enquiry</title>
</head>

<body>
    <h2>Thank you, {{ $flightEnquiry->customer_name }}!</h2>

    <p>We have received your enquiry for the following Destination(s):</p>

    @if ($flightEnquiry->flightDetailsEnquiry->isNotEmpty())
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>From</th>
                    <th>To</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flightEnquiry->flightDetailsEnquiry as $detail)
                    <tr>
                        <td>{{ $detail->from }}</td>
                        <td>{{ $detail->to }}</td>
                        <td>{{ Carbon::parse($detail->departure_date)->format('D, d M y') }}</td>
                        <td>{{ Carbon::parse($detail->return_date)->format('D, d M y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Thanks for reaching us.</p>
    @endif


    <p>At Travel Business First, we pride ourselves on delivering exceptional cheapest prices that meet the diverse
        needs
        and budget friendly of our customers. <br />
        Our team of experts would be happy to discuss your specific requirements
        and tailor a solution that best suits your needs.
    </p>
    <p> One of our highly experienced Senior Travel consultants will be in
        contact with you shortly.</p>

    <p>Please feel free to reach out to us at <a href="tel:+4402037276360"> 0203 727 6360</a> with any additional
        questions
        or concerns you may have.</p>

    Best regards,<br />
    TravelBusinessfirst Team
</body>

</html>
