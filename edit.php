<?php
	include "header.php"; 
	
	$email = $_GET['email'];

	//query database to get user
	$sql = "SELECT * FROM contacts WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);

	if($check > 0) {

		while($row = mysqli_fetch_assoc($result)) {
						$first = $row['first'];
						$last = $row['last'];
						$email = $row['email'];
						$phone_number = $row['phone_number'];
					
						//show user (user-unit)
						echo "<form action='includes/edit.inc.php' method='post'>
							
							<input type='text' name='first' placeholder='".$first."'>
							<input type='text' name='last' placeholder='".$last."'>
							<input type='text' name='phone_number' placeholder='0".$phone_number."'>
							<input type='hidden' name='email' value='$email'>
							<button type='submit' name='editSubmit'>Update</button>


						</form>";

					}
	} else {
		echo "error";
	}
 ?>