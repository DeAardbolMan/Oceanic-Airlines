<?php 
include("database.php");
$date = date("Y-m-d");


?>
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
        <li><a href="index.php#topheader">Home</a></li>
        <li><a href="index.php#over">Lastminute-deals</a></li>
		<li class="dropdown active">
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
      <!--ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul-->
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
  <h2>Zoek jouw vlucht</h2>
  <form method="post" action="informatie.php">

       <div class="form-group">
      <input type="text" class="form-control formm" placeholder="Vul hier je vluchtnummer in." name="text3">
    </div>
</form>
  </div>
</div>
<main>

 <div class="container" id="3">
   <div class="row">
    <div class="col-sm-12">
	<?php 
	if(!isset($_GET['page'])) { ?>
 <?php 
	}
	else if($_GET['page'] == "1") {
	//Keuze 1
	?>
	
      <h3>Alle vluchten van vandaag</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Vluchtnummer</th>
			<th>Bestemming</th>
			<th>Piloot</th>
			<th>Type vliegtuig</th>
			<th>Catering<th>
		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT * FROM `flights` INNER JOIN planes ON planes.id = flights.planeid INNER JOIN destinations ON flights.to = destinations.abbr INNER JOIN pilots ON pilots.id = flights.pilotid WHERE flights.date = '$date'");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
		 ?>
				<tr>
					<td><?php echo $data["id"]; ?></td>
					<td><?php echo $data["destination"]; ?></td>
					<td><?php echo $data["naam"]; ?></td>
					<td><?php echo $data["type"]; ?></td>
					<td><?php  if($data["catering"] == 1) { echo "Ja"; } else { echo "Nee"; } ?></td>
				</tr>

		 <?php }
		?>
		</table>
	 <?php 
	} else if($_GET['page'] == "2") {
	//Keuze 2
	?>
	<h3>Overzicht van alle klanten</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Naam</th>
			<th>Adres</th>
			<th>Woonplaats</th>
			<th>Telefoonnummer</th>
			<th>Email<th>
		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT * FROM `users`");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["voornaam"] . " " . $data["achternaam"] . "</td>
					<td>" . $data["adres"] . "</td>
					<td>" . $data["woonplaats"] . "</td>
					<td>+31" . $data["telefoon"] . "</td>
					<td>" . $data["mail"] . "</td>
				</tr>
			";
		}
		?>
		</table>
	<?php 
	} else if($_GET['page'] == "3") {
	//Keuze 3
	?>
	<h3>Overzicht van alle piloten</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Naam</th>
			<th>Telefoonnummer</th>
			<th>Email<th>
		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT * FROM `pilots`");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["naam"] . "</td>

					<td>+31" . $data["telefoon"] . "</td>
					<td>" . $data["mail"] . "</td>
				</tr>
			";
		}
		?>
		</table>
	<?php 
	} else if($_GET['page'] == "4") {
	//Keuze 4
	?>
	<h3>Overzicht van alle vliegtuigen</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Staartnummer</th>
			<th>Type</th>
			<th>In gebruik</th>
			<th>Capaciteit</th>
			<th>Volgend onderhoud<th>
		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT * FROM `planes` INNER JOIN maintenance ON planes.id = maintenance.planeid");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["tailnumber"] . "</td>
					<td>" . $data["type"] . "</td>
					<td>" . $data["used"] . "</td>
					<td>". $data["capacity"] . "</td>
					<td>" . $data["nextdate"] . "</td>
				</tr>
			";
		}
		?>
		</table>
	<?php 
	} else if($_GET['page'] == "5") {
	//Keuze 5
	?>
	
      <h3>Vluchten met catering</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Vluchtnummer</th>
			<th>Bestemming</th>
			<th>Piloot</th>
			<th>Type vliegtuig</th>
			<th>Datum<th>
		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT * FROM `flights` INNER JOIN booking ON booking.flightid = flights.id INNER JOIN planes ON planes.id = flights.planeid INNER JOIN destinations ON flights.to = destinations.abbr INNER JOIN pilots ON pilots.id = flights.pilotid WHERE catering = '1'");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["flightid"] . "</td>
					<td>" . $data["destination"] . "</td>
					<td>" . $data["naam"] . "</td>
					<td>" . $data["type"] . "</td>
					<td>" . $data["date"] . "</td>
				</tr>
			";
		}
		?>
		</table>
	<?php 
	} else if($_GET['page'] == "6") {
	//Keuze 6
	?>
	      <h3>Meest geboekte vluchten</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Aantal boekingen</th>
			<th>Bestemming</th>

		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT COUNT(*) as total,destination FROM `flights` INNER JOIN booking ON booking.flightid = flights.id INNER JOIN planes ON planes.id = flights.planeid INNER JOIN destinations ON flights.to = destinations.abbr INNER JOIN pilots ON pilots.id = flights.pilotid GROUP BY destination ORDER BY total DESC");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["total"] . "</td>
					<td>" . $data["destination"] . "</td>

				</tr>
			";
		}
		?>
		</table>
	 <?php 
	} else if($_GET['page'] == "7") {
	//Keuze 7
	?>
	 <h3>Gebruik per vliegtuig</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Aantal keer gebruikt</th>
			<th>Type</th>
			<th>Staartnummer</th>

		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT COUNT(tailnumber) as total,tailnumber,type FROM `planes` INNER JOIN flights ON flights.planeid = planes.id INNER JOIN booking ON booking.flightid = flights.id GROUP BY tailnumber ORDER BY total DESC");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["total"] . "</td>
					<td>" . $data["type"] . "</td>
					<td>" . $data["tailnumber"] . "</td>

				</tr>
			";
		}
		?>
		</table>
	 <?php 
	} else if($_GET['page'] == "8") {
	//Keuze 8
	?>
	<h3>Onderhoud per vliegtuig</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Laatste onderhoud</th>
			<th>Type</th>
			<th>Staartnummer</th>
			<th>Volgend onderhoud</th>
			<th>Opmerkingen</th>

		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT * FROM `maintenance` INNER JOIN planes ON planes.id = maintenance.planeid ORDER BY nextdate ASC");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["lastdate"] . "</td>
					<td>" . $data["type"] . "</td>
					<td>" . $data["tailnumber"] . "</td>
					<td>" . $data["nextdate"] . "</td>
					<td>" . $data["changes"] . "</td>

				</tr>
			";
		}
		?>
		</table>
		<?php 
	} else if($_GET['page'] == "9") {
	//Keuze 9
	?>
	<h3>Personen per vlucht</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>	
			<th>Vluchtnummer</th>
			<th>Aantal personen</th>
			<th>Staartnummer</th>
			<th>Bestemming</th>

		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT count(booking.flightid) as total, destination,tailnumber, flightid FROM `booking` INNER JOIN users ON booking.userid = users.id INNER JOIN flights ON flights.id = booking.flightid INNER JOIN destinations ON flights.to = destinations.abbr INNER JOIN planes ON planes.id = flights.planeid GROUP BY booking.flightid ORDER BY total DESC");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["flightid"] . "</td>
					<td>" . $data["total"] . "</td>
					<td>" . $data["tailnumber"] . "</td>
					<td>" . $data["destination"] . "</td>
	

				</tr>
			";
		}
		?>
		</table> <?php 
	} else if($_GET['page'] == "10") {
	//Keuze 10
	?>
	
      <h3>Vluchten per piloot</h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Vluchtnummer</th>
			<th>Bestemming</th>
			<th>Piloot</th>
			<th>Type vliegtuig</th>
			<th>Datum<th>
		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT flights.id, destination, naam, type, date FROM `flights` INNER JOIN planes ON planes.id = flights.planeid INNER JOIN destinations ON flights.to = destinations.abbr INNER JOIN pilots ON pilots.id = flights.pilotid ORDER BY pilots.naam ASC");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["id"] . "</td>
					<td>" . $data["destination"] . "</td>
					<td>" . $data["naam"] . "</td>
					<td>" . $data["type"] . "</td>
					<td>" . $data["date"] . "</td>
				</tr>
			";
		}
		?>
		</table>
	 <?php 
	}
	?>
	<?php
