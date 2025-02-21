<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Details</title>
    <link rel="stylesheet" href="css/changeDetails.css">
</head>
<body>
<div class="change-details-container">
    <h3>Register for an Account</h3>
    <form class="change-details-form" method="post" action="updateDetails.php">
        Your username:
        <br>
        <input type="text" name="username" required>
        <br><br>
        Your Email:
        <br>
        <input type="text" name="email" required>
        <br><br>
        Your password:
        <br>
        <input type="password" name="password" required>
        <br><br>
        Verify password:
        <br>
        <input type="password" name="confirm_password" required>
        <br><br>
        <input type="submit" value="submit">
    </form>
</div>
</body>
</html>