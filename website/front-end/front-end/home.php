<?php
include_once 'mason_lib_includes.php';




?>



<html>
	<head> 

	</head>
	<body>
		<!-- begin nav -->
			<?php
				echo get_nav();
			?>
		<!-- end nav -->
		
		
		<!-- begin body -->
			<?php
				// logged in?
				session_start();
				if (!logged_in())
				{
					$_SESSION['logged_in'] = false;
					echo get_login_form();
				}
				else
				{
					echo get_welcome_message();
				}
			
			?>
		<!-- end body -->


		<!-- begin footer -->
			<?php
			echo get_footer();
			?>
		<!-- end footer -->
	</body>
</html>


