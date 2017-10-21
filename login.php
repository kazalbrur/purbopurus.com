<?php session_start(); ?>
<?php include "header.php"; ?>
    <div class="container">


      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>প্লিজ লগ ইন করুন</h1>
            
          </div>

        </div>
      </div>

  </div>    
<?php 
	
	include("connection.php");

	if(isset($_POST['submit'])){

		$user = mysqli_real_escape_string($mysqli,$_POST['username']);
		$pass = mysqli_real_escape_string($mysqli,$_POST['password']);
	
		if($user == "" || $pass == ""){

			echo "Sob Input ki tor bapr dibe bokachandro ? ";
			echo "<br/>";
			echo "<a href = 'login.php'> Dure Gia Mor </a>";	
		}

		else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}


		if (isset($_SESSION['valid'])) {
			header('Location: index.php');
		}
	}
}

	else {
		?>



	<form id='create-product-form' action="" method="post" name="form1">
		<table class='table table-hover table-responsive table-bordered'>
			<tr> 

				<td>User Name</td>
				<td><input type="text" name="username"  class='form-control' ></td>
			</tr>	
			<tr> 

				<td>Password</td>
				<td><input type="password" name="password"  class='form-control' ></td>
			</tr>	


			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="login"></td>
			</tr>
		</table>
	</form>

<?php
}
?>
<?php include "footer.php"; ?>