<?php
    session_start();
	header( 'Content-Type: text/html; charset=utf-8' ); 
    include_once 'includes/class.user.php';
    $user = new User();

	$a = $_GET[Emp_Id];
	echo $a;
	$emp = new User();
	$views = $emp->deleteemployeeattendance($a);
	header("location:viewemployeeattendance.php");



?>