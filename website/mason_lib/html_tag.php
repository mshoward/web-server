<?php
	
	
	
	class html_tag_single implements iTag, iPrintable
	{
		
		
		
		public $tag_open = "<br ";
		public $tag_close = ">";
		public $tag_props = array();
		
		public function __construct($tag = "")
		{
			if ($tag) $tag_open = "<".$tag." ";
		}
		///////////////////////////////////////
		//  iTag  /////////////////////////////
		///////////////////////////////////////
		public function add_prop ($property)
		{
			$tag_props[] = $property;
		}
		
		public function change_tag($tag_change)
		{
			$tag_open = "<".$tag." ";
		}
		
		public function add_content($content)
		{
			return false;
		}
		
		///////////////////////////////////////
		//  iPrintable  ///////////////////////
		///////////////////////////////////////
		public function print_this()
		{
			$ret_string = "\n".$tag_open;
			foreach ($property as $p)
			{
				$ret_string .= " ".$p;
			}
			$ret_string .= $tag_close."\n";
			return $ret_string;
		}
		
		public function __toString()
		{
			$ret_string = "\n".$tag_open;
			foreach ($property as $p)
			{
				$ret_string .= " ".$p;
			}
			$ret_string .= $tag_close."\n";
			return $ret_string;
		}
		
	}
	
	class html_tag_double
	{
		public $tag_open = "<head "; //adds closing > in printing
		public $tag_close = "</head>";
		public $tag_props = array();
		public $inside_content = array();
		
		public function __construct($tag = "")
		{
			if ($tag)
			{
				$tag_open = "<".$tag." ";
				$tag_close = "</".$tag.">";
			}
		}
		///////////////////////////////////////
		//  iTag  /////////////////////////////
		///////////////////////////////////////
		public function add_prop ($property)
		{
			$tag_props[] = $property;
		}
		
		public function change_tag($tag_change)
		{
			$tag_open = "<".$tag." ";
			$tag_close = "</".$tag.">";
		}
		
		public function add_content($content)
		{
			$inside_content[] = $content;
		}
		
		///////////////////////////////////////
		//  iPrintable  ///////////////////////
		///////////////////////////////////////
		public function print_this()
		{
			$ret_string = "\n".$tag_open."\n";
			foreach ($property as $p)
			{
				$ret_string .= " ".$p;
			}
			$ret_string .= ">\n";//closing >
			foreach ($inside_content as $c)
			{
				$ret_string .= $c;
			}
			$ret_string .= "\n".$tag_close."\n";
			return $ret_string;
		}
		public function __toString()
		{
			$ret_string = "\n".$tag_open."\n";
			foreach ($property as $p)
			{
				$ret_string .= " ".$p;
			}
			$ret_string .= ">\n";//closing >
			foreach ($inside_content as $c)
			{
				$ret_string .= (string)$c;
			}
			$ret_string .= "\n".$tag_close."\n";
			return $ret_string;
		}
	}

?>
