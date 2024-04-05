<?php 
error_reporting(1);
  	header( 'Content-Type: text/html; charset=utf-8' ); 

	include "db_config.php";

	class User{
		
		public $db;
		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		
			if(mysqli_connect_errno()) {
	 
				echo "Error: Could not connect to database.";
	 
			exit;
 
			}
		}
		/*** for login process ***/
		public function check_login($UserName,$Password){
        	
        	//$password = md5($password);
			$sql="SELECT * from admin WHERE username='$UserName' and password='$Password'";
			
			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
		
	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true; 
	            $_SESSION['username'] = $user_data['username'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}
		//For adding employee information
		public function employeeadd($T1,$T2,$T3,$T4,$T5,$T6,$T7,$T8){
			$sql="INSERT INTO employee_information SET Emp_first_name='$T1',Emp_Fa_Name='$T2',Emp_La_Name='$T3',Emp_DOB='$T4',Emp_Addr='$T5',Emp_Jdate='$T6',Emp_Mb_No='$T7',Emp_Location='$T8'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if($result == 0)
				{
					print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Warning!</h4>
					Error occured during Inserting Values
					 </div>";
				}
				else
				{
					print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Values has been added successfully
					 </div>";
				}
    	}
		//view employee information
		public function viewemployeeinfo() {
			$sql="SELECT * from employee_information";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
   			 // output data of each row
   				 while($row = $result->fetch_assoc()) 
				 {
   			    // echo "BookName: " . $row["bookname"]. " - Booktitle: " . $row["booktitle"]. " <br>";
				 echo "<tr>
                  <td>" . $row["Emp_id"]. "</td>
                  <td>" . $row["Emp_first_name"]. "</td>
				  <td>" . $row["Emp_Fa_Name"]. "</td>
				  <td>" . $row["Emp_La_Name"]. "</td>
     			  <td>" . $row["Emp_DOB"]. "</td>
				  <td>" . $row["Emp_Addr"]. "</td>
				  <td>" . $row["Emp_Jdate"]. "</td>
			      <td>" . $row["Emp_Mb_No"]. "</td>
				  <td>" . $row["Emp_Location"]. "</td>
				  <td><a href='deleteemployeeinfo.php?Emp_Id=" . $row["Emp_id"]. "'><span class='glyphicon glyphicon-trash'></span></a></td>
                </tr>";
				}
		   }
		}
		public function viewreginfo() {
			$sql="SELECT * from shudha_reg";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
   			 // output data of each row
   				 while($row = $result->fetch_assoc()) 
				 {
   			    // echo "BookName: " . $row["bookname"]. " - Booktitle: " . $row["booktitle"]. " <br>";
				 echo "<tr>
                  <td>" . $row["Reg_no"]. "</td>
                  <td>" . $row["Emp_no"]. "</td>
				  <td>" . $row["Desig"]. "</td>
				  <td>" . $row["Plantoo"]. "</td>
     			  <td><a href='deleteemployeeinfo.php?Emp_Id=" . $row["Emp_id"]. "'><span class='glyphicon glyphicon-trash'></span></a></td>
                </tr>";
				}
		   }
		}
		//delete employee information
		public function deleteemployeeinfo($a) {
			$sql1="DELETE FROM employee_information WHERE Emp_id='$a'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
		}
		//For adding employee attendance
		public function addemployeeattendance($T1,$T2,$T3,$T4){
			$sql="INSERT INTO employee_attendance SET Att_Date='$T1',Att_Attendance='$T2',Atttabsreasons='$T3',Attabsenttype='$T4'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if($result == 0)
				{
					print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Warning!</h4>
					Error occured during Inserting Values
					 </div>";
				}
				else
				{
					print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Values has been added successfully
					 </div>";
				}
    	}
		
		//view employee attendance
		public function viewemployeeattendance() {
			$sql="SELECT * from employee_attendance";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
   			 // output data of each row
   				 while($row = $result->fetch_assoc()) 
				 {
   			    // echo "BookName: " . $row["bookname"]. " - Booktitle: " . $row["booktitle"]. " <br>";
				 echo "<tr>
                  <td>" . $row["Emp_id"]. "</td>
                  <td>" . $row["Att_Date"]. "</td>
				  <td>" . $row["Att_Attendance"]. "</td>
				  <td>" . $row["Atttabsreasons"]. "</td>
     			  <td>" . $row["Attabsenttype"]. "</td>
				  <td><a href='deleteemployeeattendance.php?Emp_Id=" . $row["Emp_id"]. "'><span class='glyphicon glyphicon-trash'></span></a></td>
                </tr>";
				}
		   }
		}
		//delete employee attendance
		public function deleteemployeeattendance($a) {
			$sql1="DELETE FROM employee_attendance WHERE Emp_id='$a'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
		}
		//For adding plant information
		public function addplantinformation($T1,$T2,$T3,$T4,$T5,$T6,$T7,$T8,$T9,$T10,$T13,$T14){
		 // $tmpName = $_FILES['$T11']['tmp_name'];
        // $tmpName =addslashes(file_get_contents($_FILES['T11']['tmp_name']));
		
			
			$sql="INSERT INTO plant_information SET PlantLocation='$T1',PlantTaluk='$T2',PlantDistrict='$T3',PlantPanchayat='$T4',PlantAddr='$T5',PlantPhNo='$T6',PlantRRNo='7',PlantArea='$T8',PlantInstDate='$T9',PlantwtrCapacity='$T10',PlantSnap='0',Plantagreement='0',PlantTdsData='$T13',PlantWaterProbs='$T14'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if($result == 0)
				{
					print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Warning!</h4>
					Error occured during Inserting Values
					 </div>";
				}
				else
				{
					print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Values has been added successfully
					 </div>";
				}
    	}
		//view plant information
		public function viewplantinformation() {
			$sql="SELECT * from plant_information";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
   			 // output data of each row
   				 while($row = $result->fetch_assoc()) 
				 {
   			    // echo "BookName: " . $row["bookname"]. " - Booktitle: " . $row["booktitle"]. " <br>";
				 echo "<tr>
                  <td>" . $row["Plantnoo"]. "</td>
				  <td>" . $row["PlantLocation"]. "</td>
				  <td>" . $row["PlantTaluk"]. "</td>
				  <td>" . $row["PlantDistrict"]. "</td>
				  <td>" . $row["PlantPanchayat"]. "</td>
				  <td>" . $row["PlantAddr"]. "</td>
				  <td>" . $row["PlantPhNo"]. "</td>
				  <td>" . $row["PlantRRNo"]. "</td>
				  <td>" . $row["PlantArea"]. "</td>
				  <td>" . $row["PlantInstDate"]. "</td>
				  <td>" . $row["PlantwtrCapacity"]. "</td>
				  <td>" . $row["PlantTdsData"]. "</td>
				  <td>" . $row["PlantWaterProbs"]. "</td>
				  
                  
				  <td><a href='deleteplantinformation.php?Plantnoo=" . $row["Plantnoo"]. "'><span class='glyphicon glyphicon-trash'></span></a></td>
				  <td><a href='editplantinformation.php?Plantnoo=" . $row["Plantnoo"]. "'>Edit</a></td>
                </tr>";
				}
		   }
		}
		
		//delete plant information
		public function deleteplantinformation($a) {
			$sql1="DELETE FROM plant_information WHERE Plantnoo='$a'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
		}
		//add items information
    	/*** starting the session ***/
	    public function get_session(){    
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }
	
	//**** Adding Items Information ****
	public function itemsadd($T1,$T2){
			$sql="INSERT INTO Items SET Item_name='$T1',Item_reach_date='$T2'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if($result == 0)
				{
					print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Warning!</h4>
					Error occured during Inserting Values
					 </div>";
				}
				else
				{
					print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Values has been added successfully
					 </div>";
				}
    	}
		
		//***** view items information
		public function viewitemsinfo() {
			$sql="SELECT * from Items";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
   			 // output data of each row
   				 while($row = $result->fetch_assoc()) 
				 {
   			    // echo "BookName: " . $row["bookname"]. " - Booktitle: " . $row["booktitle"]. " <br>";
				 echo "<tr>
                  <td>" . $row["Item_no"]. "</td>
                  <td>" . $row["Item_name"]. "</td>
				  <td>" . $row["Item_reach_date"]. "</td>
				  <td><a href='deleteitemsinformation.php?Item_no=" . $row["Item_no"]. "'><span class='glyphicon glyphicon-trash'></span></a></td>
                </tr>";
				}
		   }
		}
		
		//**** Delete the items information
		public function deleteitemsinformation($a) {
			$sql1="DELETE FROM Items WHERE Item_no='$a'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
		}
		
		//***** Adding Stock Information
		public function stockadd($T1,$T2){
			$sql="INSERT INTO stock_maintainance SET Stock_item_used='$T1',Stock_date='$T2'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if($result == 0)
				{
					print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Warning!</h4>
					Error occured during Inserting Values
					 </div>";
				}
				else
				{
					print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Values has been added successfully
					 </div>";
				}
    	}
		
		//***** View Stock information
		public function viewstockinformation() {
			$sql="SELECT * from stock_maintainance";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
   			 // output data of each row
   				 while($row = $result->fetch_assoc()) 
				 {
   			    // echo "BookName: " . $row["bookname"]. " - Booktitle: " . $row["booktitle"]. " <br>";
				 echo "<tr>
                  <td>" . $row["Stock_item_no"]. "</td>
                  <td>" . $row["Stock_item_used"]. "</td>
				  <td>" . $row["Stock_date"]. "</td>
				  <td><a href='deletestockinformation.php?Stock_item_no=" . $row["Stock_item_no"]. "'><span class='glyphicon glyphicon-trash'></span></a></td>
				   <td><a href='editstockinformation.php?Stock_item_no=" . $row["Stock_item_no"]. "'>Edit</a></td>
                </tr>";
				}
		   }
		}
		
		//**** Delete the items information
		public function deletestockinformation($a) {
			$sql1="DELETE FROM stock_maintainance WHERE Stock_item_no='$a'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
		}
		
		//****** Adding Employee Salary Info
		public function saladd($T1,$T2,$T3,$T4,$T5,$T6,$T7,$T8,$T9){
			
			$sql="INSERT INTO emp_sal_info SET sal_date='$T1',sal_amt='$T2',sal_amt_ded='$T3',mch_info='$T4',mch_name='$T5',mch_inst_date='$T6',mch_dist_name='$T7',mch_eng_name='$T8',mch_eng_no='$T9'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if($result == 0)
				{
					print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Warning!</h4>
					Error occured during Inserting Values
					 </div>";
				}
				else
				{
					print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Values has been added successfully
					 </div>";
				}
    	}
		
		//***** View Emplyee Salary Info
		public function viewsalinformation() {
			$sql="SELECT * from emp_sal_info";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
   			 // output data of each row
   				 while($row = $result->fetch_assoc()) 
				 {
   			    // echo "BookName: " . $row["bookname"]. " - Booktitle: " . $row["booktitle"]. " <br>";
				 echo "<tr>
                  <td>" . $row["emp_id"]. "</td>
                  <td>" . $row["sal_date"]. "</td>
				  <td>" . $row["sal_amt"]. "</td>
				  <td>" . $row["sal_amt_ded"]. "</td>
				  <td>" . $row["mch_info"]. "</td>
				  <td>" . $row["mch_name"]. "</td>
				  <td>" . $row["mch_inst_date"]. "</td>
				  <td>" . $row["mch_dist_name"]. "</td>
				  <td>" . $row["mch_eng_name"]. "</td>
			   	 <td>" . $row["mch_eng_no"]. "</td>
				  <td><a href='deletesalinformation.php?emp_id=" . $row["emp_id"]. "'><span class='glyphicon glyphicon-trash'></span></a></td>
                </tr>";
				}
		   }
		}
		
		//**** Delete Employee Salary information
		public function deletesalinformation($a) {
			$sql1="DELETE FROM emp_sal_info WHERE emp_id='$a'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
			
		}
		
		//***** Adding Water usage information
		public function  waterusgadd($T1,$T2,$T3,$T4,$T5,$T6) {
		$sql="INSERT INTO water_usg SET wt_date='$T1',wt_mtr_read1='$T2',wt_mtr_read2='$T3',wt_tot_usage='$T4',wt_cash_gross='$T5',wt_cash_col_by='$T6'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if($result == 0)
				{
					print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Warning!</h4>
					Error occured during Inserting Values
					 </div>";
				}
				else
				{
					print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Values has been added successfully
					 </div>";
				}
    	}
		
		//****** View Water usage information
		public function viewwaterusageinfo() {
			$sql="SELECT * from water_usg";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
   			 // output data of each row
   				 while($row = $result->fetch_assoc()) 
				 {
   			    // echo "BookName: " . $row["bookname"]. " - Booktitle: " . $row["booktitle"]. " <br>";
				 echo "<tr>
                  <td>" . $row["wt_id"]. "</td>
                  <td>" . $row["wt_date"]. "</td>
				  <td>" . $row["wt_mtr_read1"]. "</td>
				  <td>" . $row["wt_mtr_read2"]. "</td>
				  <td>" . $row["wt_tot_usage"]. "</td>
				  <td>" . $row["wt_cash_gross"]. "</td>
				  <td>" . $row["wt_cash_col_by"]. "</td>
				  <td><a href='deletewaterusginfo.php?wt_id=" . $row["wt_id"]. "'><span class='glyphicon glyphicon-trash'></span></a></td>
				  <td><a href='editwaterusginfo.php?wt_id=" . $row["wt_id"]. "'>Edit</span></a></td>
                </tr>";
				}
		   }
		}
		//**** Delete Water usage info
		public function deletewaterusginfo($a) {
			$sql1="DELETE FROM water_usg WHERE wt_id='$a'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
			
		}
		/** for plant informatin**/
		public function editplantinformation($a)
		{
			$result = mysql_query("SET NAMES utf8"); //the main trick
			$sql="SELECT * FROM plant_information where Plantnoo='$a'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				 {
					echo"
				<form data-toggle='validator' role='form' method='post' action='' enctype='multipart/form-data'>
				  <div class='form-group'>
					<label for='email'>Plnt_Location(Name of the City):</label>
					<input type='text' name='T1' class='form-control' value=". $row["PlantLocation"]."  required>
					<input type='hidden' name='T11' class='form-control' value=". $row["Plantnoo"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_Taluk:</label>
					<input type='text' name='T2' class='form-control' value=". $row["PlantTaluk"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_District:</label>
					<input type='text' name='T3' class='form-control' value=". $row["PlantDistrict"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_Panchayat:</label>
					<input type='text' name='T4' class='form-control' value=". $row["PlantPanchayat"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_Addr:</label>
					<input type='text' name='T5' class='form-control' value=". $row["PlantAddr"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_Ph_No:</label>
					<input type='number' name='T6' class='form-control' value=". $row["PlantPhNo"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_RR_No:</label>
					<input type='number' name='T7' class='form-control' value=". $row["PlantRRNo"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_Area (This field is used to store area in which the plant installed in city):</label>
					<input type='text' name='T8' class='form-control' value=". $row["PlantArea"]." required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_Inst_Date:</label>
					<input type='date' name='T9' class='form-control'  value=". $row["PlantInstDate"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_wtr_Capacity(Capacity of storage which hold the purefied water):</label>
					<input type='number' name='T10' class='form-control' value=". $row["PlantwtrCapacity"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_Tds_Data:</label>
					<input type='text' name='T13' class='form-control' value=". $row["PlantSnap	"]." required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Plnt_Water_Probs:</label>
					<input type='text' name='T14' class='form-control' value=". $row["PlantWaterProbs"]." required>
					<div class='help-block with-errors'></div>
				  </div>
				  
				  <button type='submit' name='submit' class='btn btn-default'>Submit</button>
			</form>
			</div>";

				 }
			}
			else
			{
				print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Warning!</h4>
					No  data
					 </div>";
			}
		}
