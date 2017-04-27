<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

echo ("password = );
echo ($password);

<br />

echo ("password2 = );
echo ($password2);


if ($password != $password2) {
	echo ("Passwords don't match");	

}
else {
	echo ("Passwords matched");
}
