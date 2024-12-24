<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-position: center center;
            object-fit: cover;
            background-size: cover;
            background-image: url('images/waterimagedrop.png');
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            height:400px;
            margin: 130px auto;
            background:  #ffffff78;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1,
        h2 {
            text-align: center;
            color: #010c3e;
        }

        form {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #010c3e;
        }

        form input,
        form button {
            width: 90%;
            padding: 12px;
            margin-bottom: 12px;
            border: 1px solid #010c3e;
            border-radius: 5px;
            font-size: 14px;
        }

        form input:focus {
            outline: none;
            border-color: #87d3d7;
            box-shadow: 0 0 5px rgba(135, 211, 215, 0.8);
        }

        form button {
            background-color: #010c3e;
            color: #fff;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #87d3d7;
            color: #010c3e;
        }

        .receipt {
            text-align: center;
            margin-top: 20px;
            padding: 15px;
            background: #87d3d7;
            color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        a {
            display: inline-block;
            margin-top: 10px;
            color: #010c3e;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #87d3d7;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Booking System</h1>

        <!-- Booking Form -->
        <form id="bookingForm" action="book.php" method="POST">
            <label for="customer_name">Customer Name:</label>
            <input type="text" id="customer_name" name="customer_name" placeholder="Enter your name" required>

            <label for="service_type">Service Type:</label>
            <input type="text" id="service_type" name="service_type" placeholder="Enter service type" required>

            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" placeholder="Enter amount" required>

            <button type="submit">Book</button>
        </form>
    </div>
</body>

</html>