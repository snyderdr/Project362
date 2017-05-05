
<?php

require("config.inc.php");
require(MYSQL);

//require('orders.php');
//require('register.php');

if ( $_SERVER['REQUEST_METHOD'] != 'POST' )
{
	// goto login

require('login.php');
}
else {
	//acually login
$username = $_POST['uname'];
$password = $_POST['psw'];


//echo($username . "<br />");
//echo($password . "<br /><br />");

$query = "SELECT FirstName, Lname FROM Employees where username='$username' and password='$password'" ;
$r = mysqli_query($conn, $query);

while(	$row = mysqli_fetch_array($r, MYSQLI_NUM)	)
{
	
  	//echo ($row[0] . "<br />");
	//echo ($row[1] . "<br />");
	//echo ($row[2] . "<br />");
	//echo ($row[3] . "<br />");
	//echo ($row[4] . "<br />");
	//echo ($row[5] . "<br /><br />");
	
	$EmployeeName = $row[0] . " " . $row[1];
        session_start();
        // Set session variables
        $_SESSION['EmployeeName'] = $EmployeeName;
	require('employee.php');
}
if (mysqli_num_rows($r))
{
	//echo ("Username & Password match<br /><br />");
	//echo ("logged in<br /><br />");
	//echo ($EmployeeName . "<br />");
	
        echo $_SESSION['EmployeeName'];
}
else 
{
	//$_POST['username'] = "Username & password don't match";
	require('login.php');
}








	
//echo($username . "<br />");

//echo($password);

	
}

//include("html/header");
?>





<?php

include("html/footer.html");

?>

