<?php require_once('./config.php'); ?>
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
		<div id="order-form">
			<h1>Honey order form</h1>
			<form action="order-submit.php">
				<div class="form-title">Name</div>
				<input type="text" id="name" name="name"/>
				<div class="form-title">Email</div>
				<input type="text" id="email" name="email"/>
				<div class="form-title">Street Name & number</div>
				<input type="text" id="street" name="street"/>
				<div class="form-title">Suburb</div>
				<input type="text" id="suburb" name="suburb"/>
				<div class="form-title">Postcode</div>
				<input type="text" id="postcode" name="postcode">
				<div class="form-title">State</div>
				<select id="state" name="state">
					<option value="ACT">ACT</option>
					<option value="NSW">NSW</option>
					<option value="NT">NT</option>
					<option value="QLD">Queensland</option>
					<option value="SA">SA</option>
					<option value="TAS">Tasmania</option>
					<option value="VIC">Victoria</option>
					<option value="WA">WA</option>
				</select>
				<form action="" method="POST">
				  <script
				    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				    data-key="<?php echo $stripe['publishable_key']; ?>"
				    data-amount="2000"
				    data-name="Demo Site"
				    data-description="2 widgets ($20.00)"
				    data-image="/128x128.png"
				    data-locale="auto">
				  </script>
				</form>
		</div>
		<div id="success">
			<div class="title">Submission successful!</div>
			<div class="subtitle">Thank you for your order</div>
		</div>
	</body>
</html>