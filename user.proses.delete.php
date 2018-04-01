<?php 
session_start();

require_once('inc/db.inc.php'); 
$id = $_GET['id'];


//delete satu kali aja, yang penting primary key
$sql = "DELETE FROM user WHERE id = ?";
$pdo->prepare($sql)->execute([$id]);


$_SESSION['message'] = 'Data has been deleted';
header("location: ./");
?>