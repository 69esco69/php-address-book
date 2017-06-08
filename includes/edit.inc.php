<?php 
	
	include "../dbh.php";	
	if(isset($_POST['editSubmit'])) {

		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];

		//update database

		$sql = "UPDATE contacts

				SET first = '$first',
					last = '$last',
					phone_number = '$phone_number'

				WHERE email  = '$email'
		 ";
		 $result = mysqli_query($conn, $sql);

		 header("Location: ../index.php?success");

		 
	}


 ?>