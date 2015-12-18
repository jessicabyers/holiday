<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>com363 - Putting it all together</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
	
	function confirmPurchase()
	{
		var nextPageURL = "confirmPurchase.php;
			document.location=nextPageURL;
	}

	</script>
</head>
<?php
	// get data from cameras.php
	$cameraId = $_GET['id'];
	$cameraMake = $_GET['make'];
	$cameraModel = $_GET['model'];
	$cameraPrice = $_GET['price'];
?>

<body>
<div id="mainContainer">
	<div id="topSection">
		<h1 style="text-align:center; padding-top:20px">com363 Recipe 8: Enter payment details</h1>
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
			<img id="cameraImage" style="float:right; margin-top:5px; margin-right:5px" src="blank.jpg" />
			<form action="confirmPurchase.php" method="post">
			<input type="hidden" name="id" value="<?php echo $cameraId; ?>" />
			<input type="hidden" name="make" value="<?php echo $cameraMake; ?>" />
			<input type="hidden" name="model" value="<?php echo $cameraModel; ?>" />
			You are buying camera <?php echo $cameraId; echo $cameraMake; echo $cameraModel;?> at £<?php echo $cameraPrice;?>
				<table cols="2" width="75%">
					<tr>
						<td>Your name</td><td><input type="text" size="30" name="name"/></td>
					</tr>
					<tr>
						<td>Your address</td><td><input type="text" size="30" name="address"/></td>
					</tr>
					<tr>
						<td>Credit card number</td><td><input type="text" size="30" /></td>
					</tr>
					<tr>
						<td><input type="submit" value="Buy camera" onClick="confirmPurchase()" /> </td>
					</tr>
				</table>
			</form>
		</div>

	</div>
	<div id="footer">
		<a href="http://www.dynamicdrive.com/style/">More CSS layout examples here</a>
	</div>
</div>				
</body>
</html>
