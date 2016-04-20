
<?php
require_once('./config.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => $_POST['email'],
      'card'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 1500,
      'currency' => 'aud'
  ));

  echo '<h1>Successfully charged $AU15.00!</h1>';


  error_reporting (E_ERROR);
	// Connecting, selecting database
	$link = mysql_connect('localhost', 'galileo', '8yp6Y5')
	    or die('Could not connect: ' . mysql_error());
	//echo 'Connected successfully';
	mysql_select_db('galileo') or die('Could not select database');

	// Performing SQL query
	//if (!$_REQUEST["name"] || !$_REQUEST["email"] || !$_REQUEST["jars_ordered"] || !$_REQUEST["street"] || !$_REQUEST["suburb"] || !$_REQUEST["postcode"] || !$_REQUEST["state"]){
	//	echo "Error with form submission: Incomplete form";
	//	exit();
	//}

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

<html>
	<head>
		<title>Order honey</title>
		<link rel="stylesheet" type="text/css" href="aboutnew.css">
		<link rel="stylesheet" type="text/css" href="order.css">
		<script src="order.js"></script>
	</head>
	<body>
		<div class="top">
			<div id="logo">
				<img src="logo.png">
			</div>
			<div class="drop">
				<span id="menu">Menu</span> 
					<div id="dropcontent">
							<div><a href="order.html">Order </a></div>		
							<div><a href="meettheteam.html">Meet the team </a></div>
							<div><a href="ourstory.html">Our story </a></div>
					</div>
			</div>
			<div class="a">
				<a href="aboutnew.html"><span id="a">About</span></a>
			</div>
			<h2 id="title"> The United Honey <br>Society </h2>
			<div style="clear:both"></div>
		</div>
		<div id="success">
			<div class="title">Submission successful!</div>
			<div class="subtitle">Thank you for your order</div>
		</div>
	</body>
</html>