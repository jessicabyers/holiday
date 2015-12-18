<!DOCTYPE html>
<html>
<head>
<a name="top"></a> 
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css"  href="style.css"/>
	<script type="text/javascript">
		
	function buyholiday1(holidayId, category, board, destination, price, nights, accommodation, startDate, returnDate)
	{
		alert("You are about to book a holiday to "+destination);
			
		var nextPageURL = "editHoliday.php";"//?holidayId="+HolidayId+"&category="+category+"&board="+board+"&destination="+destination+"&price="+price+"&nights="+nights+"&accommodation="+accommodation+"&startDate="+startDate+"&returnDate="+returnDate;
		document.location=nextPageURL;
	}//buyHoliday1
		

	function buyholiday2(holidayId, category, board, destination, price, nights, accommodation, startDate, returnDate)
	{
		alert("You are about to book a holiday to "+destination);
			
		var nextPageURL = "editHoliday.php?holidayId="+HolidayId+"&category="+category+"&board="+board+"&destination="+destination+"&price="+price+"&nights="+nights+"&accommodation="+accommodation+"&startDate="+startDate+"&returnDate="+returnDate;
		document.location=nextPageURL;
	}//buyHoliday2
		
		
	function buyHoliday3(holidayId, category, board, destination, price, nights, accommodation, startDate, returnDate)
	{
		alert("You are about to book a holiday to "+destination);
			
		var nextPageURL = "editHoliday.php?holidayId="+HolidayId+"&category="+category+"&board="+board+"&destination="+destination+"&price="+price+"&nights="+nights+"&accommodation="+accommodation+"&startDate="+startDate+"&returnDate="+returnDate;
		document.location=nextPageURL;
	}//buyHoliday3
		

	function buyHoliday4(holidayId, category, board, destination, price, nights, accommodation, startDate, returnDate)
	{
		alert("You are about to book a holiday to "+destination);
			
		var nextPageURL = "editHoliday.php?holidayId="+HolidayId+"&category="+category+"&board="+board+"&destination="+destination+"&price="+price+"&nights="+nights+"&accommodation="+accommodation+"&startDate="+startDate+"&returnDate="+returnDate;
		document.location=nextPageURL;
	}//buyHoliday4
	
	
	function buyHoliday5(holidayId, category, board, destination, price, nights, accommodation, startDate, returnDate)
	{
		alert("You are about to book a holiday to "+destination);
			
		var nextPageURL = "editHoliday.php?holidayId="+HolidayId+"&category="+category+"&board="+board+"&destination="+destination+"&price="+price+"&nights="+nights+"&accommodation="+accommodation+"&startDate="+startDate+"&returnDate="+returnDate;
		document.location=nextPageURL;
	}//buyHoliday5
	
	function buyHoliday6(holidayId, category, board, destination, price, nights, accommodation, startDate, returnDate)
	{
		alert("You are about to book a holiday to "+destination);
			
		var nextPageURL = "editHoliday.php?holidayId="+HolidayId+"&category="+category+"&board="+board+"&destination="+destination+"&price="+price+"&nights="+nights+"&accommodation="+accommodation+"&startDate="+startDate+"&returnDate="+returnDate;
		document.location=nextPageURL;
	}//buyHoliday5

	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	
	
	<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img 
  {
      width: 70%;
      margin: auto;
  }
  </style> 
</head>

<?php?
	$holidayHolidayId = $_GET['holidayID'];
	$holidayCategory = $_GET['category'];
	$holidayBoard = $_GET['board'];
	$holidayDestination = $_GET['destination'];
	$holidayPrice = $_GET['price'];
	$holidayNights = $_GET['nights'];
	$holidayAccommodation = $_GET['accommodation'];
	$holidayStartDate = $_GET['startDate'];
	$holidayReturnDate = $_GET['returnDate'];
?>

<form action="processHolidayEdits.php" method="post">
	<input type="hidden" name="holidayId" value="<?php echo $holidayHolidayId; ?>" />
	<input type="hidden" name="category" value="<?php echo $holidayCategory; ?>" />
	<input type="hidden" name="board" value="<?php echo $holidayBoard; ?>" />
	<input type="hidden" name="destination" value="<?php echo $holidayDestintation; ?>" />
	<input type="hidden" name="price" value="<?php echo $holidayPrice; ?>" />
	<input type="hidden" name="accommodation" value="<?php echo $holidayAccommodation; ?>" />
	<input type="hidden" name="startDate" value="<?php echo $holidayStartDate; ?>" />
	<input type="hidden" name="returnDate" value="<?php echo $holidayReturnDate; ?>" />
