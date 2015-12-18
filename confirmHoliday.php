<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Holiday Experts - Offering the best holiday experience!</title>
	<script type="text/javascript">
	
	</script>
</head>



<body background="backgroundclouds.jpg">
<div id="topSection">
		</div>

<table border="0" width="100%" id="table3" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="2">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td rowspan="3" width="343" height="348">
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/holidays.php">
		<img border="0" src="Buttons/ButtonHolidayPackagesDark.png" width="343" height="343" onmouseover="this.src='Buttons/ButtonHolidayPackagesLight.png'" onmouseout="this.src='Buttons/ButtonHolidayPackagesDark.png'" ></a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td width="197" height="184">
		<img border="0" src="BannerLeftFill.png" width="197" height="170"></td>
		<td width="184" height="184">
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/index.htm">
		<img border="0" src="Buttons/ButtonHomeDark.png" width="185" height="184" onmouseover="this.src='Buttons/ButtonHomeLight.png'" onmouseout="this.src='Buttons/ButtonHomeDark.png'" ></a></td>
		<td width="184" height="184">
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/advice.html">
		<img border="0" src="Buttons/ButtonAdviceDark.png" width="185" height="184" onmouseover="this.src='Buttons/ButtonAdviceLight.png'" onmouseout="this.src='Buttons/ButtonAdviceDark.png'" ></a></td>
		<td width="184" height="184">
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/connectingFlights.html">
		<img border="0" src="Buttons/ButtonConnectingFlightsDark.png" width="185" height="184" onmouseover="this.src='Buttons/ButtonConnectingFlightsLight.png'" onmouseout="this.src='Buttons/ButtonConnectingFlightsDark.png'" ></a></td>
		<td width="184" height="0">
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/exercises.html">
		<img border="0" src="Buttons/ButtonExerciseDark.png" width="185" height="184" onmouseover="this.src='Buttons/ButtonExerciseLight.png'" onmouseout="this.src='Buttons/ButtonExerciseDark.png'" ></a></td>
		<td width="184" height="184">
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/wellbeing.html">
		<img border="0" src="Buttons/ButtonWellbeingDark.png" width="185" height="184" onmouseover="this.src='Buttons/ButtonWellbeingLight.png'" onmouseout="this.src='Buttons/ButtonWellbeingDark.png'" ></a></td>
		<td width="184" height="184">
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/contactUs.php">
		<img border="0" src="Buttons/ButtonContactDark.png" width="185" height="184" onmouseover="this.src='Buttons/ButtonContactLight.png'" onmouseout="this.src='Buttons/ButtonContactDark.png'"  ></a></td>
		<td width="237" height="184">
		<img border="0" src="BannerRightFill.png" width="236" height="170"></td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="2">&nbsp;</td>
	</tr>
	
		<?php
			
				$holidayHolidayId = $_GET['holidayId'];
				$holidayBoard = $_GET['board'];
				$holidayCategory = $_GET['category'];
				$holidayDestination = $_GET['destination'];
				$holidayPrice = $_GET['price'];
				$holidayNights = $_GET['nights'];
				$holidayAccommodation = $_GET['accommodation'];
				$holidayStartDate = $_GET['startDate'];
				$holidayReturnDate = $_GET['returnDate'];
				

			?>
	
	
	
	
	
	
		<form>
		<input type="hidden" name="holidayId" value="<?php echo $holidayholidayId; ?>" />
		<input type="hidden" name="holidayCategory" value="<?php echo $holidayCategory; ?>" />			
		<input type="hidden" name="holidayBoard" value="<?php echo $holidayBoard; ?>" />
		<input type="hidden" name="holidayDestination" value="<?php echo $holidayDestination; ?>" />
		<input type="hidden" name="holidayPrice" value="<?php echo $holidayPrice; ?>" />
		<input type="hidden" name="holidayNights" value="<?php echo $holidayNights; ?>" />
		<input type="hidden" name="holidayAccommodation" value="<?php echo $holidayAccommodation; ?>" />
		<input type="hidden" name="holidayStartDate" value="<?php echo $holidayStartDate; ?>" />
		<input type="hidden" name="holidayReturnDate" value="<?php echo $holidayReturnDate; ?>" />
		</form>
