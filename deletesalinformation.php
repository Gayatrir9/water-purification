<?php
    session_start();
	header( 'Content-Type: text/html; charset=utf-8' ); 
    include_once 'includes/class.user.php';
    $user = new User();

	$a = $_GET[emp_id];
	echo $a;
	$sal1 = new User();
	$views = $sal1->deletesalinformation($a);
	header("location:viewsalinformation.php");



?>