<body>

<div id="mainContainer">
<div id="topSection">
	<h1 style="text-align:center; padding-top:20px">Website Name </h1>
	</div>
	
<div id="contentWrapper"></div> 
	<div id="contentLeft">
	<div id="menu">  
		<br>     
 	 	<a href="#nogo">Home</a><br>	
		<br>
		<br>
		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/holidays.php">Holiday Packages</a><br>
		<br>  
		<br>
  		<a href="#nogo">Advice</a><br>   
		<br>  
		<br>
  		<a href="https://dunluce.infc.ulst.ac.uk/B00662695/COM363/miniProject/contactUs.php">Contact Us</a><br>
   	</div>    
	</div>

	<div id="contentRight">
		<h2 align="center"> Antala, Turkey </h2>
			 
		Side Ally Hotel is located by the sea on Side Titreyengöl tourism center where you will find a peaceful environment for both you and your family. </br>
		The hotel has 162 standard 2-bed, 10 standard large and 30 more family rooms; total capacity of 202 rooms and 460 beds. 
		In 2014, the furniture in the room bathrooms hallways, lobby and public areas have been renovated for your comfortable and relaxing holiday.
		There are outdoor and indoor pools in the hotel which will keep the children occupied! The hotel also provides activities for kids such as a mini disco, mini club, playground in the garden and much more!</br>
	    The hotel is right by the beach and sun beds are free of charge! </br>
		</br>
		
		<div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
		
		<!-- Wrapper for slides -->
        <div class="carousel-inner">
        <div class="item active">
        <img src="Side_Alley_Turkey.jpg" alt="First Slide" width="304" height="228">
        </div>

        <div class="item">
        <img src="Side Alley Turkey2.jpg" alt="Second Slide" width="304" height="228">
        </div>
    
        <div class="item ">
        <img src="Side Alley Turkey 3.jpg" alt="Third Slide" width="304" height="228">
        </div>

        <div class="item">
        <img src="Praia D Oura Portugal.jpg" alt="Fourth Slide" width="304" height="228">
        </div>
        </div>

        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
		</div>
		
		</div>
        
		
		
		
            
		 <!--<img src="Side_Alley_Turkey.jpg" class="img-responsive" alt="Side Alley" width="304" height="228"> -->
			<div id="menu" >  
		<br>     
  		<button onclick="buyHoliday1(holidayId, category, board, destination, price, nights, accommodation, startDate, returnDate);">Book</button>	<br><br>	 <a href='#top'>Back to Top</a>	<br></div> 	

			
			
			
		<h2 align="center"> San Marco, Venice </h2>
			
		Hotel All'Angelo is located in an ancient 17th century palazzo, just 50 metres from St Mark's Square and the Doge Palace with its Bridge of Sighs.</br>
       		This Venetian Four Star Hotel is set in the most historic and picturesque centre of Venice and now proudly houses and displays a priceless collection of artwork created by many of the artists who have visited. </br>
		The 56 rooms at the Hotel all'Angelo, recreate the refined atmosphere and artistic variety of the Venetian medieval city.</br>
		Other amenities include: Air conditioning, mini-bar, Satellite TV, inroom safe and hair dryer. </br>
		</br>
			
		<img src="All'angelo Venice.jpg" class="img-responsive" alt="All'Angelo" width="304" height="228">
			
		<div id="menu" > 
		<br>     
 		<a onclick='buyHoliday2();'>Book</a> <br><br>	 <a href='#top'>Back to Top</a>	<br></div> 	
			
			
			
		<h2 align="center"> Ballaric Islands, Spain </h2>
			
		Mar y Heurta situated centrally, just opposite the main square, in Santa Eulalia in the Es Cana beach, with the beach only 20 meters away! </br>
		There is a choice of shops, restaurants and bars within a walking distance. </br>
		The hotel facilities include a bar/snack bar, a buffet-service dinning-room, a swimming pool, a sun terrace, a garden and a children's playground. </br>
		</br>
			
		<img src="mar-y-huerta spain.jpg" class="img-responsive" alt="Mar y Huerta" width="304" height="228">
			
		<div id="menu">
		<br>     
  		<a onclick='buyHoliday3();'>Book</a> <br><br>	 <a href='#top'>Back to Top</a>	<br></div> 	
			
			
			
		<h2 align="center"> Albuferia, Portugal</h2>
			
		The stylish Clube Praia da Oura Portugal is a large 3-star apartment complex located just outside the beautiful resort of Albufeira, Portugal. </br>
		A few minutes’ walk from the stunning sandy beaches of The Algarve, the complex is the perfect beach front getaway for couples and families. </br>
         	Clube Praia Da Oura apartments are clustered around the two swimming pools which boast ample space on the terraces for sunbathing and snoozing under a parasol.	</br>
		From tennis to bowling, there are a variety of sports on offer, and if that’s not enough the hotel has an on-site fitness centre and a spa equipped with outdoor sauna and four Jacuzzis! </br>
		For the little ones there is a children’s pool and kids club so you can relax by the pool with a cocktail from one of the four bars whilst they’re kept entertained. </br>
		The Clube Praia Da Oura features 561 self-catering apartments. A typical apartment at has a living/dining area, bedroom / sofa bed, kitchenette with fridge, two electric rings, oven or microwave, Satellite TV, DVD Player, fan, in-room safety deposit box, telephone, fully equipped bathroom with hairdryer and furnished terrace or balcony. </br> 
		</br>
		
		
		<img src="Praia D Oura Portugal.jpg" class="img-responsive" alt="Praia Da Oura" width="304" height="228">
			
		<div id="menu">  
		<br>     
  		<a onclick='buyHoliday4();'>Book</a> <br><br>	 <a href='#top'>Back to Top</a>	<br></div> 	
			
			
		<h2 align="center"> Eastern Carribbean</h2>
			
        Luxuriate in a full day at sea in the opulence of Britannia, before sailing over azure oceans, to explore the beautiful and diverse island of Curacao, where you’ll find a diverse landscape and a melting pot of cultures. </br>
        From here, your next port of call is Aruba for more glorious beaching or a leisurely stroll around its compact, waterfront capital, Oranjestad, which is a heaven for both keen shoppers adventurous foodies alike. </br>
		St Georges in Grenada is the penultimate port of call – the ‘Spice Island, where the air is scented with nutmeg and the people are some of the friendliest you’ll meet in the Caribbean. </br>
        And finally Kingstown, St Vincent which also has its fair share of stunning sandy beaches, beautifully blue water and verdant rainforest for hearty hikes before you finally call at St Lucia for your flight home. </br>
		While on the ship you can enjoy west end-style shows in the ship's theatres, comedy and cabaret, live music, piano recitals and tribute bands and cinema and film screenings.
		There are also activities for kids of all ages! </br>
		The fly-cruise holiday price includes Economy class flights from/to London Gatwick on the day of embarkation/disembarkation. </br>
		</br>
			 
				
		<img src="Cruise.jpg" class="img-responsive" alt="Cruise" width="304" height="228">
			
		<div id="menu">
		<br>     
  		<a onclick='buyHoliday5();'>Book</a> <br><br>	 <a href='#top'>Back to Top</a>	<br></div> 	
		
			
		<h2 align="center"> Ski Holiday; Alpe d'Huez, France</h2>
		
		Les Cimes is a comfortable hotel and all bedrooms have been recently refurbished. It has a sunny, south-facing position, close to the ski lifts and with fantastic views of the surrounding mountains especially from the sun terrace and the balconies. </br>
		The hotel’s attractive dining room also has lovely views of the Oisans valley and a convivial atmosphere, perfect for enjoying our choice of menus and of course the complimentary wines. <br>
		The centre of the resort is just 5 minutes walk away including a selection of après-ski bars and restaurants. <br>
		You will also find here the resort indoor/outdoor swimming pool and ice rink, entry to which is included with the lift pass. <br>
		The bedrooms all have en suite facilities and many have a south-facing balcony. They are all well equipped and all have flat screen TV, safe and hair dryer. <br>
		The nearest ski lift is the Grand Sure chairlift which goes direct to the Signal and this is just a minute’s walk away. You can also ski back to this point at the end of the day. <br>
		From only £368pp for 7 nights, you sure couldn't pass up this deal! <br>
		</br>
			 
				
		<img src="Ski.jpg" class="img-responsive" alt="Ski" width="304" height="228">
			
		<div id="menu">
		<br>     
  		<a onclick='buyHoliday6();'>Book</a> <br><br>	 <a href='#top'>Back to Top</a>	<br></div> 	
			
		</div>
		<div id="footer">
		
	
	</div>
</div>				
</body>
</html>
