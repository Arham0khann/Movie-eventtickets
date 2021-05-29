--------------------------------Index.php.....................................................

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Movie & Event Application - Simbha Developers</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Simbha Developers!</div>
                <div class="masthead-heading text-uppercase">Book Your Favourite Movie</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
		
		
		 <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Book Your tickets Now!</h2>
                    <h3 class="section-subheading text-muted">Wera mask and protect your loved one</h3>
                </div>
                <form id="contactForm" action="connect.php" method="post" >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *"  required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="Lemail"type="email" placeholder="Your Email *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" name="Lphone" type="tel" placeholder="Your Phone *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="phone" type="text" name="Lgender" placeholder=" Gender *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="covid"name="Lcovid" type="text" placeholder="Covid Result *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="ticket" name="Lticket" type="tel" placeholder="No. of Tickets*" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="Lsubmit" value="create">
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">
                        Copyright &copy; Simbha Developers
                        <!-- This script automatically adds the current year to your website footer-->
                        <!-- (credit: https://updateyourfooter.com/)-->
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>









--------------------------------------------------Connect1.php-------------------------------------------------------------------




<?php



$servername="localhost";
$username="root";
$password="";
$database_name="movies";
$conn= new mysqli($servername,$username,$password , $database_name) ;


?>



..............................................................Connect.php................................................



<?php


include('connect1.php');

$name=$_POST['name'];
$Lemail= $_POST['Lemail'];
$Lphone= $_POST['Lphone'];
$Lgender= $_POST['Lgender'];
$Lcovid = $_POST['Lcovid'];
$Lticket = $_POST['Lticket'];


if (!$_POST['Lsubmit']){
	echo "All fields are required";
}
else{
	
	$sql= "INSERT into data(name,Lemail,Lphone,Lgender,Lcovid,Lticket)
	values ($name,$Lemail,$Lphone,$Lgender,$Lcovid,$Lticket)";

if (mysqli_query($conn, $sql)){
echo "Tickets booked Successfully";	
}
else{
	echo "Something went wrong";
}
}


