<?php
 $host="localhost"; //replace with database hostname 
$username="root"; //replace with database username 
$password=""; //replace with database password 
$db_name="demo"; //replace with database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

	include "../libchart/classes/libchart.php";
	$Ja=0;$Fe=0;$Ma=0;$Ap=0;$May=0;$jun=0;$jul=0;$Aug=0;$Sep=0;$Oct=0;$Nov=0;$Dec=0;
	
	
	//SELECT MONTH( Meter_Date ) FROM `tbl_meterreading` WHERE MONTH( Meter_Date ) = 1
	
	 $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '1' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '1' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
    
	 $MonH = $rem3[0];
	// echo $MonH.'   ';
	
	$Ja = ($MonH - $MonL );
	//echo $Ja;
	 
	 $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '2' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '2' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	 //echo $MonH.'  ';
	 $Fe = ($MonH - $MonL );
	 // echo $Fe;
	  
	  
	  $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '3' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '3' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	// echo $MonH.'  ';
	
	$Ma = ($MonH - $MonL );
	//echo $Ma;
	 
	  $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '4' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	 //echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '4' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	 //echo $MonH.'  ';
	 
	 $Ap = ($MonH - $MonL );
	//echo $Ap;
	 
	  $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '5' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '5' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
    
	 $MonH = $rem3[0];
	// echo $MonH.'   ';
	
	$May = ($MonH - $MonL );
	//echo $May;
	 
	 $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '6' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '6' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	 //echo $MonH.'  ';
	 $jun = ($MonH - $MonL );
	//  echo $jun;
	  
	  
	  $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '7' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '7' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	// echo $MonH.'  ';
	
	$jul = ($MonH - $MonL );
	//echo $jul;
	 
	  $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '8' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	 //echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '8' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	 //echo $MonH.'  ';
	 
	 $Aug = ($MonH - $MonL );
	//echo $Aug;
	
	  $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '9' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '9' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
    
	 $MonH = $rem3[0];
	// echo $MonH.'   ';
	
	$Sep = ($MonH - $MonL );
	//echo $Sep;
	 
	 $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '10' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '10' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	 //echo $MonH.'  ';
	 $Oct = ($MonH - $MonL );
	//  echo $Oct;
	  
	  
	  $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '11' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	// echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '11' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	// echo $MonH.'  ';
	
	$Nov = ($MonH - $MonL );
	//echo $Nov;
	 
	  $sql2 = " SELECT Water_M_No, MONTH(Meter_Date) FROM tbl_meterreading where MONTH(Meter_Date) = '12' ORDER BY Water_M_No ";
	 $res2=mysql_query($sql2) or die(mysql_error()); 
     $rem2=mysql_fetch_array($res2);
     $MonL = $rem2[0];
	 //echo '  '.$MonL.'  ';
	 
	 $sql3 = "SELECT Water_M_No, month(Meter_Date) FROM tbl_meterreading where month(Meter_Date) = '12' ORDER BY Water_M_No DESC  ";
	 $res3=mysql_query($sql3) or die(mysql_error()); 
     $rem3=mysql_fetch_array($res3);
     
	 $MonH = $rem3[0];
	 //echo $MonH.'  ';
	 
	 $Dec = ($MonH - $MonL );
	//echo $Dec;
	
	
	
	
	
	$chart = new HorizontalBarChart(800, 600); //Used to adjust Height and Width
   	$dataSet = new XYDataSet();
	if($Ja != 0)
	$dataSet->addPoint(new Point("January", $Ja));
	if($Fe != 0)
	$dataSet->addPoint(new Point("February", $Fe));
	if($Ma != 0)
	$dataSet->addPoint(new Point("March", $Ma));
	if($Ap != 0)
	$dataSet->addPoint(new Point("April", $Ap));
	if($May != 0)
	$dataSet->addPoint(new Point("May", $May));
	if($jun != 0)
	$dataSet->addPoint(new Point("June", $jun));
	if($jul != 0)
	$dataSet->addPoint(new Point("July", $jul));
	if($Aug != 0)
	$dataSet->addPoint(new Point("August", $Aug));
	if($Sep != 0)
	$dataSet->addPoint(new Point("September", $Sep));
	if($Oct != 0)
	$dataSet->addPoint(new Point("October", $Oct));
	if($Nov != 0)
	$dataSet->addPoint(new Point("November", $Nov));
	if($Dec != 0)
	$dataSet->addPoint(new Point("December", $Dec));
	$chart->setDataSet($dataSet);
	$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 140));

	$chart->setTitle("Water Usage In Plant");
	$chart->render("generated/demo2.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart horizontal bars demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Horizontal bars chart"  src="generated/demo2.png" style="border: 1px solid gray;"/>
</body>
</html>
