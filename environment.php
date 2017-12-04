<?php

include 'mydb.php';

$mysqli = NEW MySQLi('localhost', 'root', '', 'cafefinder');

#$query = "SELECT *"; 
#$query = "FROM environment";

$result = $mysqli->query("SELECT * FROM environment"); 
?>


<!DOCTYPE html>
{% extends "header.html" %}
{% block content %}

<html>
<body bgcolor="#995533">
<h1 align="center"><Cafe Environments</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>NAME</th>
<th>Indoor/Outdoor</th>
<th>Study/Social</th>
<th>Music</th>
</tr>
<?php
if($result->num_rows != 0){
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['NAME']; ?></td>
    <td><?php echo $row['Indoor_outdoor']; ?></td>
    <td><?php echo $row['Study_social']; ?></td>
    <td><?php echo $row['music_played']; ?></td>
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
