<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Holiday Experts - Offering the best holiday experience!</title>
	<script type="text/javascript">


	function moreInfo(holidayId, category, board, destination, price, nights, accommodation, startDate, returnDate)
	{		
		alert("Click 'OK' to confirm booking");
		var nextPageURL = "holidayInfo.php?holidayId="+holidayId+"&category="+category+"&board="+board+"&destination="+destination+"&price="+price+"&nights="+nights+"&accommodation="+accommodation+"&startDate="+startDate+"&returnDate="+returnDate;
		document.location=nextPageURL;
	}//openMoreInfoPage

	</script>
</head>

<style>
body {background-color:#E0FFFF;}
</style>

<div id="header">
	<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = Date(); <!--Displaying date -->
</script>
</div>
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
	</tr><!--Linking page to button -->
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
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/holidayInfo1.html">
		<img border="0" src="Buttons/ButtonHolidayInformationDark.png" width="185" height="184" onmouseover="this.src='Buttons/ButtonHolidayInformationLight.png'" onmouseout="this.src='Buttons/ButtonHolidayInformationDark.png'" ></a></td>
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
	<!--Header of buttons -->
	<tr>
		<td colspan="2">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<p>&nbsp;</p>
<div align="center">
	<table border="0" width="50%" id="table4" height="50" align="center"> <!--Adding table for php -->
		<tr>
			<td>
</table>			
			
				<div id="marqueeHeading">
		<marquee> Hurry, while offers last!!    Limited time only!!     While stocks last!! </marquee></div> <!--embedding marquee -->
		<p>       </p>
<iframe align="center" width="560" height="315" src="https://www.youtube.com/embed/UlM1Yye7u_0" frameborder="0" allowfullscreen></iframe> <!--embedding Video -->
<p> </p>
</div> 
<div id="contentRight" style="text-align: center"> 
<div style="float:center; margin-top:5px; margin-center:5px"> <!--Setting text alignment etc -->
</div>

<?php
// open a file for reading
$fp = fopen("holiday.txt", "r");
if ($fp) {
// set up the table for structured output
echo "<table border='2' width='70%' rows='6' align='center'>";
echo "<tr><th><font face='Calibri' size='5pt' color='#33CCCC'>Holiday ID</font></th><th><font face='Calibri' size='5pt' color='#33CCCC'>Category</font></th><th><font face='Calibri' size='5pt' color='#33CCCC'>Board</font></th><th><font face='Calibri' size='5pt'color='#33CCCC'>Destination</font></th><th><font face='Calibri' size='5pt' color='#33CCCC'>Price PP</font></th><th><font size='5pt' face='Calibri' color='#33CCCC'>Nights</font></th><th><font face='Calibri' size='5pt' color='#33CCCC'>Accommodation<font></th><th><font  face='Calibri' size='5pt' color='#33CCCC'>Start Date</font></th><th><font face='Calibri' size='5pt' color='#33CCCC'>Return Date</font></th><th><font size='5pt' face='Calibri' color='#33CCCC'>Book</font></th></tr>";
// read the data line by line
while (($buffer = fgets($fp)) != FALSE)  {
// remove whitespace
$buffer = trim($buffer);
// extract the component parts of the line
$data = explode('|', $buffer);
// display the data
echo "<tr><td><H2><font face='Calibri'>$data[0]</H2></td><td><H2><font face='Calibri'>$data[1]</H2></td><td><H2><font face='Calibri'>$data[2]</H2></td><td><H2><font face='Calibri'>$data[3]</H2></td><td><font face='Calibri' color='red'><H2>&pound;$data[4]</font></H2></td><td><H2><font face='Calibri'>$data[5]</H2></td><td><H2><font face='Calibri'>$data[6]</H2></td><td><H2><font face='Calibri'>$data[7]</H2></td><td><H2><font face='Calibri'>$data[8]</H2></td><td><center><input type='button' value='Book Now' onClick='moreInfo(\"$data[0]\",\"$data[1]\",\"$data[2]\",\"$data[3]\",\"$data[4]\",\"$data[5]\",\"$data[6]\",\"$data[7]\",\"$data[8]\");'/></center></td></tr>";}

// close table
echo "</table>";
// close the file
fclose($fp);
}
?>
<!--brining in info from text file for table -->

		<form action="holidayInfo.php" method="post">
		<input type="hidden" name="holidayId" value="<?php echo $holidayholidayId; ?>" />
		<input type="hidden" name="holidayCategory" value="<?php echo $holidayCategory; ?>" />			
		<input type="hidden" name="holidayBoard" value="<?php echo $holidayBoard; ?>" />
		<input type="hidden" name="holidayDestination" value="<?php echo $holidayDestination; ?>" />
		<input type="hidden" name="holidayPrice" value="<?php echo $holidayPrice; ?>" />
		<input type="hidden" name="holidayNights" value="<?php echo $holidayNights; ?>" />
		<input type="hidden" name="holidayAccommodation" value="<?php echo $holidayAccommodation; ?>" />
		<input type="hidden" name="holidayStartDate" value="<?php echo $holidayStartDate; ?>" />
		<input type="hidden" name="holidayReturnDate" value="<?php echo $holidayReturnDate; ?>" />
		<input type="hidden" name="holidayMoreInfo" value="<?php echo $holidayMoreInfo; ?>" />
		<input type="hidden" name="holidayImage" value="<?php echo $holidayImage; ?>" /> </form>
<!--Passing inofrmation to next page after user selects holiday -->
		
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
					</tr> <!--Advertisement Buttons -->
				</table>
			</div>
			</td>
		</tr>
		<!--Everything below is the bottom of the web page - it is the same for every page -->
		<tr>
			<td bgcolor="#A8A8A8">
			<div align="center">
				<p align="center">&nbsp;</p>
				<table border="0" width="50%" id="table7">
					<tr>
						<td colspan="6">
						<div id="heading">Your 
						financial protection</div></td>
					</tr>
					<tr>
						<td colspan="6">
						<p align="justify">
						<div id="conditions">
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
						Certificate.</div></p>
						<p>&nbsp;</td>
					</tr>
					<tr>
						<td width="49%" colspan="3">
				
						<div id="acceptions">
								<p align="center">We accept 
						the following cards</div></td>
						<td width="50%" colspan="3">
					
						<div id="acceptions">
								<p align="center">We have 
						the following protection standards</div></td>
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
</html>


