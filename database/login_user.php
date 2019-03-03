<?php

//connection

 require 'database_con.php';
 
 //getting table data
  
 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
 $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
 
 

 //getting data from database
  
 
  $result = "SELECT * from signup_user WHERE email='$email'";
 
  $select_query_result=mysqli_query($con,$result)or die(mysqli_error($con));
 
  $row= mysqli_fetch_array($select_query_result);
  

   $email_data=$row[4];
   $password_data= $row[5];
   $name_data=$row[1];

  
  
 
  if($email==$email_data && $password==$password_data){
  // echo "welcome. ".$name_data;
     
       session_start();
  // Store Session Data
   $_SESSION['email']= $email_data; 
 
   
  
   
   if ($name_data=="admin"&&$email_data=="admin@admin"){
       $_SESSION['email_session_data']="admin@admin";   
       header('Location: ../../admin.php '); //hyperlink code php
   }
   else{
      
  header('Location: ../booking.php');

   }

 }
else{
    echo "<h1>Sorry, your credentials are not valid, Please try again.</h1>";
    header('refresh:20;url=../../index.php');
       
    
}


?>

  
  



  
  
  
  
  


   
   
   