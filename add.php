<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<?php include "header.php"; ?>

<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$purbopurus_name = $_POST['purbopurus_name'];
	$fathers_name = $_POST['fathers_name'];
	$mothers_name = $_POST['mothers_name'];
	$born_in = $_POST['born_in'];
	$died_in = $_POST['died_in'];
	$status = $_POST['status'];
	$history = $_POST['history'];
	$loginId = $_SESSION['id'];
		
		
	// checking empty fields
	if(empty($purbopurus_name) || empty($fathers_name) || empty($mothers_name) || empty($status)) {
				
		if(empty($purbopurus_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($fathers_name)) {
			echo "<font color='red'>Working hour field is empty.</font><br/>";
		}
		
		if(empty($mothers_name)) {
			echo "<font color='red'>Spenting hour field is empty.</font><br/>";
		}

		if(empty($status)) {
			echo "<font color='red'>Status field is empty.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 

	else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO purbopuruses(purbopurus_name, fathers_name, mothers_name,born_in,died_in,status,history,login_id) VALUES('$purbopurus_name','$fathers_name','$mothers_name','$born_in', '$died_in','$status', '$history','$loginId')");
		
		//display success message

		header("Location:view.php");
	}
}
?>
    <div class="container">


      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>আপনার পূর্বপুরুষ অ্যাড করুন</h1>
            
          </div>

        </div>
      </div>

  </div>    

	<form id='create-product-form' action="add.php" method="post" name="form1">
		<table class='table table-hover table-responsive table-bordered'>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="purbopurus_name"  class='form-control' ></td>
			</tr>
			<tr> 
				<td>Fathers Name</td>
				<td><input type="text" name="fathers_name"  class='form-control' ></td>
			</tr>
			<tr> 
				<td>Mothers Name</td>
				<td><input type="text" name="mothers_name"  class='form-control' ></td>
			</tr>	
			<tr> 
				<td>Born In</td>
				<td><input type="text" name="born_in"  class='form-control' ></td>
			</tr>
			<tr> 
				<td>Died In</td>
				<td><input type="text" name="died_in"  class='form-control' ></td>
			</tr>								
			<tr> 
				<td>Status</td>
				<td><input type="text" name="status"  class='form-control' ></td>
			</tr>
			<tr> 
				<td>Hisory</td>
				<td><input type="text" name="history"  class='form-control' ></td>
			</tr>

			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
<?php include "footer.php"; ?>