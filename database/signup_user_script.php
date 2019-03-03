<?php

require 'database_con.php';
 
  $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
  $phoneno = filter_input(INPUT_POST, 'phoneno', FILTER_SANITIZE_SPECIAL_CHARS);
       $panno = filter_input(INPUT_POST, 'panno', FILTER_SANITIZE_SPECIAL_CHARS);
         $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
           $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
  
  
  $query="insert into signup_user(fullname,phoneno,panno,email,password) values('$fullname','$phoneno','$panno','$email','$password')";
  $submit = mysqli_query($con, $query) or die(mysqli_error($con));
 
 

  

  
   header('refresh:0;url=../index.php');
?>