<?php
	include_once 'mason_lib_includes.php';
	$heads = new basic_page();
	echo $heads;
?>


</head>
<body>
	<h2>Pretend <sup>We<sup>Have<Sup>SSL,<sup>Please...</sup></sup></sup></sup></h2>
	<!-- LOGIN FORM START -->
		<table id="login_form" name="login_form" class="login_form" border="1">
			<form action="letmein.php" method="post">
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
					<td colspan="2">
						<input type="submit" value="Log In">
					</td>
				</tr>
			</form>
		</table>
		<!-- LOGIN FORM START -->
</body>
</html>
