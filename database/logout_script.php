<?php   
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();
session_unset();
session_destroy();
header("location:../index.php"); 


?>

