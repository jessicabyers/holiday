<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>COM363 - Putting it all together</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">

	</script>

</head>
<?php
			
				
				$cameraPrice=$_POST['price'];
						
						$cameraId=$_POST['id'];
		$cameraMake = $_POST['make'];  
		$cameraModel = $_POST['model'];  
		$cameraRating=$_POST['rating'];
		$cameraStock = $_POST['stock'];  
		$cameraImage = $_POST['image'];  
	

			?>
<body>
<div id="mainContainer">
	<div id="topSection">
		<h1 style="text-align:center; padding-top:20px">COM363 assEx8: processEdits</h1>
	</div>
	<div id="contentWrapper">
		<div id="contentLeft">
			<p style="text-align:center">Useful Links</p>
			<br />
			<a href="http://www.google.com">Click here for Google</a>
			<br />
			<a href="http://www.bbc.co.uk">Click here for BBC</a>
			<br />
		</div>		
		<div id="contentRight">
		
		Congratulations, your changes have been successful. The new data is: <br />
		id= <?php echo $cameraId;?> <br />
		make= <?php echo $cameraMake;?> <br />
		model= <?php echo $cameraModel;?> <br />
		price= <?php echo $cameraPrice;?> <br />
		rating= <?php echo $cameraRating;?><br />
		stock= <?php echo $cameraStock;?> <br />
		image= <?php echo $cameraImage;?><br />
			Click <a href="camerasAdmin.php"> here </a> to return to the main admin page.

		</div>

	</div>
	<div id="footer">
		<a href="http://www.dynamicdrive.com/style/">More CSS layout examples here</a>
	</div>
</div>				
</body>
</html>
