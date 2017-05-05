<!DOCTYPE html>
<html lang="en-US"><head>
        <meta http-equiv="X-UA-Compatible" content="IE=10.000">
        <meta name="viewport" content="width=1366px; initial-scale=1.0; maximum-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="cache-control" content="no-cache,no-store">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="-1">
        <meta name="mswebdialog-title" content="Registration Page">

        <title>Registration</title>
        <script type="text/javascript">

</script>

<script type="text/javascript">

function InputUtil(errTextElementID, errDisplayElementID) {

    if (!errTextElementID)  errTextElementID = 'errorText'; 
    if (!errDisplayElementID)  errDisplayElementID = 'error'; 

    this.hasFocus = false;
    this.errLabel = document.getElementById(errTextElementID);
    this.errDisplay = document.getElementById(errDisplayElementID);
};
InputUtil.prototype.canDisplayError = function () {
    return this.errLabel && this.errDisplay;
}
InputUtil.prototype.checkError = function () {
    if (!this.canDisplayError){
        throw new Error ('Error element not present');
    }
    if (this.errLabel && this.errLabel.innerHTML) {
        this.errDisplay.style.display = '';        
        var cause = this.errLabel.getAttribute('for');
        if (cause) {
            var causeNode = document.getElementById(cause);
            if (causeNode && causeNode.value) {
                causeNode.focus();
                this.hasFocus = true;
            }
        }
    }
    else {
        this.errDisplay.style.display = 'none';
    }
};
InputUtil.prototype.setInitialFocus = function (input) {
    if (this.hasFocus) return;
    var node = document.getElementById(input);
    if (node) {
        if ((/^\s*$/).test(node.value)) {
            node.focus();
            this.hasFocus = true;
        }
    }
};
InputUtil.prototype.setError = function (input, errorMsg) {
    if (!this.canDisplayError) {
        throw new Error('Error element not present');
    }
    input.focus();

    if (errorMsg) {
        this.errLabel.innerHTML = errorMsg;
    }
    this.errLabel.setAttribute('for', input.id);
    this.errDisplay.style.display = '';
};
InputUtil.makePlaceholder = function (input) {
    var ua = navigator.userAgent;

    if (ua != null && 
        (ua.match(/MSIE 9.0/) != null || 
         ua.match(/MSIE 8.0/) != null ||
         ua.match(/MSIE 7.0/) != null)) {
        var node = document.getElementById(input);
        if (node) {
            var placeholder = node.getAttribute("placeholder");
            if (placeholder != null && placeholder != '') {
                var label = document.createElement('input');
                label.type = "text";
                label.value = placeholder;
                label.readOnly = true;
                label.style.position = 'absolute';
                label.style.borderColor = 'transparent';
                label.className = node.className + ' hint';
                label.tabIndex = -1;
                label.onfocus = function () { this.nextSibling.focus(); };

                node.style.position = 'relative';
                node.parentNode.style.position = 'relative';
                node.parentNode.insertBefore(label, node);
                node.onkeyup = function () { InputUtil.showHint(this); };
                node.onblur = function () { InputUtil.showHint(this); };
                node.style.background = 'transparent';

                node.setAttribute("placeholder", "");
                InputUtil.showHint(node);
            }
        }
    }
};
InputUtil.focus = function (inputField) {
    var node = document.getElementById(inputField);
    if (node) node.focus();
};
InputUtil.hasClass = function(node, clsName) {
    return node.className.match(new RegExp('(\\s|^)' + clsName + '(\\s|$)'));
};
InputUtil.addClass = function(node, clsName) {
    if (!this.hasClass(node, clsName)) node.className += " " + clsName;
};
InputUtil.removeClass = function(node, clsName) {
    if (this.hasClass(node, clsName)) {
        var reg = new RegExp('(\\s|^)' + clsName + '(\\s|$)');
        node.className = node.className.replace(reg, ' ');
    }
};
InputUtil.showHint = function (node, gotFocus) {
    if (node.value && node.value != '') {
        node.previousSibling.style.display = 'none';
    }
    else {
        node.previousSibling.style.display = '';
    }
};
//]]>
</script>


        
        <link rel="stylesheet" type="text/css" href="Sign%20In_files/style.css"><style>.illustrationClass {background-image:url(/adfs/portal/illustration/illustration.png?id=183128A3C941EDE3D9199FA37D6AA90E0A7DFE101B37D10B4FEDA0CF35E11AFD);}</style>

    </head>







<div id="loggedinas">
<?php
session_start();
if (isset($_SESSION['EmployeeName']))
    echo "Logged in as " . $_SESSION['EmployeeName'];
