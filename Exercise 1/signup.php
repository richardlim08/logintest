
<html>
	<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootstrap-select.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<center>
		
			<div class="input-group">	
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />	
 				<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  				<input type="text" class="form-control" id="user" name="user" placeholder="Username" required autocomplete="off">
  				 <br />
  	
  				<input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required autocomplete="off">
  				<button type="submit" name="submit" class="btn btn-success">Signup</button> &nbsp; 

  				<a href="home.php"><button type="button" class="btn btn-danger">Back</button></a>

  				</form>

			</div>
			<?php

				if(isset($_POST['submit'])){
					$server = "localhost";
					$username = "root";
					$password = "";
					$db = "user";
					$conn = new mysqli($server, $username, $password,$db);
					$user = $_POST['user'];
					$pass = md5($_POST['pass']);
					$check="SELECT COUNT(*) FROM users WHERE username = '$user'";
					$rs = mysqli_query($conn,$check);
					$data = mysqli_fetch_array($rs, MYSQLI_NUM);
					if($data[0] > 1) {
					    echo "User Already in Exists<br/>";
					}
					else{
					$sql = "INSERT INTO users(username,password) VALUES ('$user','$pass')";
					if (mysqli_query($conn, $sql)) {
   				echo "<script type='text/javascript'>
												$(document).ready(function(){
												$('.modal-header #modalHeader').text('Sucessful');
												$('.modal-body #modalContent').text('New account added.');
												$('#myModal').modal('show');				
												});
											</script>";
				}
				}
				
								
					}
				
							

			?>	
		
	<div class="modal fade" id="myModal" role="dialog">
    		<div class="modal-dialog">
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 id="modalHeader" class="modal-title">Successful</h4>
        			</div>
        			<div class="modal-body">
          				<p id="modalContent">Successful Sign Up!</p>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			</div>
      			</div>
    		</div>
 		</div>
		</div>

		
	</body>
			
</html>
