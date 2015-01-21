<?php
	
	class basic_page
	{
		public $doc_type_dec = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n";
		public $html_open = "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n";
		public $head_open = "<head>\n";
		public $metas = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n";
		public $title_sec = "<title>These are not the docs you're looking for...</title>";
		public $links = "<link href=\"main.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";

		public function __toString()
		{
			return $this->doc_type_dec.$this->html_open.$this->head_open.$this->metas.$this->title_sec.$this->links;
		}
		
	}
	class basic_head extends basic_page {}
	
	class basic_body
	{
		public $end_head = "</head>";
		public $body = "<body>";
		public $end_body = "</body>";
		public $end_html = "</html>";
		public $ele = array();
		public function __construct()
		{
		}
		public function add_element($data)
		{
			foreach ($data as $eles)
			{
				$this->ele[] = (string)$eles;
			}
		}
		
		public function __toString()
		{
			$ret = $this->end_head;
			$ret .= $this->body;
			foreach ($this->ele as $eles)
			{
				$ret .= $eles;
			}
			$ret .= $this->end_body;
			$ret .= $this->end_html;
			return (string)$ret;
		}
		
	}
	
	class basic_table
	{
		public $top = "<table border=\"1\">\n";
		public $bot = "</table>\n";
		public $rows = array();
		public function __construct()
		{
			$this->top = "<table border=\"1\">\n";
			$this->bot = "</table>\n";
			$this->rows = array();
		}
		public function add_row()
		{
			$curr_str = "<tr>";
			echo "Exporting inside table\n";
			//var_export($data);
			//var_export(top);
			//var_export(bot);
			//var_export(rows);
			echo "done\n";
			foreach (func_get_args() as $datum)
			{
				$curr_str .= "<td>{$datum}</td>";
			}
			$curr_str .= "</tr>\n";
			$this->rows[] = $curr_str;
			
			echo "exporting result of add row\n";
			//var_export($this->top);
			//var_export($this->bot);
			//var_export($this->rows);
			echo "done\n";
		}
		public function __toString()
		{
			$ret .= $top;
			//var_export($this->top);
			//var_export($this->bot);
			//var_export($this->rows);
			foreach ($this->rows as $row)
			{
				$ret .= $row;
			}
			$ret .= $this->bot;
			return $ret;
		}
		
	}
	
	class basic_form
	{
		public $table;
		
		public function __construct()
		{
			$table = new basic_table();
		}
		public function add_input($label, $type, $name)
		{
			$html_label = "<label for=\"{$name}\">{$label}</label>";
			$html_input = "<input type=\"{$type}\" name=\"{$name}\">";
			$table->add_row($html_label, $html_input);
		}
		public function __toString()
		{
			return (string)$table;
		}
	}
	class basic_link
	{
		public $tag = "<a ";
		public function __construct($link, $text)
		{
			$this->tag .= "href=\"{$link}\">{$text}</a>";
		}
		public function __toString()
		{
			return (string)$this->tag;
		}
	}
	
	
	
?>
