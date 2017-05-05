<?php

// This file contains the database access information. 
// This file establishes a connection to MySQL and selects the database.


// Set the database access information as constants:
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'toor');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'Project362');

// Make the connection:
$conn = new mysqli (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Check the connection
if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}

// Set the character set:
mysqli_set_charset($conn, 'utf8');

// Omit the closing PHP tag to avoid 'headers already sent' errors!
