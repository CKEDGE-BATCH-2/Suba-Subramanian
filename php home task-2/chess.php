<html>
	<head>
		<title></title>
</head>
		<body>
            <h1 style="text-align:center">CHESS BOARD</h1>
            <h2>lets start the game<h2>
<table width="500px" cellspacing="2px " cellpadding="0px" border="1px">
<?php
for($row=1;$row<=8;$row++)
{
	echo "<tr>";
	for($column=1;$column<=8;$column++)
	{
		$total=$row+$column;
		if($total%2==0)
		{
			echo "<td height=50px width=30px bgcolor=violet></td>";
		}
		else
		{
			echo "<td height=50px width=30px bgcolor=purple></td>";
		}
	}
	echo "</tr>";
}
?>
</table>
</body>
</html>