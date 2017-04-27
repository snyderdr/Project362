<html>

 


<?php

	

        if (!isset($_POST['submit'])) 
        {
        //form
        require ("ordersform.php");
}

else
{
?>


<h3> Form submitted</h3>

<?php


$customerFname =  $_POST['CustomerFname'];
$customerLname =  $_POST['CustomerLname'];
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

echo($customerFname);
echo($customerLname);
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

