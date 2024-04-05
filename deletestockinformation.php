<?php
    session_start();
	header( 'Content-Type: text/html; charset=utf-8' ); 
    include_once 'includes/class.user.php';
    $user = new User();

	$a = $_GET[Stock_item_no];
	echo $a;
	$stock = new User();
	$views = $stock->deletestockinformation($a);
	header("location:viewstockinformation.php");



?>