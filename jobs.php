<html><body>
<h1>Orders page</h1>

<form action="" name="order" id="order" method= "post">
<table>
<tr>
<?php	/*if order ID already exists then use select statements to display the values within if not then display the form so the user can fill it.*/?>

	<td>VIN <input type="text" name="VIN" id="VIN" value="<?php echo isset($_POST['VIN']) ? $_POST['VIN'] : '' ?>" size="6" max="25" /></td><br />
        <td>Make <input type="text" name="make" id="make" value="<?php echo isset($_POST['make']) ? $_POST['make'] : '' ?>" size="6" max="25" /></td><br />
        <td>Model <input type="text" name="model" id="model" value="<?php echo isset($_POST['model']) ? $_POST['model'] : '' ?>" size="6" max="25" /></td><br />
	<td>Year <input type="text" name="year" id="year" value ="<?php echo isset($_POST['year']) ? $_POST['year'] : '' ?>" size="6" max="6" /></td><br />
	<td>Engine <input type="text" name="Engine" id="Engine" value="<?php echo isset($_POST['Engine']) ? $_POST['Engine'] : '' ?>" size="6" max="25" /></td><br />
	<td>Customer First Name <input type="text" name="customerFname" id="customerFname" value="<?php echo isset($_POST['customerFname']) ? $_POST['customerFname'] : '' ?>" size="6" max="25" /></td><br />
	<td>Customer Last Name <input type="text" name="customerLname" id="customerLname" value="<?php echo isset($_POST['customerLname']) ? $_POST['customerLname'] : '' ?>" size="6" max="25" /></td><br />
	<td>Description<input type="text" name="Desc" id="Desc" value="<?php echo isset($_POST['Desc']) ? $_POST['Desc'] : '' ?>" size="6" max="25" /></td><br />
	<td>EmployeeDesignation <input type="text" name="employeeDes" id="employeeDes" value="<?php echo isset($_POST['employeeDes']) ? $_POST['employeeDes'] : '' ?>" size="6" max="25" /></td><br />

</tr>
</table>
	<input type="submit" name="submit" value="submit orders">
</form>

<?php
        if (!isset($_POST['submit'])) 
        {
        //form
        ?>

<?php
}

else
{
?>


<h3> Form submitted</h3>
<p>course grade: <b>

<?php

$customerFname =  $_POST['customerFname'];
$customerLname =  $_POST['customerLname'];
$VIN =  $_POST['VIN'];
$Engine =  $_POST['Engine'];
$make =  $_POST['make'];
$model =  $_POST['model'];
$year = $_POST['year'];
$Desc =  $_POST['Desc'];
$designation = $_POST['employeeDes'];

?>

<?php

$servername="localhost";
$username="root";
$password="toor";
$dbname="project362";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO `Jobs`(CustomerFname, CustomerLname, VIN, Engine, Make, Model, Year, Description, EmployeeDesignation) VALUES ('$customerFname', '$customerLname', '$VIN', '$Engine', '$make', '$model', $year, '$Desc', '$designation')";
$conn->query($sql);
$conn->close();
}
?> </b>

</p>

</body>

</html>

