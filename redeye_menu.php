<?php

include 'mydb.php';

$mysqli = NEW MySQLi('localhost', 'root', '', 'cafefinder');

$result = $mysqli->query("SELECT * FROM `drinks`,`cafes` WHERE `Cafe`='Redeye Coffee' AND `NAME`= 'RedEye Coffee'");
?>

<html>
<head>
    <title> Cafe Finder</title>
    <style>
        .logo {
            text-align: center;
            padding: 20px;
        }

            .logo img {
                width: 100%;
                background-color: #444
                padding: 10px; 
            }


        .ul-style {
            list-style-type: none;
            margin: 0;
            padding: none;
            font-family: "Courier New";
            font size: 25px;
            overflow: hidden;
            background-color: #995533;
        }

        .a-dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
            background-color: black;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

                .dropdown-content a:hover {
                    background-color: #f1f1f1
                }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .btn-logout {
            border-bottom: 12px solid #ccc;
            border-right: 12px solid transparent;
            border-left: 12px solid transparent;
            border-radius: 4px;
            box-shadow: none;
            float: left;
            height: 50px;
            padding: 15px 15px;
            font-size: 18px;
            line-height: 20px;
        }

        h1 {
            padding: 25px 25px;
            font-family: "Courier New";
            font size: 45px;
            text-align: center;
            overflow: hidden;
            background-color: dark brown;
        }

        p {
            padding: 5px 5px;
            font-family: "Courier New";
            font size: 20px;
        }
    </style>
        <ul class="ul-style">
            <li style="float:left"><a href="header.html" class="a-dropbtn">Home    </a></li>
			<li style="float:left"><a href="drink_price.html" class="a-dropbtn">Cafe Drink Calculator    </a></li>
            <li style="float:left"><a href="hours.php" class="a-dropbtn">Hours of Operation    </a></li>
            <li style="float:left"><a href="envir.html" class="a-dropbtn">Cafe Environment    </a></li>
            <li style="float:left"><a href="website.html" class="a-dropbtn">Cafe Website </a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="a-dropbtn"> Cafe Suggestions</a>
                <div class="dropdown-content">
                    <a href="starbucks_menu.php">Starbucks</a>
                    <a href="blackdog_menu.php">Black Dog</a>
                    <a href="redeye_menu.php">Red Eye</a>
                    <a href="sweetshop_menu.php">Sweet Shop</a>
                    <a href="luckygoat_menu.php">Lucky Goat</a>
                    <a href="catalina_menu.php">Catalina Cafe</a>
                </div>
            </li>
            <li style="float:left"><a class="a-dropbtn" href="about.html">About Us</a></li>
        </ul>
		</head>
<body bgcolor="#995533">
<?php
        if($result->num_rows != 0)
			$row = $result->fetch_assoc();
        ?>
    <h1 align="center">RedEye Coffee</h1>
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