if(isset($_POST["text3"])) {
 
if(!is_numeric($_POST['text3'])) { ?>
	<h3>Oeps!</h3>
	<p> <?php echo $_POST["text3"]; ?> is geen nummer, probeer het opnieuw.</p>

<?php	} else {
	$flightid = $_POST["text3"];
?>

<h3>Resulaten voor: <?php echo $_POST["text3"]; ?></h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Vluchtnummer</th>
			<th>Bestemming</th>
			<th>Datum<th>
		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT flights.id, destination, date FROM `flights` INNER JOIN planes ON planes.id = flights.planeid INNER JOIN destinations ON flights.to = destinations.abbr WHERE flights.id = '$flightid'");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["id"] . "</td>
					<td>" . $data["destination"] . "</td>
					<td>" . $data["date"] . "</td>
				</tr>
			";
		}
		?>
		</table>
	
<?php } } ?>
<?php
if(isset($_REQUEST["text2"])) {
 $bestemming = $_REQUEST["text2"];
?>

<h3>Vluchten naar <?php echo $_REQUEST["text2"]; ?></h3>
      <table class="table">
	  <thead class="thead-dark">
		<tr>
			<th>Vluchtnummer</th>
			<th>Bestemming</th>
			<th>Datum<th>
		</tr>
		</thead>
		<?php $query = $db->prepare("SELECT flights.id, destination, date FROM `flights` INNER JOIN planes ON planes.id = flights.planeid INNER JOIN destinations ON flights.to = destinations.abbr WHERE destination LIKE '%$bestemming%'");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as &$data) {
			echo "
				<tr>
					<td>" . $data["id"] . "</td>
					<td>" . $data["destination"] . "</td>
					<td>" . $data["date"] . "</td>
				</tr>
			";
		}
		?>
		</table>
	
<?php } ?>
   
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
