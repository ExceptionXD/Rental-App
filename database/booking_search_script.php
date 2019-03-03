<?php
session_start();
   if (!isset($_SESSION['email'])) {
             
               header("location:index.php"); 
                    }
                    
                    $email_cv_session=$_SESSION['email'];
?>

<?php

//connection

 require 'database_con.php';
 
 //getting table data
  
 $c_address = filter_input(INPUT_POST, 'c_address', FILTER_SANITIZE_SPECIAL_CHARS);
 $d_address = filter_input(INPUT_POST, 'd_address', FILTER_SANITIZE_SPECIAL_CHARS);
 $vehicletype = filter_input(INPUT_POST, 'vehicletype', FILTER_SANITIZE_SPECIAL_CHARS);
 
 
 $select_query="SELECT * from signup_renter where c_address='$c_address' and d_address='$d_address' and vehicletype='$vehicletype'";
          $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
 //  header('refresh:0;url=../booking.php');

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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/agency.min.css" rel="stylesheet">

  </head>
  
<body id="page-top">

 <div class="container">
            
            <div class="row">
                
                <h5>Available Renters</h5>
                
     <table class="table table-striped table-bordered  ">
    <thead>
      <tr>
          
        <th>First Name</th>
        <th>Phone No</th>
        <th>Current Address</th>
        <th>Destination Address</th>
        <th>Drop Address</th>
        
        <th>Email</th>
      </tr>
    </thead>
    
     <tbody>
        <?php
                         //  require 'database/booking_search_script.php';
                           
        while ($row= mysqli_fetch_array($select_query_result)){
        ?>
        
      <tr>
        <td><?php echo $row[1]?></td>
        <td><?php echo $row[2]?></td>
        <td><?php echo $row[3]?></td>
        <td><?php echo $row[4]?></td>     
        <td><?php 
        
        if($row[3]=="Kolkata"&& $row[4]=='delhi'){?>
                 <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="agra">Agra</option>   
                   <option class="form-control-2" value="kanpur">Kanpur</option>
                   <option class="form-control-2" value="prayagraj">Prayagraj</option>
                   <option class="form-control-2" value="dhanbad">Dhanbad</option>   
                   <option class="form-control-2" value="durgapur">Durgapur</option>
                   <option class="form-control-2" value="kolkata">Kolkata</option>
                   
               </select>

                </div>
     <?php   } 
     
     if($row[3]=="Kolkata"&& $row[4]=='bhubaneswar'){?>
      
                <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="mednipur">Mednipur</option>   
                   <option class="form-control-2" value="kasba">Kasba</option>
                   <option class="form-control-2" value="belda">Belda</option>
                   <option class="form-control-2" value="jaleswar">Jaleswar</option>   
                   <option class="form-control-2" value="baleswar">Baleswar</option>
                   <option class="form-control-2" value="bhubaneswar">Bhubaneswar</option>
                   
               </select>

                <?php   } 
                
                if($row[3]=="Kolkata"&& $row[4]=='jamshedpur'){?>
      
                <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="kolaghat">Kolaghat</option>   
                   <option class="form-control-2" value="debra">Debra</option>
                   <option class="form-control-2" value="kharagpur">Kharagpur</option>
                   <option class="form-control-2" value="dhalbhumgarh">Dhalbhumgarh</option>   
                   <option class="form-control-2" value="jamshedpur">jamshedpur</option>
                   
               </select>

                <?php   } 
                
                 if($row[3]=="Kolkata"&& $row[4]=='durgapur'){?>
      
                <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="dhanikhali">Dhanikhali</option>   
                   <option class="form-control-2" value="gurap">Gurap</option>
                   <option class="form-control-2" value="bardhaman">Bardhaman</option>
                   <option class="form-control-2" value="panagarh">Panagarh</option>   
                   <option class="form-control-2" value="durgapur">Durgapur</option>
                   
               </select>

                <?php   } 
                
                  if($row[3]=="delhi"&& $row[4]=='bhubaneswar'){?>
      
                <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="dhanikhali">Dhanikhali</option>   
                   <option class="form-control-2" value="gurap">Gurap</option>
                   <option class="form-control-2" value="bardhaman">Bardhaman</option>
                   <option class="form-control-2" value="panagarh">Panagarh</option>   
                   <option class="form-control-2" value="Bhubaneswar">Bhubaneswar</option>
                   
               </select>

                <?php   } 
                
                if($row[3]=="delhi"&& $row[4]=='jamshedpur'){?>
      
                <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="dhanikhali">Dhanikhali</option>   
                   <option class="form-control-2" value="gurap">Gurap</option>
                   <option class="form-control-2" value="bardhaman">Bardhaman</option>
                   <option class="form-control-2" value="panagarh">Panagarh</option>   
                   <option class="form-control-2" value="jamshedpur">jamshedpur</option>
                   
               </select>

                <?php   } 
                
                 if($row[3]=="delhi"&& $row[4]=='durgapur'){?>
      
                <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="dhanikhali">Dhanikhali</option>   
                   <option class="form-control-2" value="gurap">Gurap</option>
                   <option class="form-control-2" value="bardhaman">Bardhaman</option>
                   <option class="form-control-2" value="panagarh">Panagarh</option>   
                   <option class="form-control-2" value="durgapur">Durgapur</option>
                   
               </select>

                <?php   } 
                
                 if($row[3]=="bhubaneswar"&& $row[4]=='jamshedpur'){?>
      
                <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="dhanikhali">Dhanikhali</option>   
                   <option class="form-control-2" value="gurap">Gurap</option>
                   <option class="form-control-2" value="bardhaman">Bardhaman</option>
                   <option class="form-control-2" value="panagarh">Panagarh</option>   
                   <option class="form-control-2" value="jamshedpur">Jamshedpur</option>
                   
               </select>

                <?php   } 
                if($row[3]=="bhubaneswar"&& $row[4]=='durgapur'){?>
      
                <div class="form-group">
    
                <label class="vhead">Enter Your Location</label>
                
               <select class="form-control" id="f_address" name="f_address">
                
                   <option class="form-control-2" value="dhanikhali">Dhanikhali</option>   
                   <option class="form-control-2" value="gurap">Gurap</option>
                   <option class="form-control-2" value="bardhaman">Bardhaman</option>
                   <option class="form-control-2" value="panagarh">Panagarh</option>   
                   <option class="form-control-2" value="durgapur">Durgapur</option>
                   
               </select>

                <?php   } ?>
                
                </div>
                
                
                </td>
        
        
        
        <td><form action="../driver.php" method="post"> 
                <select class="form-control" id="book_data" name="book_data">
                
                   <option class="form-control-2" value="<?php echo $row[8]?> "><?php echo $row[8]?> </option>   
  
                   
                </select><br><button type="submit" class="col-lg-12 btn-success btn">View Details</button></form></td>
      </tr>
      
      <?php
        }
        ?>
    </tbody>
  </table>
    
    
                
            </div>
            
        </div>
        
  
</body>
</html>
  
  
  


   
   
   