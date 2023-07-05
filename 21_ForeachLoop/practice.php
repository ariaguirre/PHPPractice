<?php
	define("TITLE", "Foreach Loop");
	$lessonNum	= 21;
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
				
				<?php
				 $brands = array("Adidas", "Nike", "Puma");

				foreach($brands as $brand){
					echo "I love $brand active wear. <br/>";
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
