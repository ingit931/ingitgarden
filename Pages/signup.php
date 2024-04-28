<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Ingit Gardening</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url("https://media.istockphoto.com/id/1467596838/photo/residential-garden-landscaping-design-idea.webp?b=1&s=170667a&w=0&k=20&c=478JpmPxljOt0VyOlyA8XIDuUSMGsoBxPnkXdbH-oHE=");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           
        }

        .container h2 {
            color: #333;
            text-align: center;
        }

        .signup-form {
            margin-top: 20px;
        }

        .signup-form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .signup-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .signup-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .signup-form button:hover {
            background-color: #45a049;
        }

        .signup-form p {
            text-align: center;
            color: #666;
        }

        .signup-form a {
            color: #4caf50;
            text-decoration: none;
        }

        .signup-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Ingit Gardening</h1>
    <p>Create an account </p>
</div>

<div class="container">
    <h2>Sign Up</h2>

    <form class="signup-form" method="post" action='../PHP/login.php'>
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button class="SubmitLogin" type="submit">Sign Up</button>

        <p>Already have an account? <a href="./index.html">Log in</a></p>
    </form>
</div>

</body>
<script src='../js/signup.js'></script>
</html>
