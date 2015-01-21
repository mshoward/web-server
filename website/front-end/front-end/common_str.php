<?php
/*
 * NAVIGATION
 */
$nav = '<div class="nav">
			<ul>
				<li>
					Home
				</li>
				<li>
					Information
				</li>
				<li>
					Sign In
				</li>
				<li>
					Project Portal
				</li>
			</ul>
		</div>';


/*
 * LOGIN FORM
 */
$loginForm = '<table id="login_form" name="login_form" class="login_form" border="1">
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
		</table>';
/*
 * WELCOME MESSAGE
 */
$welcomeMessage = '
<div class="welcomeMessage">
	<p>
		This is a placeholder welcome message.
	</p>
</div>
';

/*
 * FOOTER
 */
$footer = '
		<div class="footer">
			<ul class="footerList">
				<li>
					<ul class="footerItem">
						<li>
							Home
						</li>
						<li>
							Sign In / Out
						</li>
					</ul>
				</li>
				<li>
					<ul class="footerItem">
						<li>
							Information
						</li>
						<li>
							FAQ
						</li>
						<li>
							About Pulse
						</li>
					</ul>
				</li>
				<li>
					<ul class="footerItem">
						<li>
							Project Portal
						</li>
						<li>
							Search
						</li>
						<li>
							Participate
						</li>
						<li>
							Browse
						</li>
					</ul>
				</li>
			</ul>
		</div>';
?>




<html>
	<head>
		
	</head>
	<body>
		<div class="footer">
			<ul class="footerList">
				<li>
					<ul class="footerItem">
						<li>
							Home
						</li>
						<li>
							Sign In / Out
						</li>
					</ul>
				</li>
				<li>
					<ul class="footerItem">
						<li>
							Information
						</li>
						<li>
							FAQ
						</li>
						<li>
							About Pulse
						</li>
					</ul>
				</li>
				<li>
					<ul class="footerItem">
						<li>
							Project Portal
						</li>
						<li>
							Search
						</li>
						<li>
							Participate
						</li>
						<li>
							Browse
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</body>
</html>