</form>
</table>
<p>&nbsp;</p>
<div align="center">
<table border='2' width='75%' rows='8'>
				
				<tr><td>Holiday ID</td><td><?php echo $holidayHolidayId; ?></td></tr>
				
				<tr><td>Category</td><td><?php echo $holidayCategory; ?></td></tr>
				
				<tr><td>Board</td><td><?php echo $holidayBoard; ?></td></tr>
				
				<tr><td>Destination</td><td><?php echo $holidayDestination; ?></td></tr>
				
				<tr><td>Price</td><td><?php echo $holidayPrice; ?></td></tr>
				
				<tr><td>Nights</td><td><?php echo $holidayNights; ?></td></tr>
				
				<tr><td>Accommodation</td><td><?php echo $holidayAccommodation; ?></td></tr>
				
				<tr><td>Start Date</td><td><?php echo $holidayStartDate; ?></td></tr>
				
				<tr><td>Return Date</td><td><?php echo $holidayReturnDate; ?></td></tr>
				
				
</table>
			
			

</div> 
<div id="contentLeft" style="text-align: center">
<div style="float:left; margin-top:5px; margin-left:5px">
</div>
	
		</div>	
			
			</font>
			<p><font face="Calibri" color="#5F5F5F" size="4">&nbsp; </font></td>
		</tr>
	
	<table border="0" width="100%" id="table5" cellspacing="0" cellpadding="0">
		<tr>
			<td bgcolor="#5F5F5F">
			<div align="center">
				<table border="0" width="50%" id="table6">
					<tr>
						<td>
						<p align="center">
						<a href="https://www.facebook.com/">
						<img border="0" src="Buttons/ButtonFacebookDark.png" width="64" height="64" onmouseover="this.src='Buttons/ButtonFacebookLight.png'" onmouseout="this.src='Buttons/ButtonFacebookDark.png'" ></a></td>
						<td>
						<p align="center">
						<a href="https://www.instagram.com/">
						<img border="0" src="Buttons/ButtonInstagramDark.png" width="64" height="64" onmouseover="this.src='Buttons/ButtonInstagramLight.png'" onmouseout="this.src='Buttons/ButtonInstagramDark.png'" ></a></td>
						<td>
						<p align="center">
						<a href="https://www.twitter.com/">
						<img border="0" src="Buttons/ButtonTwitterDark.png" width="64" height="64" onmouseover="this.src='Buttons/ButtonTwitterLight.png'" onmouseout="this.src='Buttons/ButtonTwitterDark.png'" ></a></td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td bgcolor="#A8A8A8">
			<div align="center">
				<p align="center">&nbsp;</p>
				<table border="0" width="50%" id="table7">
					<tr>
						<td colspan="6">
						<font face="Calibri" color="#5F5F5F" size="4">Your 
						financial protection</font></td>
					</tr>
					<tr>
						<td colspan="6">
						<p align="justify">
						<font style="font-size: 11pt" color="#FFFFFF" face="Calibri">
						All flights and flight-inclusive holidays on this 
						website are financially protected by the ATOL scheme but 
						ATOL protection does not apply to the other services 
						offered on this site. We act as an agent for licensed 
						Tour Operators. When you pay you will be supplied with 
						an ATOL Certificate. Please ask for it and check to 
						ensure that everything you booked (flights, cruises, 
						hotels and other services) is listed on it. Please see 
						the tour operators booking conditions for further 
						information or go to www.atol.org.uk for more 
						information about financial protection and the ATOL 
						Certificate.</font></p>
						<p>&nbsp;</td>
					</tr>
					<tr>
						<td width="49%" colspan="3">
						<p align="center">
						<font face="Calibri" size="4" color="#5F5F5F">We accept 
						the following cards</font></td>
						<td width="50%" colspan="3">
						<p align="center">
						<font face="Calibri" size="4" color="#5F5F5F">We have 
						the following protection standards</font></td>
					</tr>
					<tr>
						<td width="49%" colspan="3">&nbsp;</td>
						<td width="50%" colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td width="17%">
						<p align="center">
						<img border="0" src="visa.png" width="64" height="64"></td>
						<td width="16%">
						<p align="center">
						<img border="0" src="mastercard.png" width="64" height="64"></td>
						<td width="16%">
						<p align="center">
						<img border="0" src="american.png" width="64" height="64"></td>
						<td width="17%">
						<p align="center">
						<img border="0" src="protection1.png" width="64" height="64"></td>
						<td width="17%">
						<p align="center">
						<img border="0" src="protection2.png" width="64" height="64"></td>
						<td width="16%">
						<p align="center">
						<img border="0" src="protection3.png" width="64" height="64"></td>
					</tr>
				</table>
				<p align="center">&nbsp;</div>
			</td>
		</tr>
	</table>
</div>

</body>

</html>


