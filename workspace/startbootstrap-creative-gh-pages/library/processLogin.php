<?php
/*
    Firstly we include the config file that has the information to allow us to make a connection_aborted
		to the database.
*/

include 'config.php';

/*
	From the javascript function inside the index.html file we sent an ajax call that passed some information
	via a POST request to this PHP page. We can access the information by accessing the super global array $_POST[]

	This allows us to create some variables with the information that the user sent.
*/
$user = $_POST['username'];
$pass = $_POST['password'];

/*
	The next snippet of code is using the variables defined within the config.php file and making a secure connection
	using mysqli to our newly created database. We use the @ symbol to suppress any errors when trying to make a
	connection. If an error occurs we print out the details below and the thread of executing is stopped.

*/
@ $db = new mysqli("$hostname", "$username", "$password", "$dbname");
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}

/*
	Once we have a connection established to the database, we simply mconstruct suitable queries and run them against the
	created connection. Remember as discussed today you should test these queries in Workbench to determine if
	you are getting the required results prior to trying to figure what is happening with PHP.
*/
$q1 = "SELECT idusers FROM testDB.users where username='$user' && password='$pass'";
$result = $db->query($q1);

if(!mysqli_fetch_row($result)){
  echo "Problems";
}
else{
  echo "Success";
}
?>