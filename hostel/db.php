<?php
    // Create Database Connection
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";  // Empty password if using XAMPP's default settings
   $dbname = "housekeeping";
   
   // Attempt to connect without suppressing errors
   $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   // Check Database Connection
   if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
   }
?>
