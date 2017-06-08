<?php 
	session_start();
	include "../dbh.php";
	if(isset($_POST['signupSubmit'])) {

		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		$pwd = $_POST['pwd'];
		$date = date('Y-m-d H:i:s');

		echo $first.$last.$email.$phone_number.$pwd.$date;


		//query database and return session to main screen
		$sql = "INSERT INTO user (first, last, phone_number, email, pwd, date) VALUES ('$first', '$last', '$phone_number', '$email', '$date')";
		$result = mysqli_query($conn, $sql);
		//header("Location: ../index.php?signupsuccess");
	}
	
 ?>