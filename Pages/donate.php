<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - Pet Rescue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            color: #333;
        }

        .container p {
            line-height: 1.6;
            color: #666;
        }

        .container form {
            margin-top: 20px;
        }

        .container label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .container input,
        .container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .container button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Pet Rescue</h1>
    <p>Your donation makes a difference in the lives of pets in need</p>
</div>

<div class="container">
    <h2>Make a Donation</h2>
    <p>Your generous contribution helps us provide medical care, shelter, and love to pets waiting for their forever homes.</p>

    <form action="../PHP/donate.php" method="post"> 
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="amount">Donation Amount:</label>
        <input type="number" id="amount" name="amount" min="1" required>

        <label for="paymentMethod">Payment Method:</label>
        <select id="paymentMethod" name="paymentMethod">
            <option value="creditCard">Credit Card</option>
            <option value="paypal">PayPal</option>
            <!-- Add more options as needed -->
        </select>

        <button type="submit">Make a Donation</button>
    </form>
</div>

</body>
</html>
