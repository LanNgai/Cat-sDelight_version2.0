
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h3>Login</h3>
        <form class="login-form" method="post" action="../account.php">
            Your username:
            <br>
            <input type="text" name="username" required>
            <br><br>
            Your Email:
            <br>
            <input type="email" name="email" required>
            <br><br>
            Your password:
            <br>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="submit">
        </form>
        <div class="links-container">
            <p>No account? <a href="../registration/registration.php">Register Here!</a></p>
            <a href="../index.php">Go to Home Page</a>
        </div>
    </div>
</body>
</html>

