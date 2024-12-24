<?php
$name = $_GET['name'];
$email = $_GET['email'];
$date = $_GET['date'];
$time = $_GET['time'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #010c3e;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #010c3e;
            font-size: 2.5em;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #000;
        }

        .details {
            background-color: #d2f1f36e;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }

        .details p {
            margin: 5px 0;
            font-size: 1.1em;
        }

        .details p strong {
            color: #010c3e;
        }

        .footer {
            margin-top: 30px;
            font-size: 1em;
            color:#010c3e;
        }

        .footer a {
            text-decoration: none;
            color:#010c3e;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Thank you, <?php echo $name; ?>!</h1>
        <p>Your car wash appointment has been successfully booked.</p>

        <div class="details">
            <p><strong>Booking Details:</strong></p>
            <p> <?php echo $name; ?></p>
            <p> <?php echo $email; ?></p>
            <p> <?php echo $date; ?></p>
            <p><?php echo $time; ?></p>
        </div>

        <p>You will receive a confirmation email or SMS shortly.</p>

        <div class="footer">
            <p>If you have any questions, please contact us at <a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>.</p>
        </div>
    </div>

</body>
</html>
