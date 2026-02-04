<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปนัดดา ศรีลารักษ์ (มะปราง)</title>
</head>

<body>
<h1>a.php สร้าง session</h1>

<?php
	$_SESSION['name'] = "ปนัดดา ศรีลารักษ์";
    $_SESSION['nickname'] = "มะปราง";
    $_SESSION['p1'] = "โซฟา";
    $_SESSION['p2'] = "ห่วงยาง";
 ?>
</body>
</html>
