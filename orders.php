<html><body>
<h1>Orders page</h1>

<form action="" name="order" id="order" method= "post">
<table>
<tr>
<?php	/*if order ID already exists then use select statements to display the values within if not then display the form so the user can fill it.*/?>

	<td>Customer First Name <input type="text" name="customerFname" id="customerFname" value="<?php echo isset($_POST['customerFname']) ? $_POST['customerFname'] : '' ?>" size="6" min="1" max="25" /></td><br />
	<td>Customer Last Name <input type="text" name="customerLname" id="customerLname" value="<?php echo isset($_POST['customerLname']) ? $_POST['customerLname'] : '' ?>" size="6" min="1" max="25" /></td><br />
	<td>VIN <input type="text" name="VIN" id="VIN" value="<?php echo isset($_POST['VIN']) ? $_POST['VIN'] : '' ?>" size="6" min="1" max="25" /></td><br />
	<td>Milage <input type="text" name="milage" id="milage" value="<?php echo isset($_POST['milage']) ? $_POST['milage'] : '' ?>" size="6" min="1" max="25" /></td><br />
        <td>Make <input type="text" name="make" id="make" value="<?php echo isset($_POST['make']) ? $_POST['make'] : '' ?>" size="6" min="1" max="25" /></td><br />
        <td>Model <input type="text" name="model" id="model" value="<?php echo isset($_POST['model']) ? $_POST['model'] : '' ?>" size="6" min="1" max="25" /></td><br />
	<td>Year <input type="text" name="year" id="year" value ="<?php echo isset($_POST['year']) ? $_POST['year'] : '' ?>" size="6" min="1" max="6" /></td><br />
        <td>Engine <input type="text" name="Engine" id="Engine" value="<?php echo isset($_POST['Engine']) ? $_POST['Engine'] : '' ?>" size="6" min="1" max="25" /></td><br />
	<td>Color <input type="text" name="Color" id="Color" value="<?php echo isset($_POST['Color']) ? $_POST['Color'] : '' ?>" size="6" min="1" max="25" /></td><br />
        <td>EmployeeFname <input type="text" name="employeeFname" id="employeeFname" value="<?php echo isset($_POST['employeeFname']) ? $_POST['employeeFname'] : '' ?>" size="6" min="1" max="25" /></td><br />
        <td>EmployeeLname<input type="text" name="employeeLname" id="employeeLname" value="<?php echo isset($_POST['employeeLname']) ? $_POST['employeeLname'] : '' ?>" size="6" min="1" max="25" /></td><br />
        <td>Part Quantity<input type="text" name="partQuantity" id="partQuantity" value="<?php echo isset($_POST['partQuantity']) ? $_POST['partQuantity'] : '' ?>" size="6" min="1" max="25" /></td><br />
	<td>Part type<input type="text" name="partType" id="partType" value="<?php echo isset($_POST['partType']) ? $_POST['partType'] : '' ?>" size="6" min="1" max="25" /></td><br />
        <td>Price<input type="text" name="price" id="price" value="<?php echo isset($_POST['price']) ? $_POST['price'] : '' ?>" size="6" min="1" max="25" /></td><br />
        <td>LaborHours <input type="text" name="laborHours" id="laborHours" value="<?php echo isset($_POST['laborHours']) ? $_POST['laborHours'] : '' ?>" size="6" min="1" max="25" /></td><br />
        <td>LaborCost<input type="text" name="laborCost" id="laborCost" value="<?php echo isset($_POST['laborCost']) ? $_POST['laborCost'] : '' ?>" size="6" min="1" max="25" /></td><br />
	<td>Date<input type="text" name="date" id="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : '' ?>" size="6" min="1" max="25" /></td><br />
	<td>Description<input type="text" name="Desc" id="Desc" value="<?php echo isset($_POST['Desc']) ? $_POST['Desc'] : '' ?>" size="10" max="5000" /></td><br />
</tr>
</table>
	<input type="submit" name="submit" value="submit orders">

</form>

<?php
        if (!isset($_POST['submit'])) 
        {
        //form
        
}

else
{
?>

<h3> Form submitted</h3>

<?php
$customerFname =  $_POST['customerFname'];
$customerLname =  $_POST['customerLname'];
$VIN =  $_POST['VIN'];
$milage =  $_POST['milage'];
$Engine =  $_POST['Engine'];
$make =  $_POST['make'];
$model =  $_POST['model'];
$year = $_POST['year'];
$color =  $_POST['color'];
$employeeFname =  $_POST['employeeFname'];
$employeeLname =  $_POST['employeeLname'];
$partQuantity =  $_POST['partQuantity'];
$partType =  $_POST['partType'];
$price =  $_POST['price'];
$laborHours =  $_POST['laborHours'];
$laborCost =  $_POST['laborCost'];
$date =  $_POST['date'];
$Desc =  $_POST['Desc'];
}
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

$sql="INSERT INTO `Orders` (CustomerFname, CustomerLname, VIN, Milage, Engine, Make, Model, Year, Color, EmployeeFname, EmployeeLname, quantityOfPart, Part, Price, LaborHours, LaborCost, Date, Description)  VALUES ('$customerFname', '$customerLname', '$VIN', $milage, '$Engine', '$make', '$model', $year, '$color', '$employeeFname', '$employeeLname', $partQuantity, '$partType', $price, $laborHours, $laborCost, $date, '$Desc')";
$conn->query($sql);

$conn->close();

?>
</body>
</html>

