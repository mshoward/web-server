<?php
include_once 'mason_lib_includes.php';
//$heads = new basic_page();

function successful(
$success_name = "",
$success_reason ="",
$success_data = "")
{
$success = "
</head>
<body>
	<h2>Something <sup>Has<sup>Gone<Sup>Very,<sup>Very,<sup>Right...</sup></sup></sup></sup></sup></h2>
		<table id=\"fail_table\" name=\"fail_table\" class=\"fail_table\" border=\"1\">
			<tr>
				<td>
					Success:
				</td>
				<td>
					{$success_name}
				</td>
			</tr>
			<tr>
				<td>
					This should specify what was successful:
				</td>
				<td>
					{$success_reason}
				</td>
			</tr>
			<tr colspan=\"2\">
				<td>
					Additional information:
				</td>
			</tr>
			<tr colspan=\"2\">
				<td>
					{$success_data}
				</td>
			</tr>
		</table>
</body>
</html>
";
return $success;
}

?>
