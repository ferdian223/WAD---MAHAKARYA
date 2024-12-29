<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .booking-details {
            margin-bottom: 20px;
        }
        .booking-details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Booking Details</h1>
    </div>

    <div class="booking-details">
        <p><strong>Package:</strong> {{ $booking->package_name }}</p>
        <p><strong>Name:</strong> {{ $booking->name }}</p>
        <p><strong>Phone:</strong> {{ $booking->phone }}</p>
        <p><strong>Price:</strong> Rp. {{ number_format($booking->price) }}</p>
    </div>
</body>
</html> 