/** for updated edited editplantinformation**/
		public function editplantinformationn($T1,$T2,$T3,$T4,$T5,$T6,$T7,$T8,$T9,$T10,$T13,$T14,$T11)
		{
			
			//$sql1="UPDATE articles SET categoryid='$T2',subcategoryid='$T3',folderid='$T4',subfolderid='$T5',title='$T6',shortdescription='$article' where serialnumber='$T1'";
			$sql1="UPDATE plant_information SET PlantLocation='$T1',PlantTaluk='$T2',PlantDistrict='$T3',PlantPanchayat='$T4',PlantAddr='$T5',PlantPhNo='$T6',PlantRRNo='$T7',PlantArea='$T8',
			PlantInstDate='$T9',PlantwtrCapacity='$T10',PlantTdsData='$T13',PlantWaterProbs='$T14' where Plantnoo='$T11'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
			if($result == 0)
			{
				print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Failur!</h4>
					Update Failure</div>";
			}
			else
			{
				print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Update Success</div>";
			}
		}
		/** for edit water usage info**/
		public function editwaterusageinfo($a)
		{
			$result = mysql_query("SET NAMES utf8"); //the main trick
			$sql="SELECT * FROM water_usg where wt_id='$a'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				 {
					echo"
					<form data-toggle='validator' role='form' method='post' action=''>
				  <div class='form-group'>
				  <label for='email'>Date:</label>
					<input type='date' name='T1' class='form-control'  value=". $row["wt_date"]."  required>
					<input type='hidden' name='T11' class='form-control'  value=". $row["wt_id"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
				  <label for='email'>Meter reading 1:</label>
					<input type='number' name='T2' class='form-control'  value=". $row["wt_mtr_read1"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
				  <label for='email'>Meter reading 2:</label>
					<input type='number' name='T3' class='form-control'  value=". $row["wt_mtr_read2"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
				  <label for='email'>Total Usage:</label>
					<input type='number' name='T4' class='form-control'  value=". $row["wt_tot_usage"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
				  <label for='email'>Cash Gross:</label>
					<input type='number' name='T5' class='form-control'  value=". $row["wt_cash_gross"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
				  <label for='email'>Collection Cash:</label>
					<input type='number' name='T6' class='form-control'  value=". $row["wt_cash_col_by"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <button type='submit' name='submit' class='btn btn-default'>Submit</button>
			</form>
				
			</div>";

				 }
			}
			else
			{
				print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Article is not present with this Article number
					 </div>";
			}
		}
