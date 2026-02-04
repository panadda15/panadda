<?php
	include_once("checklogin.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>หน้าจัดการออเดอร์ - ปนัดดา</title>
</head>
<body>
<h1>หน้าจัดการออเดอร์ - ปนัดดา</h1>
<?php echo "แอดมิน". $_SESSION['aname'];?><br>
<ul>
<a href="products.php"><li>จัดการสินค้า</li></a>
<a href="orders.php"><li>จัดการออเดอร์</li></a>
<a href="customers.php"><li>จัดการลูกค้า</li></a>
<a href="logout.php"><li>ออกจากระบบ</li></a>
</ul>
</body>