<?php

//connection

 require 'database_con.php';
 
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

  
  



  
  
  
  
  


   
   
   