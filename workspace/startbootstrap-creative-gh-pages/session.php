<?php

//establising connection with the server 
$myConnection= mysqli_connect($host,$user,$pass);

//selecting database
mysqli_select_db($myConnection, "waverater");
session_start(); //starting session

//storing session 
$user_check=$_SESSION['login_user'];

//SQL Query to fetch complete information of user
$ses_query = mysqli_query ("SELECT * FROM register WHERE uname = '$uname'");
$rows = mysqli_fetch_assoc($ses_query);
$login_session = $rows['uname'];
if(!isset($login_session)){
mysqli_close($myConnection); // Closing Connection
header('Location: welcome.php'); // Redirecting To Home Page

}
?>