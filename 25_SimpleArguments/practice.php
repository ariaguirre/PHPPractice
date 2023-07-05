<?php
	define("TITLE", "Simple Arguments");
	$lessonNum	= 25;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
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
				
				<h3>One Argument</h3>
				<?php
					function cities($location){
						echo "I've never visited $location, have you? <br/>";
					}
					cities("Madrid");
					cities("Australia");
				?>
				
				<h3>Two Arguments</h3>
				<?php
				function product($num1, $num2){
					$result = $num1 * $num2;
					echo "The product between $num1 and $num2 is $result. <br/>";
				}
				product(15, 40);
				product(33, 12);
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
