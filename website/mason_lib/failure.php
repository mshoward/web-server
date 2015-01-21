<?php
include_once 'mason_lib_includes.php';
//$heads = new basic_page();

function failure(
$wrongness_name = "",
$wrongness_reason ="",
$wrongness_data = "")
{
$failure0 = " 
</head>
<body>
	<h2>Something <sup>Has<sup>Gone<Sup>Very,<sup>Very,<sup>Wrong...</sup></sup></sup></sup></sup></h2>
		<table id=\"fail_table\" name=\"fail_table\" class=\"fail_table\" border=\"1\">
			<tr>
				<td>
					Something went wrong:
				</td>
				<td>
					{$wrongness_name}
				</td>
			</tr>
			<tr>
				<td>
					This should specify why it went wrong:
				</td>
				<td>
					{$wrongness_reason}
				</td>
			</tr>
			<tr colspan=\"2\">
				<td>
					Additional information:
				</td>
			</tr>
			<tr colspan=\"2\">
				<td>
					{$wrongness_data}
				</td>
			</tr>
		</table>
</body>
</html>
";
return $failure0;
}
?>
