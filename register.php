<?php include "header.php"; ?>
    <div class="container">


      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>প্লিজ রেজিস্টার করুন</h1>
            
          </div>

        </div>
      </div>

  </div>   
<?php 
	
	include("connection.php");

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$user = $_POST['username'];
		$pass = $_POST['password'];
	
		if($user == "" || $pass == "" || $name == "" || $email =="" || $pass ==""){

			echo "Sob Input ki tor bapr dibe bokachandro ? ";
			echo "<br/>";
			echo "<a href = 'register.php'> Go Back</a>";	
		}

		else {

			mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='login.php'>Login</a>";
	
		}
	}

	else {
		?>


	<form id='create-product-form' action="" method="post" name="form1">
		<table class='table table-hover table-responsive table-bordered'>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"  class='form-control' ></td>
			</tr>
			<tr> 
				<td>Email Address</td>
				<td><input type="text" name="email"  class='form-control' ></td>
			</tr>
			<tr> 
				<td>User Name</td>
				<td><input type="text" name="username"  class='form-control' ></td>
			</tr>	
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"  class='form-control' ></td>
			</tr>
			<tr> 

			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Register"></td>
			</tr>
		</table>
	</form>

<?php
}
?>
<?php include "footer.php"; ?>