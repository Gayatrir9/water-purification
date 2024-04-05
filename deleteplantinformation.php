<?php
    session_start();
	header( 'Content-Type: text/html; charset=utf-8' ); 
    include_once 'includes/class.user.php';
    $user = new User();

	$a = $_GET[Plantnoo];
	echo $a;
	$emp = new User();
	$views = $emp->deleteplantinformation($a);
	header("location:viewplantinformation.php");



?>