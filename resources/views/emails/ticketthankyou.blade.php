@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <p>Dear <strong>{{ $ticketEnquiry->customer_name }}</strong>,</p>

    <p>Thank you for your recent flight inquiry with Travel Business First. We appreciate your interest and the
        opportunity
        to provide you with more information for below itinerary.</p>
    @if ($ticketEnquiry)
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
                <tr>
                    <td>{{ $ticketEnquiry->source }}</td>
                    <td>{{ $ticketEnquiry->destination }}</td>
                    <td>{{ Carbon::parse($ticketEnquiry->departure_date)->format('D, d M y') }}</td>
                    <td>{{ Carbon::parse($ticketEnquiry->return_date)->format('D, d M y') }}</td>
                </tr>
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
