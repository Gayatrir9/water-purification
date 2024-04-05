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

				$emp = $_POST['empl'];

$sql="select * from plant_information";
$res=mysql_query($sql) or die(mysql_error()); 

$sql1="select * from employee_information where Emp_first_name = '$emp' ";
$res1=mysql_query($sql1) or die(mysql_error()); 
$rem1=mysql_fetch_array($res1)


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
.style1 {font-weight: bold}
.style2 {color: #000000}
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
	<?php include_once 'navigation.html'; ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                   Employee Registration </h3>
            </div>
			<div class="col-lg-2">
			
			</div>
			<div class="col-lg-6">
			<form data-toggle="validator" role="form" method="post" action="EmpRegister2.php" enctype="multipart/form-data">
				  <table width="642" border="1">
    <tr>
      <td colspan="4"><div align="center" class="style2">Employee Registration </div></td>
    </tr>
    <tr>
      <td width="204"><span class="style2">Employee No </span></td>
      <td width="144"><input name="T1" type="text" id="T1" value="<?php echo $rem1[0] ?> "></td>
      <td width="114"><span class="style2">Name</span></td>
      <td width="152"><input name="T2" type="text" id="T2" value="<?php echo $rem1[1] ?> "></td>
    </tr>
    <tr>
      <td><span class="style2">Plant No </span></td>
      <td><select name="PN" id="PN">
	   <?php  while($rem=mysql_fetch_array($res)) 
		             { ?>
						  <option><?php echo "$rem[0]";?></option>
			  <?php } ?>
      </select></td>
      <td><span class="style2">Designation</span></td>
      <td><select name="DS" id="DS">
        <option selected>Admin</option>
        <option>Cashier</option>
        <option>Operator</option>
      </select></td>
    </tr>
    <tr>
      <td><span class="style2">Pass Word </span></td>
      <td colspan="3"><input name="T3" type="text" id="T3" required ></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <input type="submit" name="Submit" value="Submit">
      </div></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><span class="style4">Note : If Allready Information Is Existing , It Will Be Over Written </span></div></td>
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






















