<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "swe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $pickup_location = $_POST["pickup_location"];
    $drop_location = $_POST["drop_location"];
    $pickup_date = $_POST["pickup_date"];
    $pickup_time = $_POST["pickup_time"];
    $special_request = $_POST["special_request"];

    $sql = "INSERT INTO bookings (first_name, last_name, email, mobile_number, pickup_location, drop_location, pickup_date, pickup_time, special_request)
            VALUES ('$first_name', '$last_name', '$email', '$mobile_number', '$pickup_location', '$drop_location', '$pickup_date', '$pickup_time', '$special_request')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking added successfully! Please visit to the branch at the scheduled date $pickup_date and time $pickup_time.');</script>"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
