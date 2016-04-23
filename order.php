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
		<div id="order-form">
			<h1>Select which sized jar you would like</h1>
			<div class="item">
				<div class="title">A small jar - $8.00</div>
				<form action="order-submit1.php" method="POST">
					<form action="" method="POST">
					  <script
					    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
					    data-key="<?php echo $stripe['publishable_key']; ?>"
					    data-amount="800"
					    data-name="Galileo Honey"
					    data-description="A Small Jar ($8.00)"
					    data-image="/honeyicon.png"
					    data-shipping-address="true"
					    data-locale="auto">
					  </script>
					</form>
				</form>
			</div>
			<div class="item">
				<div class="title">A big jar - $12.00</div>
				<form action="order-submit2.php" method="POST">
					<form action="" method="POST">
					  <script
					    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
					    data-key="<?php echo $stripe['publishable_key']; ?>"
					    data-amount="1200"
					    data-name="Galileo Honey"
					    data-description="A Big Jar ($12.00)"
					    data-image="/honeyicon.png"
					    data-shipping-address="true"
					    data-locale="auto">
					  </script>
					</form>
				</form>
			</div>
		</div>
		<div id="success">
			<div class="title">Submission successful!</div>
			<div class="subtitle">Thank you for your order</div>
		</div>
	</body>
</html>