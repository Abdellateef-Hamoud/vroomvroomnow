


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>vroom vroom Now/our team </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>vroomvroomnow@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">vroom vroom Now</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link" class="btn btn-lg btn-primary btn-lg-square back-to-top">About</a>
                        <a href="car1.php" class="nav-item nav-link">Cars</a>
                        <a href="team.php" class="nav-item nav-link">Our Team</a>
                        <a href="testimonial.php" class="nav-item nav-link">Testimonials</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="log in.html" class="nav-item nav-link">Log in</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-secondary rounded p-4 shadow">
                <h2 class="text-center " style="color: orange;">Add Car</h2>

                <form action="process_add_car.php" method="POST" enctype="multipart/form-data">
                    <!-- ... Your form elements ... -->
                    <div class="form-group">
                        <label for="carBrand" >Car Name</label>
                        <input class=" px-4 mb-3" style="height: 50px;width: 525px;display: block; " required  placeholder="Enter Car Name" name="carBrand">
                    </div>

                    <div class="form-group">
                        <label for="carModel" >Car Model</label>
                        <input type="number"  class=" px-4 mb-3" style="height: 50px;width: 525px;display: block; " required  placeholder="Enter Car Model" name="carModel">
                           
                    </div>

                    <div class="form-group">
                        <label for="carColor" >Car Color</label>
                        <input class=" px-4 mb-3" style="height: 50px;width: 525px;display: block; " required  placeholder="Enter Car color" name="carColor">
                    </div>

                    <div class="form-group">
                        <label for="transmission" >Transmission Type</label>
                        <select class="custom-select px-4 mb-3" style="height: 50px;" required name="transmission">
                            <option selected disabled>Select transmission type</option>
                            <option value="automatic">Automatic</option>
                            <option value="manual">Manual</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="carName" >Car price in day</label>
                        <input type="number" class=" px-4 mb-3" id="carprice" style="height: 50px;width: 525px;display: block; " placeholder="Enter car price" name="carPrice" required>
                    </div>

                    <div class="form-group">
                        <label for="carKilometers" >Kilometers Walking</label>
                        <input type="number" class=" px-4 mb-3" id="carKilometers" style="height: 50px;width: 525px;display: block;"placeholder="Enter kilometers walked"  name="carKilometers" min="1" required>
                    </div>

                    <div class="form-group">
                        <label for="carDescription"  >Car Description</label>
                        <textarea class="form-control" id="carDescription" placeholder="Enter car description" name="carDescription" required></textarea>
                    </div>
                    <div class="form-group " >
                        <label for="Image " >Car Image</label>
                        <input type="file" class="form-control " id="Image" name="Image" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block " >Add Car</button>
                    


                    <!-- <button type="submit" class="btn btn-primary btn-block mb-2" style="background-color: orange; border-color: orange;">Upload Image</button>
                    <button type="submit" class="btn btn-primary btn-block mb-3" style="background-color: orange; border-color: orange;">Add Car</button> -->
                    

                    <div class="text-center">
                        <a href="for_admin.php" class="text-light">Show All Products</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- Footer Start -->
<div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5 mx-auto">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i><a href="https://maps.app.goo.gl/4zt5xomGUNbSUbZBA" style="color: #bdbdc2;opacity: 0.7 ;">Eltahreer Street, Cairo</a></p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>info@example.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mx-auto">
                <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="index.php"><i class="fa fa-angle-right text-white mr-2"></i>HOME</a>
                    <a class="text-body mb-2" href="about.php"><i class="fa fa-angle-right text-white mr-2"></i>ABOUT</a>
                    <a class="text-body mb-2" href="car1.php"><i class="fa fa-angle-right text-white mr-2"></i>CARS</a>
                    <a class="text-body mb-2" href="team.php"><i class="fa fa-angle-right text-white mr-2"></i>OUR TEAM</a>
                    <a class="text-body mb-2" href="testimonial.php"><i class="fa fa-angle-right text-white mr-2"></i>TESTOMONIALS</a>
                    <a class="text-body mb-2" href="contact.php"><i class="fa fa-angle-right text-white mr-2"></i>CONTACT</a>
                    <a class="text-body mb-2" href="log in.html"><i class="fa fa-angle-right text-white mr-2"></i>LOG IN</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mx-auto">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
           
    <div class="container-fluid  py-2 px-sm-3 px-md-5 " >
        <p class="mb-2 text-center text-body">&copy; <a href="#">vroom vroom Now</a>. All Rights Reserved.</p>
        <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">The Death Team</a></p>
    </div> 
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>