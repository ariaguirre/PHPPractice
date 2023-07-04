<?php
	define("ARRAYS", "Arrays");
	
	$phones = array("IPhone", "Samsung", "Huawei");
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo ARRAYS?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture 05: <small><?php echo ARRAYS?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>Phone Types</h2>
				<ul>
					<li><?php echo $phones[0]?></li>
					<li><?php echo $phones[1]?></li>
					<li><?php echo $phones[2]?></li>
				</ul>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y")?> - <?php echo "Ariana" ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
