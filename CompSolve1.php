<?php
    session_start();
	header( 'Content-Type: text/html; charset=utf-8' ); 
    include_once 'includes/class.user.php';
    $user = new User();

    $Email = $_SESSION['username'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
?>
<?php

$host="localhost"; //replace with database hostname 
$username="root"; //replace with database username 
$password=""; //replace with database password 
$db_name="demo"; //replace with database name

$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$plno = $_POST['empl'];

$sql="select * from plant_information where Plantnoo = $plno ";
$res=mysql_query($sql) or die(mysql_error());
$rem=mysql_fetch_array($res); 

$sql1="select * from engineer where status = 'ACTIVE' ";
$res1=mysql_query($sql1) or die(mysql_error()); 
//$rem1=mysql_fetch_array($res1);

$sql33="select *  from complaint where Plant_No = $plno and status = 1";
$res33=mysql_query($sql33) or die(mysql_error()); 
//$rem1=mysql_fetch_array($res1);


$sql3="select max(Comp_Solve_No) from comp_solved" ;
$res3=mysql_query($sql3) or die(mysql_error());
$rem3=mysql_fetch_array($res3);

$num = $rem3[0]+1


			?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHUDDHA NEERU</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
<!--
.style2 {color: #000000}
.style4 {color: #000000; font-weight: bold; }
-->
    </style>
</head>

<body>

    <!-- Navigation -->
    <!--nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!--div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SHUDDHA NEERU</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Plant Information<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="addplantinformation.php">Add </a>
                            </li>
							 <li>
                                <a href="viewplantinformation.php">View </a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Information<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="addemployeeinfo.php">Add </a>
                            </li>
							 <li>
                                <a href="viewemployeeinfo.php">View </a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Attendance<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="addemployeeattendance.php">Add </a>
                            </li>
							 <li>
                                <a href="viewemployeeattendance.php">View </a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Items<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="additemsinformation.php">Add </a>
                            </li>
							 <li>
                                <a href="viewitemsinformation.php">View </a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock Maintainance<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="addstockinformation.php">Add </a>
                            </li>
							 <li>
                                <a href="viewstockinformation.php">View </a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Sal Info<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="addsalinformation.php">Add </a>
                            </li>
							 <li>
                                <a href="viewsalinformation.php">View </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="home.php?q=logout">Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!--/div>
        <!-- /.container>
    </nav -->
	<?php include_once 'navigation1.html'; ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                   Complaint Solution</h3>
            </div>
			<div class="col-lg-2">
			
			</div>
			<div class="col-lg-6">
			<form data-toggle="validator" role="form" method="post" action="CompSolve2.php" enctype="multipart/form-data">
				  <table width="658" border="1">
    <tr>
      <td colspan="4"><div align="center" class="style2">Employee Attendance </div></td>
    </tr>
    <tr>
      <td width="198"><span class="style4">Auto Gen Id </span></td>
      <td width="141"><input name="T1" type="text" id="T1" value="<?php echo $num ?>" required ></td>
      <td width="110" rowspan="3"><span class="style4">Plant Address </span></td>
      <td width="181" rowspan="3"><textarea name="T6" id="T6"><?php echo $rem[5] ?> </textarea></td>
    </tr>
    <tr>
      <td height="34"><span class="style4">Plant Number </span></td>
      <td><input name="T2" type="text" id="T2" value="<?php echo $rem[0] ?> "></td>
      </tr>
    <tr>
      <td height="29"><strong>Complaint</strong></td>
      <td><select name="CMP" id="CMP">
	    <?php  while($rem33=mysql_fetch_array($res33)) 
		             { ?>
						  <option><?php echo "$rem33[0]";?></option>
			  <?php } ?>
	  
      </select></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Solved By </strong></div></td>
      <td><div align="center">
        <select name="ENG" id="ENG">
          <?php  while($rem1=mysql_fetch_array($res1)) 
		             { ?>
          <option><?php echo "$rem1[1]";?></option>
          <?php } ?>
        </select>
      </div></td>
      <td><div align="center"><strong>Solved Date</strong></div></td>
      <td><select name="se4" id="se4">
        <option selected>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
        <select name="se5" id="se5">
          <option selected>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
        <select name="se6" id="se6">
          <option selected>2010</option>
          <option>2011</option>
          <option>2012</option>
          <option>2013</option>
          <option>2014</option>
          <option>2015</option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
                </select></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Solution Given        </strong></div></td>
    <td><textarea name="T3" id="T3"></textarea></td>
      <td>Satus</td>
      <td><input name="T5" type="text" id="T5" value="SOLVED"></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <input type="submit" name="Submit" value="Submit">
      </div></td>
    </tr>
  </table>
			</form>
			
			</div>
        </div>
       

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="validator/validator.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>






















