<?php

include 'mydb.php';

$mysqli = NEW MySQLi('localhost', 'root', '', 'cafefinder');

$result = $mysqli->query("SELECT * FROM drinks WHERE Cafe='Bada bean'");
?>


<!DOCTYPE html>
{% extends "header.html" %}
{% block content %}

<html>
<body bgcolor="#995533">
    <h1 align="center">Cafe Name</h1>
    <table border="1" align="center" style="line-height:25px;">
        <tr>
            <th>NAME</th>
            <th>Price</th>
            <th>Strength</th>
            <th>Iced/Hot</th>
			<th>Size</th>
        </tr>
        <?php
        if($result->num_rows != 0){
        while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['Type']; ?></td>
            <td><?php echo $row['Price']; ?></td>
			<td><?php echo $row['Strength']; ?></td>
            <td><?php echo $row['Iced_Hot']; ?></td>
            <td><?php echo $row['Size']; ?></td>
        </tr>
        <?php
        }
        }
        else{
        echo"no results";
        }

        ?>
    </table>
</body>
</html>
{% endblock %}
