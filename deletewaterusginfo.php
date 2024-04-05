<?php
    session_start();
	header( 'Content-Type: text/html; charset=utf-8' ); 
    include_once 'includes/class.user.php';
    $user = new User();

	$a = $_GET[wt_id];
	echo $a;
	$waterusg11 = new User();
	$views = $waterusg11->deletewaterusginfo($a);
	header("location:viewwaterusginfo.php");



?>