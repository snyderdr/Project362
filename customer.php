<?php

echo "Custormer Form";

?>

<form action="index.php" method="post" >

Customer First Name: <input type="text" name="Fname" /><br />
Customer Last Name: <input type="text" name="Lname" /><br />
Customer Phone Number: <input type="text" name="PhoneNum" /><br />
Customer Addresss: <input type="text" name="Address" /><br/>
City: <input type="text" name="City" /><br />
State: <input type="text" name="State" /><br />
Zip: <input type="text" name="Zip" /><br />

<input type="button" name="Submit" value="Submit Customer Information" />

</form>

$servername="localhost";
$username="root";
$password="toor";
$dbname="Customer";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
	die("Conncetion Fails" . $conn->connect_error);



}
$sql="INSERT INTO `Customer` VALUES ($Fname,$Lname,$PhoneNum,$Address,$City,$State,$zip)";
$conn->query($sql);

$conn->close();
