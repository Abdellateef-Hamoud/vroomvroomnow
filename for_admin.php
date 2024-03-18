<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>All cars</title>
</head>

<body>

    <div class="container-fluid py-5 ">
    <!-- style="background-color:gray;" -->
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">ALL CARS</h1>

            <div class="row">
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
                
                $sql = "SELECT * FROM cars";
                $result = $conn->query($sql);

       
                if ($result->num_rows > 0) {
                    
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-4 mb-4">
                            <div class="rent-item">
                                <img class="img-fluid mb-4" src="<?php echo $row['car_image']; ?>" alt="">
                                <h4 class="text-uppercase mb-4"><?php echo $row['brand']; ?></h4>
                                <p><strong>Car Model:</strong> <?php echo $row['model']; ?></p>
                                <p><strong>Car Color:</strong> <?php echo $row['color']; ?></p>
                                <p><strong>Transmission Type:</strong> <?php echo $row['transmission']; ?> </p>
                                <p><strong>Car Price per Day:</strong> <?php echo $row['price']; ?>  L.E</p>
                                <p><strong>Kilometers Driven:</strong> <?php echo $row['kilometers']; ?> km</p>
                                <p><strong>Car Description:</strong> <?php echo $row['description']; ?></p>
                                
                                
                                <!-- <a class="btn btn-primary px-3 bg-success" style="border-radius: 8px; border: none" href="#">Edit Car</a>
                                <a class="btn btn-primary px-3 bg-danger" style="border-radius: 8px; border: none" href="#">Delete Car</a> -->
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>
