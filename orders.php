<?php
    require ('mysql.inc.php');
    
?>
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




<?php

$customerFname =  $_POST['CustomerFname'];
$customerLname =  $_POST['CustomerLname'];
$VIN =  $_POST['VIN'];
$milage =  $_POST['Milage'];
$Engine =  $_POST['Engine'];
$make =  $_POST['Make'];
$model =  $_POST['Model'];
$year = $_POST['Year'];
$color =  $_POST['Color'];
$employeeFname =  $_POST['EmployeeFname'];
$employeeLname =  $_POST['EmployeeLname'];
$partQuantity =  $_POST['partQuantity'];
$partType =  $_POST['Part'];
$price =  $_POST['Price'];
$laborHours =  $_POST['LaborHours'];
$laborCost =  $_POST['LaborCost'];
$date =  $_POST['Date'];
$Desc =  $_POST['Desc'];

echo($customerFname);
echo($customerLname);

?>

<?php

$sql="INSERT INTO Orders (CustomerFname, CustomerLname, VIN, Milage, Make, Model, Year, Engine, Color, EmployeeFname, EmployeeLname, partQuantity, Part, Price, LaborHours, LaborCost, Date, Description)  VALUES ('$customerFname', '$customerLname', '$VIN', '$milage', '$make', '$model', '$year', '$Engine', '$color', '$employeeFname', '$employeeLname', '$partQuantity', '$partType', '$price', '$laborHours', '$laborCost', '$date', '$Desc')";

$conn->query($sql);

}
?>
</body>
</html>

