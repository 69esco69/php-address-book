<?php 
	
	include "header.php";


 ?>

			<?php

				$url = $_SERVER['REQUEST_URI'];

				if(strpos($url, 'error') !== false) {
					echo "<p class='message'>username and password incorrect</p>"; 
				} 
				if(isset($_SESSION['id'])) {

					echo "<header>
			<a href='index.php'><i class='fa fa-home'></i></a>

			<div class='cta'>
				<a href='search.php'><i class='fa fa-search'></i></a>
				<a href='add.php'><i class='fa fa-plus'></i></a>
				<a href='includes/logout.inc.php'><i class='fa fa-sign-out'></i></a>
			</div>
		</header>
		
		<div id='result'>";
					$sql ="SELECT * FROM contacts LIMIT 4";
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
								echo "<a href='edit.php?email=$email' class='edit-btn'>Edit</a>";
							echo "</div>"; // end details

						echo "</div>"; //end user-unit

						

					}
				}

				echo "</div>"; //end result
								echo"<div class='button-wrapper'>
			
									<button id='btn'>Load Mores</button>
								</div>";	
				} else {
					echo "<h1 class='title'>Login</h1>";

					echo "<form method='POST' action='includes/login.inc.php'>

						<input type='text' name='email' placeholder='email'>
						<input type='password' name='pwd' placeholder='password'>
						<button type='submit' name='loginSubmit'>login</button> <span>or</span><a href='signup.php'>Signup</a>
					</form>";
				}
				

			 ?>


		</div>
		


	</div>
	
</body>
</html>