<?php 
	include "header.php";
 ?>


 <?php 
 		echo "<h1 class='title'>Add Contact</h1>";
 		echo "<form method='post' action='includes/add.inc.php'>
			<input type='text' name='first' placeholder='first'>
			<input type='text' name='last' placeholder='last'>
			<input type='text' name='phone_number' placeholder='Phone Number'>
			<input type='email' name='email' placeholder='Email'>
			<button type='submit' name='saveSubmit'>save</button>
 		</form>";

  ?>