<?php include('db_config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash Booking</title>
    <!-- Link Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: url('images/waterimagedrop.png'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #010c3e;
        }

        h1 {
            text-align: center;
            margin: 50px 0;
            font-size: 2.5rem;
            color:#fff;
            font-weight:bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        form {
            width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: rgb(255 255 255 / 28%);/* Semi-transparent background */
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            animation: slide-in 1s ease-out;
        }

        @keyframes slide-in {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .input-container {
            position: relative;
            margin-bottom: 20px;
        }

        .input-container i {
            position: absolute;
            left: 10px;
            top: 67%;
            transform: translateY(-50%);
            color: #010c3e;
        }

        input[type="text"], input[type="email"], input[type="date"], input[type="time"] {
            width: 100%;
            padding: 10px 10px 10px 35px; /* Extra space for icons */
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: box-shadow 0.3s ease, border 0.3s ease;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="date"]:focus, input[type="time"]:focus {
            outline: none;
            border: 1px solid #010c3e;
            box-shadow: 0px 0px 8px rgba(1, 12, 62, 0.5);
        }

        input[type="submit"] {
            width: 100%;
            background-color: #010c3e;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #87d3d7;
            transform: scale(1.05);
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <h1>Book Your Car Wash Appointment</h1>
    <form action="submit_booking.php" method="POST">
        <div class="input-container">
            <i class="fas fa-user"></i>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <div class="input-container">
            <i class="fas fa-envelope"></i>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="input-container">
            <i class="fas fa-phone"></i>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>

        <div class="input-container">
            <i class="fas fa-calendar-alt"></i>
            <label for="date">Service Date:</label>
            <input type="date" id="date" name="service_date" required>
        </div>

        <div class="input-container">
            <i class="fas fa-clock"></i>
            <label for="time">Service Time:</label>
            <input type="time" id="time" name="service_time" required>
        </div>

        <input type="submit" value="Book Now">
    </form>
</body>
</html>
