<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Dummy credentials for demonstration
        $valid_username = "admin";
        $valid_password = "password123";

        if ($username == $valid_username && $password == $valid_password) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    }
    ?>
</body>
</html>