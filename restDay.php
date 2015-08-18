<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My rest day</title>
    <style>

    </style>
</head>

<body>
    <form action="index.php" method="get">
        Date:
        <input type="text" name="myDate">
        <input type="submit">
    </form>
<?php
$regEx = preg_match("/\d{4}-\d{1,2}-\d{1,2}/", $_GET['myDate']);

if (isset($_GET['myDate']) && $regEx != false) {
    $date    = date("w", strtotime($_GET['myDate']));
    if ($date == 5 or $date == 6) {
        echo "Rest day! =)";
    } else {
    	echo "Hard work! :(";
    }
} else {
    echo 'Please, enter date for example: 2000-07-9';
}
?>
</body>
</html>
