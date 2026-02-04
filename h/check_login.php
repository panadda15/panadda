<?php
	session_start();
	if(empty($_SESSION['aid'])) {
		echo "Access Denied";
		echo "<meta http-equiv='refresh' content='5; url=index.php'>";
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>หน้าหลักแอดมิน - ปนัดดา</title>
</head>

<body>
<h1>หน้าหลักแอดมิน - ปนัดดา</h1>

<?php echo "แอดมิน". $_SESSION['aname']; ?><br>
 
 <ul>
 	<a href="products.php"><li>จัดการสินค้า</li></a>
	<a href="products.php"><li>จัดการออเดอร์</li></a>
    <a href="products.php"><li>จัดการลูกค้า</li></a>
    <a href="products.php"><li>ออกจากระบบ</li></a>
</ul>
</body>
</html>