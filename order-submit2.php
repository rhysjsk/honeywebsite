
<?php
	require_once('./config.php');

  	$token  = $_POST['stripeToken'];

  	$customer = \Stripe\Customer::create(array(
      'email' => $_POST['stripeEmail'],
      'card'  => $token
  	));

  	$charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 1200,
      'currency' => 'aud'
  	));

  	error_reporting (E_ERROR);
	// Connecting, selecting database
  	$mysqli = new mysqli('127.0.0.1', 'galileo', '8yp6Y5', 'galileo');
	$name = $_POST["stripeShippingName"];
	$email = $_POST["stripeEmail"];
	$street = $_POST["stripeShippingAddressLine1"];
	$suburb = $_POST["stripeShippingAddressCity"];
	$postcode = $_POST["stripeShippingAddressZip"];
	$state = $_POST["stripeShippingAddressState"];
	
	$query = "INSERT INTO customers (name,email,item,street,suburb,postcode,state) VALUES ('$name', '$email', 'big', '$street', '$suburb', '$postcode', '$state')";

	if ($result = $mysqli->query($query)) {
	    //echo "success";
	} else {
	    die("Error with database, please try again later");
	}

	// Closing connection
	$mysqli->close();
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
							<div><a href="order.php">Order </a></div>		
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
			<div class="subtitle">Thank you for ordering a big jar of Galileo honey.</div>
		</div>
	</body>
</html>