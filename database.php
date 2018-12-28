<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=oceanicairlines","root",""); 
} catch(PDOException $e) {
	die("Error: " .  $e->getMessage());
}
?>