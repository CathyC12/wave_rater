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
       
       if ($_POST['FormSubmission'] == "Submit")
       {
           $uname = $_POST['uname'];
           $upass = $_POST['upass'];
           $uemail = $_POST['uemail'];
       }
               
              
         
         //sql query to fetch information of registered users
         //Dean look at this and see if it is a database error plzzz, thanks, you suck :D 
        $query = "SELECT * FROM users WHERE  username='$username' && password='$password'";
         $result = mysqli_query($myConnection, $query);
         while ($row = mysqli_fetch_row($result)) {
            $_Session['login_user'] = $uname; //initializing session
            header ("location : welcome.php");
         }
         
         mysql_close($myConnection); //closing connection
     
   
   /*$uname = $_POST ['uname'];
   $upass = $_POST ['upass'];
   
   if ($uname && $upass) 
   {

     $myConnection= mysqli_connect($host,$user,$pass) or die ("failed to connect to database");
       
      mysqli_select_db($myConnection, "waverater") or die ("no database");

      $querysql = mysql_query ("SELECT * FROM register WHERE uname = '$uname'");
      $numrows = msql_num_rows ($querysql);

      if($numrows !=0)
      {

         while($row = mysql_fetch_assoc($querysql))
         {

            $dbuname = $row ["uname"];
            $dbupass = $row ["upass"];

         }

      if ($uname == $dbuname && $upass = $dbupass)
      {
          header("location: welcome.php");
      }
      else{
         $error = "Your username or password is invalid";
      }

      }

   }*/
   
?>
