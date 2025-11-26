<?php
// Enable full error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection setup
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "sql_injection_project";

// Connect to database
$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input from form
$userid = $_POST['userid'];
$password = $_POST['password']; 

// SQL query constructed with interpolated strings
$sql = "SELECT * FROM users2 WHERE id = '$userid' AND password = '$password'";

// If semicolon is detected, use multi_query (for piggybacked injection testing)
if (strpos($sql, ';') !== false) {
    if (mysqli_multi_query($conn, $sql)) {
        do {
            if ($result = mysqli_store_result($conn)) {
                if (mysqli_num_rows($result) > 0) {
                    header("Location: Secret.html");
                    exit();
                }
                mysqli_free_result($result);
            }
        } while (mysqli_next_result($conn));
    } else {
        echo "Query failed: " . mysqli_error($conn);
    }
} else {
    // Normal query execution
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        header("Location: Secret.html");
        exit();
    } else {
        echo "Invalid User ID or password.";
    }
}

// Close the connection
mysqli_close($conn);
?>
