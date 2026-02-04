<?php
	session_start();
	if(empty($_SESSION['aid'])) {
		echo "Access Denied";
		echo "<meta http-equiv='refresh' content='5; url=index.php'>";
		}
?>
