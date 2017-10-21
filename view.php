<?php session_start(); ?>
<?php include "header.php"; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM purbopuruses WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<?php include "header.php"; ?>
    <div class="container">


      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>আপনার পূর্বপুরুষ</h1>
            
          </div>

        </div>
      </div>

  </div>    

	<table class='table table-bordered table-hover'>
		<tr>
			<th class='width-12-pct'>Name </th>
			<th class='width-12-pct'>Fathers Name</th>
			<th class='width-12-pct'>Mothers Name</th>
			<th class='width-10-pct'>Born In</th>
			<th class='width-10-pct'>Died In</th>
			<th class='width-8-pct'>Status</th>
			<th class='width-20-pct'>History</th>
			<th class='width-16-pct'>Action</th>

		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['purbopurus_name']."</td>";
			echo "<td>".$res['fathers_name']."</td>";
			echo "<td>".$res['mothers_name']."</td>";
			echo "<td>".$res['born_in']."</td>";
			echo "<td>".$res['died_in']."</td>";		
			echo "<td>".$res['status']."</td>";
			echo "<td>".$res['history']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Update</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	

				echo "</tr>";	
		}
		?>
	</table>	

<?php include "footer.php"; ?>