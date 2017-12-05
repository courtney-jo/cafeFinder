<?php

include 'mydb.php';

$mysqli = NEW MySQLi('localhost', 'root', 'secret', 'cafefinder');

$result = $mysqli->query("SELECT * FROM website");
?>


<!DOCTYPE html>
{% extends "header.html" %}
{% block content %}

<html>
<body bgcolor="#995533">
    <h1 align="center"><Cafe Websites</h1>
    <table width= "50" border="2" align="center" style="line-height:25px;">
        <tr>
            <th>cafes</th>
            <th>NutritionFacts</th>
            <th>Merchandise</th>
            <th>Membership</th>
            <th>Mobile Orders</th>
            <th>Cafe URL</th>
        </tr>
        <?php
        if($result->num_rows != 0){
        while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['cafes']; ?></td>
            <td><?php echo $row['Nutrition_facts']; ?></td>
            <td><?php echo $row['Merchandise']; ?></td>
            <td><?php echo $row['Membership']; ?></td>
            <td><?php echo $row['Mobile_ordering']; ?></td>
            <td><?php echo $row['URL']; ?></td>
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
