@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holiday Package</title>
</head>

<body>
    <h1>Thank you, {{ $holidayEnquiry->customer_name }}! for choosing our holiday package!</h1>

    <p>We are excited to inform you that your chosen package is: <strong>{{ $packagename }}</strong> and travel date is
        on {{ Carbon::parse($holidayEnquiry->holiday_date)->format('D, d M y') }}</p>

    <p>Details of your holiday enquiry:</br />
        <!-- Use $holidayEnquiry details as needed -->
        @if ($holidayEnquiry->customer_comments)
            {{ $holidayEnquiry->customer_comments }}
        @else
            Not Applicable
        @endif
    </p>
    <br />
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
</body>

</html>
