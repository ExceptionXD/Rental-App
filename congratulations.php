<?php
 require "database/driver_script.php" ;
?>
<!DOCTYPE html>
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
          <a href="index.php" class="btn-primary btn" role="button" name="logout">Logout</a> 
          </ul>
        </div>
      </div>
    </nav>

    
    <!-- Congratulations-->
    <section id="congrats">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br><br>
                    <p><strong>Congratulations !</strong></p><br>
                    <p>You Have Succesfully Rented The Vehicle . Hope Your Ride is Smooth.</p><br>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                <a href="#" class="btn-success btn" role="button" name="Start Trip" onclick="myTrip()">Start Your Trip</a> 

                </div>
                <div class="col-md-6">
                    <hr class="hr_line">
                </div>
                <div class="col-md-3">
                <a href="thanku.php" class="btn-danger btn" role="button" name="End Trip" onclick="myETrip()">End Your Trip</a> 
                </div>
            </div>
        </div>
    </section>
    
    <script>
    function myTrip(){
        alert("Your Trip has Started") ;
    }
        
    function myETrip(){
        alert("Your Trip has Ended") ;
    } 
    </script>
</body>

</html>