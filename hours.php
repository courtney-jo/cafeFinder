<?php

include 'mydb.php';

$mysqli = NEW MySQLi('localhost', 'root', 'secret', 'cafefinder');

$result = $mysqli->query("SELECT Hours_of_operation, NAME FROM cafes"); 
?>


<!DOCTYPE html>
{% extends "header.html" %}
{% block content %}

<html>
<body bgcolor="#995533">
<?php
	if($result->num_rows != 0)
		$rows = $result->fetch_assoc();
?>
<h1 align="center"><Cafe Hours of Op</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
	<th>Name</th>
	<th>Hours of Operation</th>
</tr>
	<?php 
	do{
		?>
		<tr>
			<td><?php echo $rows['NAME']; ?></td>
			<td><?php echo $rows['Hours_of_operation']; ?></td>
		</tr>
    <?php }while($rows = $result->fetch_assoc()); ?>

	</table>
</body>
</html>

{% endblock %}
