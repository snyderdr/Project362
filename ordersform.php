<!DOCTYPE html>

<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Create Orders</title>
	<link rel="stylesheet" href="css/CreateOrders-form.css" media="screen">
	
<meta name="robots" content="noindex,follow" />
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/login-form.js"></script>
<div class="CreateOrders-form">
	<h1>Create Orders</h1>

<form action="" name="order" id="order" method= "post">


	<input type="date" name="Date" id="Date" placeholder="DATE"><br /><br />
	
	<input type="text" name="CustomerFname" id="CustomerFname" placeholder="Customer First Name">
	<input type="text" name="CustomerLname" id="CustomerLname" placeholder="Customer Last Name"><br /><br />
	
	<h2>VEHICLE INFORMATION</h2>
	<input type="int" name="Year" id="Year" placeholder="YEAR">
    <input type="text" name="Make" id="Make" placeholder="MAKE">
    <input type="text" name="Model" id="Model" placeholder="MODEL">
	<input type="text" name="Color" id="Color" placeholder="COLOR"><br />
   
	<input type="text" name="Engine" id="Engine" placeholder="ENGINE">
	<input type="text" name="VIN" id="VIN" placeholder="VIN">
	<input type="text" name="Milage" id="Milage" placeholder="MILAGE"> <br />
	
	<h3>PARTS</h3>
    <input type="text" name="quantityOfPart" id="partQuantity" placeholder="QUANTITY">
	<input type="text" name="Part" id="partType" placeholder="PART">
    <input type="text" name="Price" id="price" placeholder="PRICE"><br />
	
	<h3>LABOR</h3>
    <input type="text" name="LaborHours" id="LaborHours" placeholder="LABOR HOURS">
    <input type="text" name="LaborCost" id="LaborCost" placeholder="LABOR COST"><br /><br />
	
	<h3>DESCRIPTION</h3>
	<input type="text" name="Desc" id="Desc" placeholder="RECOMENDATIONS"><br />


	<input type="text" name="EmployeeFname" id="EmployeeFname" placeholder="MECHANIC FIRST NAME">
    <input type="text" name="EmployeeLname" id="EmployeeLname" placeholder="MECHANIC LAST NAME"><br />
	
	<input type="submit" name="submit" value="SUBMIT ORDERS">

</form>
</div>

<div class="footer"></div>

</body>
</html>

