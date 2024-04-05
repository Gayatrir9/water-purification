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

$metid = $_POST['T1'];
$plno = $_POST['T2'];
$emp_na = $_POST['EMP'];
$rrread = $_POST['T4'];
$wmread = $_POST['T5'];
$readda = $_POST['se6'].'-'.$_POST['se5'].'-'.$_POST['se4'];

//STR_TO_DATE("$atda","%d-%m-%Y")
 $sql1="insert into tbl_meterreading values('$metid','$plno','$emp_na','$rrread','$wmread',STR_TO_DATE('$readda','%Y-%m-%d'),'')";
$res=mysql_query($sql1) or die(mysql_error());

if($res)
{ ?>
  <span class="style2">Inserted
</span>
<?php }
else
{
 ?> <span class="style2"> Not Inserted
</span>
<?php }
				
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
	<?php include_once 'navigation1.html'; ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                   Information Is Inserted 
                </h3>
            </div>
			<div class="col-lg-2">
			
			</div>
			<div class="col-lg-6">
			<form data-toggle="validator" role="form" method="post" action="" enctype="multipart/form-data">
				 
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





















