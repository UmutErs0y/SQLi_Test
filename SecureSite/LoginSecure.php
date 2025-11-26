<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Login Page</title>
    <link rel="stylesheet" href="LoginSecure.css">
</head>
<body>
    <div class="login-container">
        <h2>Secure Login</h2>
        <form action="Login.php" method="POST">
            <label for="userid">User ID:</label><br>
            <input type="text" id="userid" name="userid" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="checkbox" onclick="togglePassword()"> Show Password<br><br>

            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const field = document.getElementById("password");
            field.type = field.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
<!--http://localhost/SQLInjectionHW3/SecureSite/LoginSecure.php-->