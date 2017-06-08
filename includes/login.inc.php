<?php 

		//login.inc.php
		session_start();

		include "../dbh.php";

		if(isset($_POST['loginSubmit'])) {

			$email = $_POST['email'];
			$pwd = $_POST['pwd'];

			//query databas
			$sql = "SELECT * FROM user WHERE email='$email' AND pwd ='$pwd'";
			$result = mysqli_query($conn, $sql);

			$check = mysqli_num_rows($result);

			if($check > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$_SESSION['id'] = $row['id'];
					header("Location: ../index.php?success");
				} 
			}else {
					header("Location: ../index.php?error");
				}
		}
 ?>