<?php

include "credentials.php";

//database connection
$connection = new mysqli('localhost', $user, $pw, $db);

//select all records from our table 
$AllRecords = $connection->prepare("select * from SCP");
$AllRecords->execute();
$result = $AllRecords->get_result();

?>