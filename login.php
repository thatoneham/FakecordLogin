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
            overflow: hidden;
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
            color: #ffffff;
        }

        form {
            margin-top: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #ffffff; 
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #ffffff; 
            background-color: #111111;
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

        .login-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
    <video autoplay muted loop>
        <source src="BG.mp4" type="video/mp4">
    </video>
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="register.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Register">
        </form>
        <div class="login-link">

          <p style="color: white;">Already have an account? <a href="index.php">Login</a></p>
        </div>
    </div>
</body>
</html>