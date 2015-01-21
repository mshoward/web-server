<?php
include_once 'mason_lib_includes.php';
/*
	login page
	register page
	browse questions
	submit questions
	answer questions{
						//I don't know it off the top of my head in sql right now, but... picturing tables like 2d arrays
						select * from Target_Demograph where (Question_id == QID) AND 
							(attributes in user_demograph_id are also in that particular demograph, but I don't know how to do that in sql right now) AND
							(user hasn't answered them yet);
						for i in results, cycle through and get answers;
						
						
						or just pick questions the user hasn't answered yet.  getting this particular logic doesn't seem "high priority".
					}
*/
	$head = new basic_page();
	$body = new basic_body();
	$main = new basic_table();
	
	

?>
