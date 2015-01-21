<?php
  // create short variable names
  
?>
<html>
	<head>
		<title>View Records</title>
		<link href="../main.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div >
			<div class = "head">
				<div class = "headings">
					<?php
						function rd_data($fp)
						{
							$firstnames = array();
							$lastnames = array();
							$ages = array();
							$rawdata = array();
							$ret = array();
							$i = 0;
							$n = 0;
							while(!feof($fp))
							{
								$rawdata[] = fgets($fp);
								$i += 1;
							}
							
							for($j = 0; ($j * 3) + 2 <= $i; $j++)
							{
								$firstnames[] = $rawdata[($j * 3)];
								$lastnames[] = $rawdata[($j * 3) + 1];
								$ages[] = $rawdata[($j * 3) + 2];
								$n += 1;
							}
							for($k = 0; $k <= $n; $k++)
							{
								$ret[] = array($firstnames[$k], $lastnames[$k], $ages[$k]);
							}
							//$ret[] = $firstnames;
							//$ret[] = $lastnames;
							//$ret[] = $ages;
							//print_r($ret);
							return $ret;
							
							//return $rawdata;
						}
						function add_ages($arr)
						{
							$val = 0;
							foreach($arr as $a)
							{
								$val += $a;
							}
							return $val;
						}
						
						$str = "";
						$str2 = "";
						$i = 0;
						$fh = @fopen("orders.txt", 'r');
						if (!$fh)
						{
							echo "Nope!";
						}
						else
						{
							echo "<table>";
							$datas = rd_data($fh);
							$agess = array();
							foreach($datas as $rows)
							{
								echo "<tr><td>".$rows[0]."</td><td>".$rows[1]."</td><td>".$rows[2]."</td></tr>";
								$agess[] = $rows[2];
							}
							echo "<tr><td></td><td></td><td>".add_ages($agess)."</td></tr>";
							echo "</table>";
						}
						
						
						//checks the $find variable to see how the customer was found and prints appropriate message
					?>
					<a href="index.php">Home </a>
				</div>
			</div>
		</div>
	</body>
</html>
