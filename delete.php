$a = $_POST['delete']; 
switch($a)
	case: 'drinks'
		mysqli->query("DELETE FROM `drinks` WHERE NAME = 'Starbucks'"); 
		echo"you deleted a website"; 
	break; 
	case: 'environment'
		mysqli->query("DELETE FROM `environment` WHERE Study_social = 'Social'"); 
		echo"you deleted a website"; 
	break; 
	case: 'cafes'
		mysqli->query("DELETE FROM `cafes` WHERE wifi_available = 'n'"); 
		echo"you deleted a website"; 
	break; 
	case: 'website'
		mysqli->query("DELETE FROM `website` WHERE Membership = 'yes'"); 
		echo"you deleted a website"; 
	break; 
