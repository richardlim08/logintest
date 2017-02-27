<?php
	function GenerateTaskList(){

		$conn = new mysqli("localhost", "root", "", "users");
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		$usn = $_POST["username"];
		$result=$conn->query("SELECT * FROM taskstable WHERE username='$usn' AND status='pending' AND date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
		AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY");
		if($result->num_rows > 0){            						
			while($row = $result->fetch_assoc()) {
				echo "<br> Username: ". $row["usn"]. " Task: ". $row["desc"]. " Date: " . $row["date"] . "<br>";
			}
		} else {
				echo "empty results";
		}
			$conn->close();
	}
?>