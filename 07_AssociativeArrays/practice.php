<?php
	
	// Constants
	define("TITLE", "Associative Arrays");

	
	// Custom Variables

	
	// User Associative Array
	$user = array(
		"name" => "Maria",
		"email"=> "maria@gmail.com",
		"orders" => "5"
	)
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial 07: <small><?php echo TITLE?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The user <?php echo $user["name"]?>:</h2>
				<p>This user is registered under the email <strong> <?php echo $user["email"]?> </strong> and has made <strong><?php echo $user["orders"]?> </strong> orders in the last month.</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y')?> - <?php echo "Ariana"?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
