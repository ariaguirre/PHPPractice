<?php
	define("TITLE", "For Loop");
	$lessonNum	= 20;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP - <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			<p>Echo the numbers between 0 and 20. </p>
				<?php
				for($a = 0; $a <= 20; $a++){
					echo "Number: $a . <br/>";
				}
				?>
				
			</div>
			<a href="index.php" class="button">Back to the lecture</a>
			<hr>
		</div>
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div>
	</body>
</html>
