<?php
	
	// Constants
	define('TITLE', 'Else Statement')

	
	// Custom Variables


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial 11: <small><?php echo TITLE?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			<?php 
				$age = 20;
			if($age > 18){
				echo "Tenes $age? Sos mayor de edad.";
			} else {
				echo "Tenes $age? Sos menor de edad.";
			}
			?>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
