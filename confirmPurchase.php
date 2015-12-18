<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>com363 - Putting it all together</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">

	</script>
	<?php
		// get data posted from enterPaymentDetails.php
		$buyerName=$_POST['name'];
		$shippingAddress=$_POST['address'];
		$cameraId = $_POST['id'];  // hidden field data POSTed from enterPaymentDetails.php
		$cameraMake = $_POST['make'];  // hidden field data POSTed from enterPaymentDetails.php
		$cameraModel = $_POST['model'];  // hidden field data POSTed from enterPaymentDetails.php
		
		$fp=fopen("cameras.txt","c+");
		if ($fp) 	{
			// get current position of file pointer, start of current line
			$startOfCurrentLine=ftell($fp);
			// find the camera id which has been purchased
			while (($buffer = fgets($fp)) != FALSE)  
			{
				// get new position of file pointer - start of next line
				$startOfNextLine=ftell($fp);
				// extract the component parts of the line
				$data = explode(',', $buffer);
				// check id matches the bought camera id
				if ($data[0]==$cameraId)  
				{
					// construct a new line, subtracting 1 from the stockLevel
					$updatedCameraData = array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]-1,$data[6]);
					// add the commas to separate the values
					$updatedCameraData=implode(',',$updatedCameraData);
					// write the new line of data to the file, using the position specified by 
					//startOfCurrentLine
					fseek($fp,$startOfCurrentLine);
					fputs($fp,rtrim($updatedCameraData));
				}//if
				// update pointer to start remember start of line
				$startOfCurrentLine=$startOfNextLine;
			}//while
		}//if

	?>
</head>
<body>
<div id="mainContainer">
	<div id="topSection">
		<h1 style="text-align:center; padding-top:20px">com363 Recipe 8: Complete Purchase</h1>
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
			Congratulations, <?php echo $buyerName; ?>, your transaction has been successful.  Your <?php echo $cameraMake; ?>  <?php echo $cameraModel; ?>
			will be shipped to <?php echo $shippingAddress; ?>.  Thank you for your custom.
			<br />
			Click <a href="cameras.php"> here </a> to return to the home page.
		</div>

	</div>
	<div id="footer">
		<a href="http://www.dynamicdrive.com/style/">More CSS layout examples here</a>
	</div>
</div>				
</body>
</html>
