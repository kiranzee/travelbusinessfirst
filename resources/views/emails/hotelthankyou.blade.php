<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Hotel Inquiry</title>
    <style>
        body {
            font-family: Helvetica;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            margin: 15px 0;
        }

        .btn {
            display: block;
            width: fit-content;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            margin: 20px auto;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Thank You for Your Inquiry!</h1>
        <p>Dear {{ $hotelEnquiry->customer_name }},</p>
        <p>Thank you for reaching out to <strong>Travel Business First</strong> with your hotel inquiry for
            {{ $hotelEnquiry->destination }}. We have received
            your request and one of our experienced travel consultants will be in touch with you shortly to discuss your
            hotel options and tailor a perfect stay for your upcoming trip.</p>
        <p>We pride ourselves on offering luxury accommodations and excellent customer service, and we look forward to
            helping you create a truly memorable travel experience.</p>
        <p>If you have any urgent questions, feel free to contact us directly at <a
                href="mailto:info@travelbusinessfirst.co.uk">info@travelbusinessfirst.co.uk</a>.</p>
        <a href="https://www.travelbusinessfirst.co.uk" class="btn">Visit Our Website</a>
        <p>Warm regards,</p>
        <p><strong>The Travel Business First Team</strong></p>
        0203 727 6360
    </div>
</body>

</html>
