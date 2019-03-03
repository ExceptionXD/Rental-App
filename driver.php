<!DOCTYPE html>
<?php
session_start();
   if (!isset($_SESSION['email'])) {
             
               header("location:index.php"); 
                    }
                    
                    $email_cv_session=$_SESSION['email'];
?>
<?php

//connection

 require 'database/database_con.php';
 
 //getting table data
  
 $email = filter_input(INPUT_POST, 'book_data', FILTER_SANITIZE_SPECIAL_CHARS);
 
 
 

 //getting data from database
  
 
  $result = "SELECT * from signup_renter WHERE email='$email'";
 
  $select_query_result=mysqli_query($con,$result)or die(mysqli_error($con));
 
  $row= mysqli_fetch_array($select_query_result);
  
    $name_data=$row[1];
    $phone_data=$row[2];
    $c_address_data=$row[3];
    $d_address_data=$row[4];
    $vehicleno_data=$row[5];
    $vehicletype_data=$row[6];
    $panno_data=$row[7];
    $email_data=$row[8];

  
 


?>

  
  



  
  
  
  
  


   
   
   
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rental-Book Your Ride</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Rental</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="booking.php"  >Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <!-- Driver Details -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About Renter</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/team/user.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Renters Name</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Hello There I am <?php echo $name_data;?> I am at Your Service and my Email is <?php echo $email_data;?> .</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/7.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Vehicle Details : </h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">The Vehicle Number is : <?php echo $vehicleno_data; ?></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4>ID-Proof</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">My Aadhaar Number is : <?php echo $panno_data;?></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Ratings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">4.2</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                 
                  <a href="congratulations.php" target="blank" role="button"><div class="timeline-image">
                  <h4>Hurry Up !
                    <br>Book Now &amp;
                    <br>Enjoy 
                    <br></h4>
                </div>
                  </a>
              </li>
            </ul>
            <?php 
                echo $email_data;
                $email = $email_data;
                $sub = "Your Rented Vehicle is on Roll" ;
                $msg ="Congratulations ! Your Vehicle has started it's journey . Payment will be made once the user reaches his/her Destination." ;
                $headers = "FROM: NoReply@site.com" ;

                mail($email , $sub ,$msg ,$headers) ;  
               
            ?>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Rental 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    


    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
