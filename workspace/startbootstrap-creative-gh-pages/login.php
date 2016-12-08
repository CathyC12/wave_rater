<?php
       $host = "127.0.0.1";
       $user = "cathy_c";                     //Your Cloud 9 username
       $pass = "";                              //Remember, there is NO password by default!
       $db = "waverater";                             //Your database name you want to connect to
       $port = 3306; 
       
   
   session_start();
   $error ='';
   
  
       $myConnection= mysqli_connect($host,$user,$pass) or die ("failed to connect to database");
       
       mysqli_select_db($myConnection, "waverater") or die ("no database");
       
       if ($_POST['loginSub'] == "Submit")
       {
           $uname = $_POST['uname'];
           $upass = $_POST['upass'];
           //$uemail = $_POST['uemail'];
       }
              //echo $uname;
              //echo $upass;
              //echo $uemail;
              
         
         $query = "SELECT * FROM register WHERE  uname='$uname' && upass='$upass'";
         $result = mysqli_query($myConnection, $query);
         while ($row = mysqli_fetch_row($result)) {
             $username = $row[0]; // this feteches the username row and assigns it a new variable (usename) 

         }
         
         if($username == $uname){ //this checks to see if the username entered os the same as the one in the datbase if so run action
             echo "this works";
            $_Session['login_user'] = $uname; //initializing session
            
            
            
            header('Location: welcome.php');
            
         }
             
         
         
         else{
             echo "You are not registered!";
             header('Location: index.html');
             //echo $uname;
              //echo $upass;
              //echo $uemail;
         }
         
         mysqli_close($myConnection); //closing connection

?>
