<?php
	define('TITLE', 'If Statement')
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP - <?php echo TITLE?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial 10: <small><?php echo TITLE?></small></h1>
			<hr>
		
			<div class="sandbox">
			<?php
				$a = 20;
				$b = 50;
			if( $a < $b) {
				echo "El valor de A es $a, mientras que el valor de B es $b, por lo tanto B es mayor que A.";
			};

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
