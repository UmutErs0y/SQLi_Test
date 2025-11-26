<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page (Vulnerable)</title>
    <link rel="stylesheet" href="LoginVulnerable.css">
</head>
<body>
    <div class="login-container">
        <h2>Vulnerable Login</h2>
        <form action="Login.php" method="POST">
            <label for="userid">User ID:</label><br>
            <input type="text" id="userid" name="userid" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show Password<br><br>

            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            var pwField = document.getElementById("password");
            pwField.type = pwField.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
<!--http://localhost/SQLInjectionHW3/VulnerableSite/LoginVulnerable.php-->