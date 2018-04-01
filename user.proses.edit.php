<?php 
session_start();

require_once('inc/db.inc.php'); 

$id = $_GET['id'];

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

//update
$sql = 
"UPDATE
	user 
SET
	company = ?, 
	username = ?,
	email = ?,
	first_name = ?,
	last_name = ?,
	address = ?,
	city = ?,
	country = ?,
	postal_code = ?,
	about_me = ?
		 
WHERE 
	id = ?
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
		$about_me,
		$id
	]); 

$_SESSION['message'] = 'Data has been updated';
header("location: ./");
?>