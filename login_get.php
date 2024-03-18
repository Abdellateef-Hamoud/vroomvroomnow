<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$loginSuccessful = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // Checking for errors in query execution
    if ($stmt->error) {
        die("Query execution failed: " . $stmt->error);
    }

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Using password_verify to check hashed password
        if (password_verify($password, $user['password'])) {
            $loginSuccessful = true;

            // Store user role in session
            $_SESSION['role'] = $user['role'];
        }
    } else {
        echo "Invalid username or password";
    }
}

// Redirect based on user role
if ($loginSuccessful) {
    if ($_SESSION['role'] === 'admin') {
        header('Location: insert.php');
    } else {
        header('Location: index.php');
    }
}

$conn->close();
?>