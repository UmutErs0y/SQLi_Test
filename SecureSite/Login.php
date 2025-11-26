<?php
// Enable full error reporting (for development only)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "sql_injection_project";

// Create connection
$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input from POST form
$userid = $_POST['userid'];
$password = md5($_POST['password']); // hash password using MD5

// Prepare secure SQL statement using parameterized queries (prevents SQLi)
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE id = ? AND password = ?");
mysqli_stmt_bind_param($stmt, "ss", $userid, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check if user exists
if ($result && mysqli_num_rows($result) > 0) {
    header("Location: Secret.html"); // redirect to sensitive page
    exit();
} else {
    echo "Invalid User ID or password.";
}

// Close connection
mysqli_close($conn);
?>
