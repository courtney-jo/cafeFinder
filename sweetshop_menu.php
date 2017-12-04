<?php

include 'mydb.php';

$mysqli = NEW MySQLi('localhost', 'root', '', 'cafefinder');

$result = $mysqli->query("SELECT * FROM `drinks`,`cafes` WHERE `Cafe`='Sweet shop' AND `NAME`= 'Sweet Shop'");
?>


<!DOCTYPE html>
{% extends "header.html" %}
{% block content %}

<html>
<body bgcolor="#995533">
<?php
        if($result->num_rows != 0)
			$row = $result->fetch_assoc();
        ?>
    <h1 align="center">Sweet Shop</h1>
	<h3 align="center"><?php echo $row['Hours_of_operation']; ?></h3>
	<h3 align="center"><?php echo $row['Address']; ?></h3>
    <table border="1" align="center" style="line-height:25px;">
        <tr>
            <th>NAME</th>
            <th>Price</th>
            <th>Strength</th>
            <th>Iced/Hot</th>
			<th>Size</th>
        </tr>
        <?php
        do{
        ?>
        <tr>
            <td><?php echo $row['Type']; ?></td>
            <td><?php echo $row['Price']; ?></td>
			<td><?php echo $row['Strength']; ?></td>
            <td><?php echo $row['Iced_Hot']; ?></td>
            <td><?php echo $row['Size']; ?></td>
        </tr>
        <?php }while($row = $result->fetch_assoc()); ?>
    </table>
</body>
</html>
{% endblock %}
