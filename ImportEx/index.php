<!DOCTYPE html>
<?php 
	include ('C:\xampp\htdocs\PHP\CRM\connect.php');
?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import From Excel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">


	</head>
	<body style="background-color:#adad" >    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="ico.n-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a style="text-align: center;" class="brand" href="#">Import From Excel</a>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
				<p><a href="\PHP\CRM\customerHome.php">Back</a></p>
				<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		

		<table class="table table-bordered">
			<thead>
				  	<tr style="background-color: darkcyan;" >
<th>ID</th>
  <th> NAME </th>
   <th> CITY </th> 
   <th> TIN </th> 
   <th> SERVICES </th> 
   <th> CONTACT </th>
   <th> REG_DATES</th> 
   <th> title</th> 
   <th> CAF</th>.  
   <th> REMARKS</th> 
				 		
				 
				  	</tr>	
				  </thead>
			<?php 
				$sql = "SELECT * FROM customers";
				$result_set =  mysqli_query($mysqli, $sql);
				while($row = mysqli_fetch_array($result_set))
				{
				?>
			
					<tr>
						
						<td><?php echo $row['ID']; ?></td>
						<td><?php echo $row['NAMES']; ?></td>
						<td><?php echo $row['CITY']; ?></td>
						<td><?php echo $row['TIN']; ?></td>
						<td><?php echo $row['SERVICES']; ?></td>
						<td><?php echo $row['CONTACT']; ?></td>
						<td><?php echo $row['REG_DATES']; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['image']; ?></td>
						<td><?php echo $row['REMARKS']; ?></td>

					

					</tr>
				<?php
				}
			?>
		</table>
	</div>

	</div>

	</body>
</html>