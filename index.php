
<?php

require("config.inc.php");
require(MYSQL);

if ( $_SERVER['REQUEST_METHOD'] != 'POST' )
{
	// goto login
require('login.php');
}
else {
	//acually login
	echo ("logged in");
	
}

//include("html/header");
?>





<?php

include("html/footer.html");

?>

