<?php
// Database connection details (replace with your actual values)
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $carBrand = $_POST["carBrand"];
    $carModel = $_POST["carModel"];
    $carColor = $_POST["carColor"];
    $transmission = $_POST["transmission"];
    $carPrice = $_POST["carPrice"];
    $carKilometers = $_POST["carKilometers"];
    $carDescription = $_POST["carDescription"];

    // Check if the "Image" key is present in the $_FILES array
    if (isset($_FILES["Image"])) {
        $Image = $_FILES["Image"];
        $Image_Location = $_FILES["Image"]["tmp_name"];
        $Image_name = $_FILES["Image"]["name"];
        $Image_up = "images/" . $Image_name;

        // Check if the "images" directory exists, if not, create it
        if (!is_dir("images")) {
            mkdir("images");
        }

        // Perform SQL query to insert the car into the database (replace with your actual table and column names)
        $sql = "INSERT INTO cars (brand, model, color, transmission, price, kilometers, description, car_image) VALUES ('$carBrand', '$carModel', '$carColor', '$transmission', '$carPrice', '$carKilometers', '$carDescription', '$Image_up')";

        if ($conn->query($sql) === TRUE) {
            // Move the uploaded image to the specified directory
            move_uploaded_file($Image_Location, $Image_up);
            header("location:for_admin.php");
        } else {
            header("location:insert.html");
            // echo "Error adding car: " . $conn->error;
        }
    } else {
        echo "Image not uploaded.";
    }
}

// Close the database connection
$conn->close();
?>
