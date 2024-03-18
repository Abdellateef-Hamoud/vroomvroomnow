<?php
$servername = "localhost";  
$username = "root";      
$password = "";      
$dbname = "swe";                  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the value from the form
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];


    // Insert the value into the database
    $sql = "INSERT INTO users (first_name, last_name, phone_number, username, email, password, birthday, gender) VALUES ('$firstName', '$lastName', '$phoneNumber', '$username', '$email', '$password', '$birthday', '$gender')";

    if ($conn->query($sql) === TRUE) {
        header("location:index.php");
    } else {
        header("location:sign up .html");
    }
}

// Close the connection
$conn->close();
?>