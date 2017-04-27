<html>
<?php

require("config.inc.php");
require(MYSQL);

if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	//acually login
	echo ("logged in");
	
}
else {
// goto login
require('login.php');
}

//include("html/header");
?>





<?php

include("html/footer.html");

?>

