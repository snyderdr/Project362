<?php
    require ('mysql.inc.php');    
?>

<html>
<?php  

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
/*
echo ($Fname . "<br />");
echo ($Lname . "<br />");
echo ($email . "<br />");
echo ($username . "<br />");
echo ($password . "<br />");
echo ($password2 . "<br />");
*/
    if ($password != $password2) {
        echo ("Passwords don't match");	
 	require('register.php');
    }
?>

<?php

$sql="INSERT INTO Employees (FirstName, Lname, username, password, email) VALUES ('$Fname', '$Lname', '$username', '$password', '$email')";

$conn->query($sql);

echo ("Account Created");

?>
</body>
</html>

