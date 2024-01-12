<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <style>
        body {
            font-family: 'Comfortaa', cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden; scrollbars */
            background-color: #111111; 
        }

        video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
           background-color: rgba(0, 0, 0, 0.5); 
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #ffffff; /* white text color */
        }

        form {
            margin-top: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #ffffff; /* white text color */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #ffffff; /* white text color */
            background-color: #111111; /* dark gray input background */
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #ffffff; /* white link color */
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
    <video autoplay muted loop>
        <source src="BG.mp4" type="video/mp4">
    </video>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <div class="register-link">

            <p style="color: white;">Don't have an account? <a href="register-page.php">Register</a></p>
        </div>
    </div>
</body>
</html>
