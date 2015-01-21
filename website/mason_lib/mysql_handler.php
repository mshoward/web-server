<?php
	function ez_connect()
	{
		$hostname = 'masonhoward.db.7456864.hostedresource.com';
		$db_pass = 'Bison51#';
		$uname = 'masonhoward';
		$schema = 'masonhoward';
		//$db_link = mysqli_init();
		$port = 3306;
		$db_connection = mysqli_connect($hostname, $uname, $db_pass, $schema, $port);
		return $db_connection;
	}
	
	//tests connection error, sets failure status
	//returns true if error, false else
	function ez_test_connect($db, $reason)
	{
		if (mysqli_connect_errno() || !mysqli_ping($db) || mysqli_errno($db))
		{
			$wrongness_name = "Connectivity errors during ez_test_connect";
			$wrongness_reason = $reason;
			$wrongnes_data = mysqli_connect_error()."<br>".mysqli_error($db);
			//echo $failure;
			return true;
		}
		return false;
	}
	
	function ez_new_user($db, $username, $userpass)
	{
		$username = md5($username);
		$userpass = md5($userpass);
		$stmt = "INSERT INTO `masonhoward`.`User`(`User_id`,`User_email_hash`,`User_pass_hash`,`User_registered`,`Demograph_id`,`User_last_logon`)".
		"VALUES(DEFAULT,\"{$username}\",\"{$userpass}\",true,1,DEFAULT);";
		return !mysqli_real_query($db, $stmt);
	}
	
	function ez_browse($db, $table, $start, $stop)
	{
		
	}
	
	function ez_get_field($table, $lookup_field, $lookup_val, $get_field)
	{
		$db = ez_connect();
		$stmt = "SELECT `masonhoward`.`{$table}`.`{$get_field}` FROM `masonhoward`.`{$table}` WHERE `masonhoward`.`{$table}`.`{$lookup_field}` = '{$lookup_val}';";
		if (ez_test_connect($db, "") || !($res = mysqli_query($db, $stmt)))
		{
			echo "\nBROKEN!!!\n";
			exit("ez_get_row broke");
		}
		else
		{
			$ret = array();
			while ($results = mysqli_fetch_row($res))
			{
				foreach ($results as $result) $ret[] = $result;
			}
			mysqli_free_result($res);
			mysqli_close($db);
			return $ret;
		}
	}
	
	
	
?>
