<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Oceanic Airlines</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<link rel="stylesheet" href="style/default/style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#topheader">Home</a></li>
        <li><a href="#over">Lastminute-deals</a></li>
		<li class="dropdown ">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Database 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="informatie.php?page=1">Alle vluchten van vandaag</a></li>
			<li><a href="informatie.php?page=2">Overzicht van alle klanten</a></li>
			<li><a href="informatie.php?page=3">Overzicht van alle piloten</a></li>
			<li><a href="informatie.php?page=4">Overzicht van alle vliegtuigen</a></li>
			<li><a href="informatie.php?page=5">Vluchten met catering</a></li>
			<li><a href="informatie.php?page=6">Meest geboekte vluchten</a></li>
			<li><a href="informatie.php?page=7">Gebruik per vliegtuig</a></li>
			<li><a href="informatie.php?page=8">Onderhoud per vliegtuig</a></li>
			<li><a href="informatie.php?page=9">Personen per vlucht</a></li>
			<li><a href="informatie.php?page=10">Vluchten per piloot</a></li>
			
        </ul>
      </li>
      </ul>
    
    </div>
  </div>
</nav>
<div class="jumbotron" id="topheader">
<div class="toppie"></div>
<div class="container text-center" >
  <h1>Oceanic Airlines</h1>
  <p>Start your journey today</p>
  </div>
  <div class="container text-center">
  <h2>Waar gaat jouw reis naar toe?</h2>
  <form method="post" action="informatie.php">

       <div class="form-group">
      <input type="text" class="form-control formm" placeholder="Ik wil naar..." name="text2">
    </div>
</form>
  </div>

</div>
<main>
<div class="container" id="over">
  <div class="row">
 
  <div class="col-sm-3">
		<div class="card">
			<img class="card-img-top" src="style/default/images/puntacanta.jpg" alt="Dominicaanse Republiek" style="width:100%">
			<div class="card-body">
				<h4 class="card-title">Dominicaanse Republiek</h4>
				<p class="card-text">De Dominicaanse Republiek is een land op het eiland Hispaniola, in het Caribisch gebied. Het beslaat ongeveer twee derde van het eiland. 
				In het westen grenst het aan Haïti, in het oosten ligt het eiland Puerto Rico, ten noorden de Atlantische Oceaan en ten zuiden de Caraïbische Zee.</p>
				<a href="informatie.php?text2=Las" class="btn btn-info">Meer informatie</a>
			</div>
		</div>
  </div>
  <div class="col-sm-3">
		<div class="card">
			<img class="card-img-top" src="style/default/images/belize.jpg" alt="Belize" style="width:100%">
			<div class="card-body">
				<h4 class="card-title">Belize</h4>
				<p class="card-text">Belize is een onafhankelijk land in Centraal-Amerika – een koninkrijk met als staatshoofd de Britse koningin Elizabeth II – 
				en grenst aan Mexico in het noordwesten en Guatemala in het zuiden en westen. Aan het oosten grenst het aan de Caribische Zee</p>
				<a href="informatie.php?text2=San" class="btn btn-info">Meer informatie</a>
			</div>
		</div>
  </div>
  <div class="col-sm-3">
		<div class="card">
			<img class="card-img-top" src="style/default/images/wallis.jpg" alt="Wallis" style="width:100%">
			<div class="card-body">
				<h4 class="card-title">Zwitserland</h4>
				<p class="card-text">Zwitserland, officieel de Zwitserse Bondsstaat, is een land in het midden van Europa met als buren Duitsland in het noorden, Frankrijk in het westen, 
				Italië in het zuiden, Oostenrijk en Liechtenstein in het oosten.</p>
				<a href="informatie.php?text2=Zurich" class="btn btn-info">Meer informatie</a>
			</div>
		</div>
  </div>
  <div class="col-sm-3">
		<div class="card">
			<img class="card-img-top" src="style/default/images/dubai.jpg" alt="Dubai" style="width:100%">
			<div class="card-body">
				<h4 class="card-title">Verenigde Arabische Emiraten</h4>
				<p class="card-text">De Verenigde Arabische Emiraten is een land in Azië dat aan Saoedi-Arabië en Oman grenst. 
				Het land omvat zeven emiraten, namelijk Abu Dhabi, Dubai, Sharjah, Ajman, Umm Al Qaywayn, Ras al-Khaimah en Fujairah.</p>
				<a href="informatie.php?text2=Dubai" class="btn btn-info">Meer informatie</a>
			</div>
		</div>
  </div>
  </div>
  </div>


 <div class="container" id="3">
   <div class="row">
    <div class="col-sm-8">
      <h3>Oceanic Air</h3>
      <p>
	  Samen met ons wereldwijde netwerk, bieden wij als Oceanic Airlines vliegtickets vanaf Amsterdam naar meer dan 500 bestemmingen over de hele wereld, met rechtstreekse Oceanic Air-vluchten vanaf Amsterdam naar meer dan 150 bestemmingen. Leun heerlijk achterover en geniet op onze intercontinentale vluchten van meer dan 1.000 uur interactief entertainment op uw persoonlijke scherm. Om nog maar te zwijgen over onze smakelijke maaltijden, snacks en drankjes.
	  </p>
    </div>
    <div class="col-sm-4">
      <h3>Reisplanner</h3>
      <p>Met onze handige vertrek- en aankomsttijden passen onze vluchten in úw reisplannen, niet andersom. Vlieg op gunstige tijden naar uw zakelijke bespreking of maak optimaal gebruik van uw weekendje weg. Weet u al waar u heen wilt vliegen en bent u klaar om te boeken? Vergeet dan niet om u ook in te schrijven voor ons frequent-flyer programma Flying Blue, voor besparingen en voordeel op toekomstige vluchten vanaf Amsterdam of andere bestemmingen.</p>
    </div>
  </div>
 </div>
 <div class="container" id="4">
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <h3>Bereikbaarheid</h3>
      <p>De luchthaven ligt 9 km ten zuidwesten van Amsterdam en is op diverse manieren goed bereikbaar. De snelste en gemakkelijkste methode is om de trein te nemen.</p>
    </div>
    <div class="col-sm-6 col-md-4">
	<h3></h3>
      <p> Een directe treinverbinding verbindt Amsterdam Centraal Station met de luchthaven, met treinen die iedere 10 minuten vanaf platform 1 en 2 vertrekken. Een andere populaire keuze is een van de vele shuttlebusjes die vanaf meer dan 100 hotels vertrekken. Wilt u met de taxi naar de luchthaven, boek deze dan van tevoren om ergernissen te voorkomen. De tarieven zijn redelijk en als u op de afgesproken tijd of eerder arriveert, is het gebruikelijk om een kleine fooi te geven.</p>
    </div>
    <div class="col-sm-12 col-md-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
 </div>
</main>
<footer>
    <div class="container text-center">
      <div class="row">
	  <div class="col-sm-4">
	<p>Oceanic Airlines</p>
	  </div>
	  <div class="col-sm-4">
	<p> Vluchten vanaf Amsterdam</p>
	  </div>
	  <div class="col-sm-4">
	<p>&copy; 2018 - 2019</p>
	  </div>
	  </div>
</div>


  </footer>


</body>
</html>
