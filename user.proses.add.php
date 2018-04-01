<?php 
session_start();

require_once('inc/db.inc.php'); 


$company = $_POST['company'];
$username = $_POST['username'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$postal_code = $_POST['postal_code'];
$about_me = $_POST['about_me'];

//insert
$sql = 
"INSERT INTO 
	user (
		company, 
		username,
		email,
		first_name,
		last_name,
		address,
		city,
		country,
		postal_code,
		about_me
		) 
		VALUES 
		( 
			?,?,?,?,?,?,?,?,?,?
		)
";
$pdo->prepare($sql)->execute([
		$company, 
		$username, 
		$email,
		$first_name,
		$last_name,
		$address,
		$city,
		$country,
		$postal_code,
		$about_me
	]); 

$_SESSION['message'] = 'Data has been saved';
header("location: ./");
?>