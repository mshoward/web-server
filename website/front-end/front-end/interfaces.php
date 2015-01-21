<?php
	interface iTag //standard ways of interacting with a tag
	{
		function add_prop($property);
		function add_content($content);
		function change_tag($tag_change);
	}
	
	interface iPrintable
	{
		function print_this();
		//__toString();
	}
?>
