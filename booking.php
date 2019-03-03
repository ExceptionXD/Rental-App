<!DOCTYPE html>
<?php
session_start();
   if (!isset($_SESSION['email'])) {
             
               header("location:index.php"); 
                    }
                    
                    $email_cv_session=$_SESSION['email'];
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
              <a class="nav-link js-scroll-trigger"  href="database/logout_script.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Book Ride-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Book Your Conveyance</h2>
            <h3 class="section-subheading text-muted">Book Your Ride With Us</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              <form id="booking" name="booking"  action="database/booking_search_script.php" method="post">
              <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="c_address" name="c_address">
                
                   <option class="form-control-2" value="kolkata">Kolkata</option>   
                   <option class="form-control-2" value="delhi">Delhi</option>
                   <option class="form-control-2" value="bhubaneswar">Bhubaneswar</option>
                   <option class="form-control-2" value="jamshedpur">Jamshedpur</option>   
                   <option class="form-control-2" value="durgapur">Durgapur</option>
                
                   
               
                   
               </select>

                </div>
                  </div>
                <div class="col-md-4 text-center">
                
                <div class="form-group">
                    <p><strong>To</strong></p>
                  </div>
                  <br><br>
                  
<!--
                  <div class="form-group">
                   
                  </div>
-->
                  
                  
                  <div class="btn-group text-center">
 
              <div class="form-group">
    
                <label class="vhead">Choose Your Vehicle</label>
                
               <select class="form-control" id="vehicletype" name="vehicletype">
                
                   <option class="form-control-2" value="Scooty">Scooty</option>   
                   <option class="form-control-2" value="Bike">Bike</option>
                   <option class="form-control-2" value="Car">Car</option>
                   
               </select>

                </div>
  <br>
</div>
               <br><br>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
    
                <label class="vhead">Enter Your Destination</label>
                
               <select class="form-control" id="d_address" name="d_address">
                
                   <option class="form-control-2" value="kolkata">Kolkata</option>   
                   <option class="form-control-2" value="delhi">Delhi</option>
                   <option class="form-control-2" value="bhubaneswar">Bhubaneswar</option>
                   <option class="form-control-2" value="jamshedpur">Jamshedpur</option>   
                   <option class="form-control-2" value="durgapur">Durgapur</option>
                   
                   
               </select>

                </div>
                </div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
        
        <!--Query Details-->
        
       
        
       
        
        
        
        
        
        
        
        
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


<style>
    .vhead{
    font-size: 20px;
    font-style: italic;
    font-weight: bold;
    color: #fff;
    font-family:'Droid Serif' ;
}
    
    </style>
    