<?php
if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password_hash = md5($password);

	if (!empty($username) && !empty($password)){
		
		$query = "SELECT id FROM users WHERE username='$username' AND password ='$password_hash'";
		if ($query_run = mysql_query($query)){ // executes query
			$query_num_rows = mysql_num_rows($query_run); // creates values of number of rows returned.

			if($query_num_rows==0){ // checks if there is a match, if no match. Echo error msg below.
				echo 'Invaild username/password combination.';
			}
			else if ($query_num_rows==1){ // username and password mathes.
				echo $user_id = mysql_result($query_run, 0, `id`); // should return user's id for session
				$_SESSION['user_id']=$user_id; // session will equal the id of the user
				header('Location: index.php'); //relocate to index.php
				
			}
		}

	}
	else {
		echo 'You must supply a username and password.';
	}
}
?>



<form action = "<?php echo $current_file ?> " method = "POST">
Username: <input type = "text" name = "username"> Password: <input type = "password" name = "password">
<input type="submit" value = "Log in">



</form>