?>
</div>
<?php




?>
<html>
<body onload="Date()" dir="ltr" class="body">

<div id="noScript" style="position: static; width: 100%; height: 100%; z-index: 100; display: none;">
        <h1>JavaScript required</h1>
        <p>JavaScript is required. This web browser does not support JavaScript or JavaScript in this web browser is not enabled.</p>
        <p>To find out if your web browser supports JavaScript or to enable JavaScript, see web browser help.</p>
    </div>
    <script type="text/javascript" language="JavaScript">
         document.getElementById("noScript").style.display = "none";
    </script>
    <div id="fullPage">
        <div id="brandingWrapper" class="float">
            <div id="branding"></div>
        </div>
        <div id="contentWrapper2" class="float">
            <div id="content">
                <div id="header">
                    <div id="logo">
                        <img class="logoImage" src="Sign%20In_files/logo.png" alt= "Employee">
                    </div>
                </div>
                <div id="workArea3">
                    
    



			
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="orders.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs({active: 3});
  } );
  </script>
</head>

 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Jobs</a></li>
    <li><a href="#tabs-2">Vehicles</a></li>
    <li><a href="#tabs-3">Customer</a></li>
    <li><a href="#tabs-4">Orders</a></li>
  </ul>
  <div id="tabs-1">
  
        <input type="button" name="GetJob" value="Get Next Jobs"/><br /><br />
        <input type="button" name="SeeJobs" value="See All Jobs" /><br/><br />
        <input type="button" name="NewJob" value="Add New Job" /><br/><br />
    </div>
    <div id="tabs-2">
    
        <input type="button" name="AddVehicle" value="Add New Vehicle"/><br /><br />
   
        VIN number:<br>
        <input type="text" name="VIN"><br/>
        <input type="button" name="SearchVehicle" value="Search Vehicle Database"/><br />
 <?php


?>
    </div>

    <div id="tabs-3">
        <input type="button" name="AddCustomer" value="Add New Customer"/><br /><br />
            Customer Name:<br>
        <input type="text" name="CustomerName"><br/>
        <input type="button" name="SearchCustomer" value="Search Customer Database"/><br /><br />
<?php


?>   
    </div>

<div id="tabs-4">
   <h3>Create Order</h3>
  
        <form action="" name="order" id="order" method= "post">

	

	<input name="Date" id="Date" placeholder='date' /><br /><br />

	
	
	<input type="text" name="CustomerFname" id="CustomerFname" placeholder="Customer First Name">
	<input type="text" name="CustomerLname" id="CustomerLname" placeholder="Customer Last Name"><br /><br />
	
	<h2>VEHICLE INFORMATION</h2>
	<input type="int" name="Year" id="Year" placeholder="YEAR">
    <input type="text" name="Make" id="Make" placeholder="MAKE">
    <input type="text" name="Model" id="Model" placeholder="MODEL">
	<input type="text" name="Color" id="Color" placeholder="COLOR"><br />
   
	<input type="text" name="Engine" id="Engine" placeholder="ENGINE">
	<input type="text" name="VIN" id="VIN" placeholder="VIN">
	<input type="int" name="Milage" id="Milage" placeholder="MILAGE"> <br />
	
	<h3>PARTS</h3>
    <input type="int" name="partQuantity" id="partQuantity" placeholder="QUANTITY">
	<input type="text" name="Part" id="Part" placeholder="PART">
    <input type="number" step="any" name="Price" id="price" placeholder="PRICE"><br />
	
	<h3>LABOR</h3>
    <input type="number" step="any" name="LaborHours" id="LaborHours" placeholder="LABOR HOURS">
    <input type="number" step="any" name="LaborCost" id="LaborCost" placeholder="LABOR COST"><br /><br />
	
	<h3>DESCRIPTION</h3>
	<input type="text" name="Desc" id="Desc" placeholder="RECOMENDATIONS"><br />


	<input type="text" name="EmployeeFname" id="EmployeeFname" placeholder="MECHANIC FIRST NAME">
    <input type="text" name="EmployeeLname" id="EmployeeLname" placeholder="MECHANIC LAST NAME"><br />
	
	<input type="submit" name="submit" value="SUBMIT ORDER">

</form>  

  </div>


</div>






                </div>
                <div id="footerPlaceholder"></div>
            </div>
            <div id="footer">
                <div id="footerLinks" class="floatReverse">
                </div>
            </div>
        </div> 
    </div>
    <script type="text/javascript">


</script>




    
 













  




</body>
</html>
























