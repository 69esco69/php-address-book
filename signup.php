<?php 

	include "header.php";

	echo "<h1 class='title'>Signup</h1>";

	echo "<form method='post' action='includes/signup.inc.php'>
			<input type='text' name='first' placeholder='first'>
			<input type='text' name='last' placeholder='last'>
			<input type='email' name='email' placeholder='email'>
			<input type='text' name='phone_number' placeholder='phone_number'>
			<input type='password' name='pwd' placeholder='Password'>
			<button type='submit' name='signupSubmit'>Signup</button> <a href='index.php'>Return</a>
	</form>";

 ?>