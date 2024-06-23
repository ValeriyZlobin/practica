<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Register</h1>
            <form action="register.php" method="POST">
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit" class="btn">Register</button>
                <button type="button" class="btn" onclick="window.location.href='index.php'">Back to Login</button>
            </form>
        </div>
    </div>
</body>
</html>
