<?php 
	include "../dbh.php";
	if(isset($_POST['saveSubmit'])) {

		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];

		//query database and redirect to index

		$sql = "INSERT INTO contacts (first, last, email, phone_number ) VALUES ('$first', '$last', '$email', '$phone_number')";
		$result = mysqli_query($conn, $sql);
		header("Location: ../index.php?addsuccess");
	}

 ?>