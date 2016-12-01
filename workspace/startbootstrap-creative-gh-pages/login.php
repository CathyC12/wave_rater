<?php
   session_start();

   $uname = $_POST ['uname'];
   $upass = $_POST ['upass'];
   
   if ($uname && $upass) {

     $myConnection= mysqli_connect($host,$user,$pass) or die ("failed to connect to database");
       
       mysqli_select_db($myConnection, "waverater") or die ("no database");
   }
   
?>
