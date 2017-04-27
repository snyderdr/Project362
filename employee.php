<?php
echo $_Fname;
echo $_Lname;


?>
<html>
<body>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Jobs</a></li>
    <li><a href="#tabs-2">Vehicles</a></li>
    <li><a href="#tabs-3">Customer</a></li>
  </ul>
  <div id="tabs-1">
   <h3>Empolyee Jobs</h3>
  <input type="button" name="GetJobs" value="$_GetJobs"/><br />
  <input type="button" name="SeeJobs" value="$_SeeJobs" /><br/>
  </div>
  <div id="tabs-2">
     <h3>Customer Vehicles</h3>
    VIN number:<br>
  <input type="text" name="VIN"><br/>
 <?php
echo "$_PastWork";

?>
  </div>
  <div id="tabs-3">
  <h3>Customer Information</h3>
      Customer Name:<br>
  <input type="text" name="CustomerName"><br/>
 <?php
echo "$_Vehicles";

?>   
    
  </div>
</div>
$servername="localhost";
$username="root";
$password="toor";
$dbname="Employee";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
	die("Conncetion Fails" . $conn->connect_error);



}
$sql="INSERT INTO `Employee` VALUES ($_Fname,$_Lname,$_GetJobs,$_SeeJobs)";
$conn->query($sql);

$conn->close();




</body>
</html>
