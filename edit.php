<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['Submit']))
{	
	$id = $_POST['id'];
	
	$purbopurus_name = $_POST['purbopurus_name'];
	$fathers_name = $_POST['fathers_name'];
	$mothers_name= $_POST['mothers_name'];
	$born_in = $_POST['born_in'];
	$died_in = $_POST['died_in'];
	$status = $_POST['status'];	
	$history = $_POST['history'];	
	
	// checking empty fields
	if(empty($purbopurus_name) || empty($fathers_name) || empty($mothers_name) || empty($status)) {
				
		if(empty($purbopurus_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($fathers_name)) {
			echo "<font color='red'>Fathers Name field is empty.</font><br/>";
		}
		
		if(empty($mothers_name)) {
			echo "<font color='red'>mothers_name field is empty.</font><br/>";
		}

		if(empty($status)) {
			echo "<font color='red'>Status field is empty.</font><br/>";
		}

	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE purbopuruses SET purbopurus_name='$purbopurus_name',fathers_name='$fathers_name',mothers_name='$mothers_name',status='$status' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: view.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM purbopuruses WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$purbopurus_name = $res['purbopurus_name '];
	$fathers_name = $res['fathers_name'];
	$mothers_name = $res['mothers_name'];
	$born_in = $res['born_in'];
	$died_in = $res['died_in'];
	$status = $res['status'];
	$history = $res['history'];
}
?>

<?php include "header.php"; ?>

    <div class="container">


      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>আপনার পূর্বপুরুষ আপডেট করুন</h1>
            
          </div>

        </div>
      </div>

  </div>    

	<form id='update-product-form' name="form1" method="post" action="edit.php">
		<table class='table table-bordered table-hover'>
			<tr> 
			<tr> 
				<td>Name</td>
				<td><input type="text" name="purbopurus_name"  class='form-control' value="<?php echo $purbopurus_name;?>"></td>
			</tr>
			</tr>
			<tr> 
				<td>Fathers Name</td>
				<td><input type="text" name="fathers_name"  class='form-control' value="<?php echo $fathers_name;?>"></td>
			</tr>

			<tr> 
				<td>Mothers Name</td>
				<td><input type="text" name="mothers_name" class='form-control' value="<?php echo $mothers_name;?>"></td>
			</tr>
			<tr> 
				<td>Born In</td>
				<td><input type="text" name="born_in" class='form-control' value="<?php echo $born_in;?>"></td>
			</tr>

			<tr> 
				<td>Died In</td>
				<td><input type="text" name="died_in"  class='form-control' value="<?php echo $died_in;?>"></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td><input type="text" name="status"  class='form-control' value="<?php echo $status;?>"></td>
			</tr>

			<tr> 
				<td>History</td>
				<td><input type="text" name="history"  class='form-control' value="<?php echo $history;?>"></td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td>
			

				<input type="submit" name="Submit" value="Update"></td>
			</tr>
		</table>
	</form>
<?php include "footer.php"; ?>