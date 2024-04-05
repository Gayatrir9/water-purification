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
				$employee1 = new User();
				
				if (isset($_REQUEST['submit']))
				{
					extract($_REQUEST);
					//$imgData = file_get_contents($T11);
					//$imagedata = file_get_contents("$T11");
					//$base64 = base64_encode($imagedata);

					$artt = $employee1 -> addplantinformation($T1,$T2,$T3,$T4,$T5,$T6,$T7,$T8,$T9,$T10,$T13,$T14);
					
				}
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
                   Add Plant Information 
                </h3>
            </div>
			<div class="col-lg-2">
			
			</div>
			<div class="col-lg-6">
			<form data-toggle="validator" role="form" method="post" action="" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="email">Location</label>
					<input type="text" name="T1" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Taluk</label>
					<input type="text" name="T2" class="form-control"  required>
					<div class="help-block with-errors">
					  <div class="with-errors help-block style2"><strong>District</strong></div>
					  <input type="text" name="T3" class="form-control"  required>
					</div>
				  </div>
				  <div class="form-group"><div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Panchayat:</label>
					<input type="text" name="T4" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Plant Address :</label>
					<input type="text" name="T5" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Plant Contact Number :</label>
					<input type="number" name="T6" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Electric Meter Number (R.R. Number) :</label>
					<input type="number" name="T7" class="form-control"  required>
					<div class="help-block with-errors"><span class="style2">
					  <label for="email"></label>
				    <strong>Total Area of The Plant Situated
                    </strong></span>					  
					  <input type="text" name="T8" class="form-control"  required>
					</div>
				  </div>
				  <div class="form-group"><div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Plant Installed Date:</label>
					<span class="style1">
					<input type="date" name="T9" class="form-control"  required>
					</span>
					<div class="help-block with-errors"><strong>
					  <label for="email">:</label>
					  <span class="style2">Plant Water Capacity</span>                    </strong>					  
					  <input type="number" name="T10" class="form-control"  required>
					</div>
				  </div>
				  <div class="form-group"><div class="help-block with-errors"></div>
				  </div>
				 <!--  <div class="form-group">
					<label for="email">Plnt_Snap(Photo scanned and uploaded):</label>
					<input type="file" name="T11" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Plnt_agreement(Agreement copy will be scanned and uploaded where the path should be stored):</label>
					<input type="file" name="T12" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div> -->
				  <div class="form-group">
					<label for="email">T D S Information Of The Plant </label>
					<input type="text" name="T13" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Water Problems :</label>
					<input type="text" name="T14" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  
				  <button type="submit" name="submit" class="btn btn-default">Submit</button>
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
