<?php
	include_once 'mason_lib_includes.php';
	$heads = new basic_page();
	echo $heads;
	/*
	$hostname = 'masonhoward.db.7456864.hostedresource.com';
	$db_pass = 'Bison51#';
	$uname = 'masonhoward';
	$schema = 'masonhoward';
	$db_connection = mysqli_connect($hostname, $uname, $db_pass, $schema);
	
	if (mysqli_connect_errno())
	{
		
	}
	*/
?>


</head>
<body>
	<h2>Pretend <sup>We<sup>Have<Sup>SSL,<sup>Please...</sup></sup></sup></sup></h2>
	<!-- REGISTER FORM START -->
		<table id="registration_form" name="registration_form" class="registration_form" border="1">
			<form action="register_me.php" method="post">
				<tr>
					<td>
						<label for="email">
							Lipscomb Email:&nbsp;&nbsp;
						</label>
					</td>
					<td>
						<input type="text" name="email" pattern=".*\@([mM][aA][iI][lL]\.)?[lL][iI][pP][sS][cC][oO][mM][bB].[eE][dD][uU]">
					</td>
				</tr>
				<tr>
					<td>
						<label for="password">
							Password:&nbsp;&nbsp;
						</label>
					</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td>
						<label for="password_confirm">
							Confirm Password:&nbsp;&nbsp;
						</label>
					</td>
					<td>
						<input type="password" name="password_confirm">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Log In">
					</td>
				</tr>
			</form>
		</table>
		<!-- REGISTER FORM END -->
</body>
</html>
