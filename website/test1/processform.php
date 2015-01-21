<?php
  // create short variable names
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $age = $_POST['age'];
?>
<html>
<head>
  <title>Maga-Zany's - Order Results</title>
<link href="../main.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div class = "wrapper">
<div class = "head">
<div class = "headings">
<h1>Form Processing</h1>
<h2>Processing...</h2>

<?php
	echo "$firstname $lastname $age<br/>";
	echo "Processing<br/>";
	$writeString = "$firstname\n$lastname\n$age\n";
	$fh = @fopen("orders.txt", 'a');
	if (!$fh)
	{
		echo "Something went wrong.  File unable to be opened<br>";
	}
	else
	{
		if (!(@fputs($fh, $writeString)))
		{
			//echo "fputs returned a value that evaluates to false.  investigate.";
			echo "Something went wrong.  File unable to be written to.<br>";
		}
		else
		{
			echo "Written Successfully!<br>";
		}
		fclose($fh);
		
	}
?>
<br/><a href="index.php">Home </a>
</div>
</div>
</div>
</body>
</html>
