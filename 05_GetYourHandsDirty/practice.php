<?php
define("NAME", "Ariana");
$todays_date = date("d/m/y");
$color = "Green";
$age = date("Y") - 2000;
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><?php echo $todays_date ?></p>
				
				<h3>My Name:</h3>
				<p><?php echo NAME ?></p>

				<h3>My Favourite Colour:</h3>
				<p><?php echo $color ?></p>
				
				<h3>My Age:</h3>
				<p><?php echo $age ?></p>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y")?> - <?php echo NAME?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
