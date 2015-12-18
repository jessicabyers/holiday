<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Holiday Experts - Offering the best holiday experience!</title>
<link rel="stylesheet" type="text/css" href="style.css" /> <!--style sheet-->
<script type="text/javascript">

function nextPage(holidayID, category, board, destination, price, nights, accommodation, startDate, returnDate)
	{
		var nextPageURL = "confirmHoliday.php?holidayId="+holidayId+"&category="+category+"&board="+board+"&destination="+destination+"&price="+price+"&nights="+nights+"&accommodation="+accommodation+"&startDate="+startDate+"&returnDate="+returnDate;
			document.location=nextPageURL;

	}
	function validate()
	{
	
	var theForm = document.getElementById("processHoliday");//get the form to process
	// Check if field is left blank
	if (theForm.name.value == "")  {
		isCorrect=false;
		
		alert("Required Fields Left Blank, Please Enter an appropriate value");
	}
			
	
	if (theForm.surame.value == "")  {
		isCorrect=false;
	
		alert("Required Fields Left Blank, Please Enter an appropriate value");
	}
	
	if (theForm.creditCardNo.value == "")  {
		isCorrect=false;

		alert("Required Fields Left Blank, Please Enter an appropriate value");
	}
	
	if (theForm.securityCode.value == "")  {
		isCorrect=false;
	
		alert("Required Fields Left Blank, Please Enter an appropriate value");	}

	if (theForm.address.value == "")  {
		isCorrect=false;

		alert("Required Fields Left Blank, Please Enter an appropriate value");
	}
	if (theForm.town.value == "")  {
		isCorrect=false;

		alert("Required Fields Left Blank, Please Enter an appropriate value");
	}
	
	if (theForm.country.value == "")  {
		isCorrect=false;

		alert("Required Fields Left Blank, Please Enter an appropriate value");
		
	}
	if (theForm.postcode.value == "")  {
		isCorrect=false;

		alert("Required Fields Left Blank, Please Enter an appropriate value");
	}
	
	if (theForm.email.value == "")  {
		isCorrect=false;

		alert("Required Fields Left Blank, Please Enter an appropriate value");
		
	}


	// check email contains a '@' character
	if (theForm.email.value.indexOf('@') == -1) 
	{
		alert("Invalid Email");
		isCorrect=false;
	}
	
	
	// check no more than 3 chars (and no less than 2) following last '.' character in email
    // so .co.uk is OK, as is .com, but .x or .cccc are not

	// get length of email entered
	var len = theForm.email.value.length; 

	// get position of last occurrence of '.'
	var lastDotPos = theForm.email.value.lastIndexOf('.'); 

	// get number of chars after last '.'
	var numCharsAfterLastDot=len-lastDotPos; 

	// need to decrement numCharsAfterLastDot as lastIndexOf counts from 0
	numCharsAfterLastDot--;

	// check if a . character appears less than 2 or more than 3 characters from the end of the email		
	if (numCharsAfterLastDot<2)  
	{
	alert("\nInvalid email - less than 2 characters following last .");
	isCorrect=false;
	}
	
	if (numCharsAfterLastDot>3)  
	{
	alert("\nInvalid email - more than 3 characters following last .");
	isCorrect=false;
	}

	// finish if true
	if (isCorrect) {
		return true;
	}
	else {
		// show the problem fields
		alert (errorStr);
		return false;
	}	
	
	}//validate
	</script>
</head>

<!--date and time-->
<div id="header">
	<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = Date();
</script>
</div>	

<style>
body {background-color:#E0FFFF;} <!--background colour-->
</style>

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
	<table border="0" width="50%" id="table4" height="50">
		<tr>
			<td>
					<form id="processHoliday" method="post" action="https://php.infc.ulst.ac.uk/B00662695/com363/miniProject/confirmHoliday.html" onSubmit="return validate();">
					
					<table cols="3" width="100%">
				
						<div id="headings">Thank you! Now please enter your payment details below to confirm your fantastic holiday!</div>
			
						<td><font face="Calibri" color="#5F5F5F" size="4pt">First name:<span class="required">*</span> </td>
						<td> <input type="text" size="30" name ="name" placeholder="Jane"></td><br>
					
					<tr>
						<td><font face="Calibri" color="#5F5F5F" size="4pt">Last name:<span class="required">*</span> </td>
						<td><input type="text" size="30" name ="surname" placeholder="Smith"></td><br>
					</tr>
					<tr>
						<td><font face="Calibri" color="#5F5F5F" size="4pt">Title:</td>
						<td><select name ="title"/>
						<option value="Mr">Mr</option>
						<option value="Mrs">Mrs</option>
						<option value="Dr">Dr</option>
						<option value="Rev">Rev</option>
						<option value="Miss">Miss</option>
						<option value="Fr">Fr</option>
						</select></td>
					</tr>
					<tr>
						<td><a href="#" data-toggle="tooltip" title="16 Digit Number On The Front Of The Card"><font face="Calibri" size="4pt">Credit/Debit Card Number</a><span class="required">*</span> </td>
						<td><input type="text" name="creditCardNo" maxlength="16" placeholder="Card Number"></td><br>
					</tr>
					<tr>
						<td> <a href="#" data-toggle="tooltip" title="3 Digit Number On The Back Of The Card"><font face="Calibri" size="4pt">Security Number</a><span class="required">*</span> </td>
						<td><input type="text" maxlength="3" name ="securityCode" placeholder="Security Code"></td><br>
					</tr>
					<tr>
						<td><font face="Calibri" color="#5F5F5F" size="4pt">Address Line:<span class="required">*</span> </td>
						<td><input type="text" size="50" name ="address" placeholder="7 Imagination Lane"></td><br>
					</tr>
					<tr>
						<td><font face="Calibri" color="#5F5F5F" size="4pt">Town:<span class="required">*</span>  </td>
						<td><input type="text" size="50" name ="town" placeholder="Coleraine"></td><br>
					</tr>
					<tr>
						<td><font face="Calibri" color="#5F5F5F" size="4pt">Country:<span class="required">*</span> </td>
						<td><input type="text" size="50" name ="country" placeholder="Northern Ireland"></td><br>
					</tr>
					<tr>
						<td><font face="Calibri" color="#5F5F5F" size="4pt">Postcode:<span class="required">*</span> </td>
						<td><input type="text" size="10" name ="postcode"placeholder="BT55 7AB"></td><br>
					</tr>
					<tr>
						<td><font face="Calibri" color="#5F5F5F" size="4pt">Phone:</td>
						<td><input type="text" size="30" name="phone" placeholder="028 7083 4567"></td><br>
					</tr>
					<tr>
						<td><font face="Calibri" color="#5F5F5F" size="4pt">Email:<span class="required">*</span> </td>
						<td><input type="text" size="30" name ="email" placeholder="janesmith@google.com"></td><br>
					</tr>
				
				<td><input type="submit" value="Submit" /> </td>
				</table>
			</div>
			
			</form>
			<p><font face="Calibri" color="#5F5F5F" size="4">&nbsp; </font></td>
		</tr>
	</table>
	
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
						offered on this site. We act as an agent for licenced 
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
						<div id="acceptions"
						<p align="center">
						We accept 
						the following cards</div></td>
						<td width="50%" colspan="3">
						<div id="acceptions"
						<p align="center">
						We have 
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
		
