<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pirates Booty</title>
  <style>
</style>
</head>
<body>
<form action="index.php" method="get">
	Date: <input type="text" name="myDate">
	<input type="submit">
</form>
<?php
$regEx = preg_match("/\d{4}-\d{1,2}-\d{1,2}/", $_GET['myDate']);
	if (isset($_GET['myDate']) && $regEx !== false) {
		$myDate = $_GET['myDate'];
		$cutDate = explode("-", $myDate);
		$someDay = date("l", mktime(0, 0, 0, $cutDate[1], $cutDate[2], $cutDate[0]));
		echo '<br>' . $someDay . ' -> ';
		switch($someDay) {
			case 'Monday':
			case 'Tuesday':
			case 'Wednesday':
			case 'Thursday':
			case 'Friday':
				echo 'Hard work!';
				break;
			case 'Saturday':
			case 'Sunday':
				echo 'U can some rest... Z-z...';
				break;
		default:
			echo 'Something wrong!';
		}
	} 
	else  {echo 'Please, enter date for example: 2000-07-9';}
?>
</body>
</html>
