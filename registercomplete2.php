<html>
<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

echo ("Fname = " . $Fname . "<br />");
echo ("Lname = " . $Lname . "<br />");
echo ("email = " . $email . "<br />");
echo ("username = " . $username . "<br />");
echo ("password = " . $password . "<br />");
echo ("password2 = " . $password2 . "<br />");




if ($password != $password2) {
	echo ("Passwords don't match");	
 	require('register.php');

}
else {
	echo ("Passwords matched");


//$hashedPassword = hash('sha256', $password);

//echo($hashedPassword)


//$sql="INSERT INTO `Employees` (`Fname`, `Lname`, `username`, `password`, `email`) VALUES ('Patrick', 'Kan', 'pkan', 'hawks', 'hawks@pk.com')";

$sql="INSERT INTO `Employees` (Fname, Lname, username, password, email)  VALUES ('$Fname', '$Lname', '$username', '$password', '$email')";
$conn->query($sql);
}
?>
</body>
</html>


