<?php 
	
	include "dbh.php";
	$newCounter = $_POST['counterNew'];

	$sql = "SELECT * FROM contacts LIMIT $newCounter";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);

	if($check > 0) {
		while($row = mysqli_fetch_assoc($result)) {
						$first = $row['first'];
						$last = $row['last'];
						$email = $row['email'];
						$phone_number = $row['phone_number'];
					
						//show user (user-unit)
						echo "<div class='user-unit'>";
							echo "<img src='img/default.jpg'>";
							echo "<div class='details'>";
								echo "<p class='name'>$first $last</p>";
								echo "<em class='email'>$email</em>";
								echo "<p class='phone_number'>0$phone_number</p>";
								echo "<a href='edit.php?email=$email'class='edit'>Edit</a>";
							echo "</div>"; // end details

						echo "</div>"; //end user-unit

					}
	}
 ?>