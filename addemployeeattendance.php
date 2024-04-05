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
					$artt = $employee1 -> addemployeeattendance($T1,$T2,$T3,$T4);
					
					
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

</head>

<body>

<?php include_once 'navigation.html'; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                   Add Employee Information 
                </h3>
            </div>
			<div class="col-lg-2">
			
			</div>
			<div class="col-lg-6">
			<form data-toggle="validator" role="form" method="post" action="">
				  <div class="form-group">
					<label for="email">Att Date:</label>
					<input type="date" name="T1" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Att_Attendance:</label>
					<input type="text" name="T2" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Att_abs_reson :</label>
					<input type="text" name="T3" class="form-control"  required>
					<div class="help-block with-errors"></div>
				  </div>
				  <div class="form-group">
					<label for="email">Att_Abs_Type :</label>
					<input type="text" name="T4" class="form-control"  required>
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
