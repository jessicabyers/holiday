<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>COM363 - Putting it all together</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
		function showImage(imageFileName, make, model) {
			// get image element
			var theImageElement = document.getElementById("cameraImage");
			// change what image is displayed
			theImageElement.src=imageFileName;
			// update caption
			var theCaption=document.getElementById("imageCaption");
			theCaption.innerHTML = make+" "+model;
		}
		
		function alertBox(id, make, model, price, rating, stock, image)
		{
			alert ("You clicked on camera id= " + id + "("+make + model + ")" );
			
			var nextPageURL = "editCamera.php?id="+id+"&make="+make+"&model="+model+"&price="+price+"&rating="+rating+"&stock="+stock+"&image="+image;
			document.location=nextPageURL;
		}

	</script>
</head>
<body>
<div id="mainContainer">
	<div id="topSection">
		<h1 style="text-align:center; padding-top:20px">COM363 assessmentEx 8: Cameras Admin Page</h1>
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
			<div style="float:right; margin-top:5px; margin-right:5px">
				<img id="cameraImage"  src="blank.jpg" /> <br />
				<div style="text-align:center" id="imageCaption"> No image </div>
			</div>
			<?php
				// open a file for reading
				$fp = fopen("cameras.txt", "r");
				if ($fp) {
					// set up the table for structured output
					echo "<table border='2' width='75%' rows='6'>";
					echo "<tr><th>Id</th><th>Make</th><th>Model</th><th>Price</th><th>Rating</th><th>Stock</th><th>Image</th><th>Edit</th></tr>";
					// read the data line by line
					while (($buffer = fgets($fp)) != FALSE)  {
						// remove whitespace
						$buffer = trim($buffer);
						// extract the component parts of the line
						$data = explode(',', $buffer);
						// display the data
						echo "<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td><input type='button' value='ShowImage' onClick='showImage(\"$data[6]\",\"$data[1]\",\"$data[2]\");'/></td><td><input type='button' value='Edit' onClick='alertBox(\"$data[0]\",\"$data[1]\",\"$data[2]\");'/></td></tr>";								
					}
					// close table
					echo "</table>";
					// close the file
					fclose($fp);
				}
			?>
		</div>

	</div>
	<div id="footer">
		<a href="http://www.dynamicdrive.com/style/">More CSS layout examples here</a>
	</div>
</div>				
</body>
</html>