/** for updated edited editplantinformation**/
		public function editwaterusageinfoo($T1,$T2,$T3,$T4,$T5,$T6,$T11)
		{
			
			//$sql1="UPDATE articles SET categoryid='$T2',subcategoryid='$T3',folderid='$T4',subfolderid='$T5',title='$T6',shortdescription='$article' where serialnumber='$T1'";
			$sql1="UPDATE  water_usg SET wt_date='$T1',wt_mtr_read1='$T2',wt_mtr_read2	='$T3',wt_tot_usage='$T4',wt_cash_gross='$T5',wt_cash_col_by='$T6' where wt_id='$T11'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
			if($result == 0)
			{
				print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Failur!</h4>
					 not updated</div>";
			}
			else
			{
				print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					 updated</div>";
			}
		}
		/** for stock informatin**/
		public function stockinfoedit($a)
		{
			$result = mysql_query("SET NAMES utf8"); //the main trick
			$sql="SELECT * FROM stock_maintainance WHERE Stock_item_no='$a'";
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				 {
					echo"
				<form data-toggle='validator' role='form' method='post' action='' enctype='multipart/form-data'>
				  <div class='form-group'>
				  <label for='email'>Stock Name:</label>
					<input type='text' name='T1' class='form-control' value=". $row["Stock_item_used"]." required>
					<input type='hidden' name='T11' class='form-control' value=". $row["Stock_item_no"]."  required>
					<div class='help-block with-errors'></div>
				  </div>
				  <div class='form-group'>
					<label for='email'>Stock Date:</label>
					<input type='date' name='T2' class='form-control' value=". $row["Stock_date"]." required>
					<div class='help-block with-errors'></div>
				  </div>
				  <button type='submit' name='submit' class='btn btn-default'>Submit</button>
				  </form>
			</div>";

				 }
			}
			else
			{
				print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					Article is not present with this Article number
					 </div>";
			}
		}
		public function updatestockinfo($T1,$T2,$T11)
		{
			
			//$sql1="UPDATE articles SET categoryid='$T2',subcategoryid='$T3',folderid='$T4',subfolderid='$T5',title='$T6',shortdescription='$article' where serialnumber='$T1'";
			$sql1="UPDATE stock_maintainance SET Stock_item_used='$T1',Stock_date='$T2' where Stock_item_no='$T11'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot deleted");
			if($result == 0)
			{
				print "<div class='alert alert-danger alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Failur!</h4>
					 not updated</div>";
			}
			else
			{
				print "<div class='alert alert-success alert-dismissible'>
					 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
					<h4><i class='icon fa fa-info'></i>Success!</h4>
					 updated</div>";
			}
		}

}		
?>