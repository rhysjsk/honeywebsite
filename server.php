<?php
error_reporting (E_ERROR);
	// Connecting, selecting database
$link = mysql_connect('localhost', 'galileo', '8yp6Y5')
    or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('galileo') or die('Could not select database');

// Performing SQL query
if (!$_REQUEST["name"] || !$_REQUEST["email"] || !$_REQUEST["jars_ordered"] || !$_REQUEST["street"] || !$_REQUEST["suburb"] || !$_REQUEST["postcode"] || !$_REQUEST["state"]){
	echo "Error with form submission: Incomplete form";
	exit();
}

 $name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$jars_ordered = $_REQUEST["jars_ordered"];
$street = $_REQUEST["street"];
$suburb = $_REQUEST["suburb"];
$postcode = $_REQUEST["postcode"];
$state = $_REQUEST["state"];

$query = "INSERT INTO customers (name,email,jars_ordered,street,suburb,postcode,state) VALUES ('$name', '$email', $jars_ordered, '$street', '$suburb', '$postcode', '$state')";

//echo $query;

if (mysql_query($query)) {
    echo "success";
} else {
    echo "Error with database, please try again later";
}
// x=F?~8MS
// Free resultset
//mysql_free_result($result);

// Closing connection
mysql_close($link);

?>