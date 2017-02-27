<?php
	session_start();
	if(!isset($_SESSION['username'])){
	header('location: ../../index.php');
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Control Panel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="shortcut icon" href="../images/favicon.ico" />
		<!-- IMPORTS BOOTSTRAP AND EXTERNAL SCRIPTS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/bootstrap-select.min.css">
		<script src="../js/bootstrap-select.min.js"></script>
	</head>
	<body>
		<div class="container-fluid" style="width:30%;margin-top:8%">
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color:#3a6f8f;color:white;">
					<strong><?php echo $_SESSION['username'];?></strong>
				</div>
				<div class="panel-body" style="border-radius:5px;text-align:center">
					<span style="display:inline-block; width: 150%;"></span>
						<button type="button" name="button" class="btn btn-success btn-lg" style="width: 90%;"><span class="glyphicon glyphicon-home"></span>&nbsp Home</button>
					</a>
					<span style="display:inline-block; width: 150%;"></span>
						<button type="button" name="button" class="btn btn-info btn-lg" style="width: 90%;"><span class="glyphicon glyphicon-folder-open"></span>&nbsp Data</button>
					</a>
					<span style="display:inline-block; width: 150%;"></span>
					<button type="button" name="button" class="btn btn-warning btn-lg" style="width: 90%;"><span class="glyphicon glyphicon-file"></span>&nbsp Files</button>
					</a>
					<span style="display:inline-block; width: 150%;"></span>
					<button type="button" name="button" class="btn btn-primary btn-lg" style="width: 90%;"><span class="glyphicon glyphicon-user"></span>&nbsp Accounts</button>
					</a>
					<span style="display:inline-block; width: 150%;"></span>
					<a href="logout.php">
					<button type="button" name="button" class="btn btn-danger btn-lg" style="width: 90%;"><span class="glyphicon glyphicon-off"></span>&nbsp Log Out</button>
					</a>
					<span style="display:inline-block; width: 150%;"></span>
				</div>
			</div>
		</div>
	</body>
</html>