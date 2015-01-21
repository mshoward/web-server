<?php
	include_once 'mason_lib_includes.php';
	
	$heads = new basic_page();
	echo $heads;
	
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$conf_pass = $_POST["password_confirm"];
	//check for confirmed password, !confirmed -> failure
	if (strcmp($pass, $conf_pass))
	{
		$wrongness_name = "Registration Error";
		$wrongness_reason = "Passwords do not match.";
		$wrongness_data = "First password was : {$pass} <br><br>Second password was : \"{$conf_pass}\"";
		echo failure($wrongness_name,$wrongness_reason,$wrongness_data);
		exit("exit on non-matching passwords");
	}
	else //passwords confirmed -> connect and register user
	{
		$db = ez_connect();
		
		if (ez_test_connect($db, "Registration Connectivity"))
		{
			echo $failure;
			exit("exit on connection failure");
		}
		else
		{
			if (ez_new_user($db, $email, $pass))
			{
				ez_test_connect($db, "User Registration Query");
				$wrongness_name = "Connectivity errors during ez_test_connect";
				$wrongness_reason = "User Registration Query";
				$wrongnes_data = mysqli_connect_error()."<br>".mysqli_error($db);
				echo failure($wrongness_name,$wrongness_reason,$wrongness_data);
			}
			else
			{
				$success_name = "Registered!";
				$success_reason = "You have successfully registered!";
				$success_data = "Congrats!";
				echo successful($success_name,$success_reason,$success_data);
			}
		}
	}
?>

