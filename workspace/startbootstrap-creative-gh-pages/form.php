 <?php
       $host = "127.0.0.1";
       $user = "cathy_c";                     //Your Cloud 9 username
       $pass = "";                              //Remember, there is NO password by default!
       $db = "waverater";                             //Your database name you want to connect to
       $port = 3306; 
       
       
       $myConnection= mysqli_connect($host,$user,$pass) or die ("failed to connect to database");
       
       mysqli_select_db($myConnection, "waverater") or die ("no database");
       
       if ($_POST['FormSubmission'] == "Submit")
       {
           $uname = $_POST['uname'];
           $upass = $_POST['upass'];
           $uemail = $_POST['uemail'];
       }
               
              
   
   $queryUser = mysqli_query($myConnection,"SELECT uname FROM register WHERE uname='".$uname."'");
               if (mysqli_num_rows($queryUser) !=0){
                    echo "Username already exists";
                    $myfile = fopen("index.html", "r") or die("Unable to open file!");
                    echo fread($myfile,filesize("index.html"));
                    fclose($myfile);
              }
              
              
              
              
   $query = "INSERT into register (`uname`,`upass`,`uemail`) values ('$uname','$upass','$uemail')";
           $result = mysqli_query($myConnection, $query);
            
   header('Location: index.html');
   
   
   
   
?>