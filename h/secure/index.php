<?php
session_start(); // อย่าลืม start session ที่บรรทัดแรกสุด
include_once("connectdb.php");

$error_msg = "";

if (isset($_POST['Submit'])) {
    $user = $_POST['auser'];
    $pwd = $_POST['apwd'];

    // 1. ใช้ Prepared Statement เพื่อป้องกัน SQL Injection
    $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($data = mysqli_fetch_array($result)) {
        // 2. ตรวจสอบรหัสผ่านที่เข้ารหัสไว้ (Hash)
        // หมายเหตุ: ในฐานข้อมูลต้องเก็บรหัสผ่านที่ผ่านฟังก์ชัน password_hash() มาก่อน
        if (password_verify($pwd, $data['a_password'])) {
            $_SESSION['aid'] = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];
            
            header("Location: index2.php");
            exit();
        } else {
            $error_msg = "Username หรือ Password ไม่ถูกต้อง";
        }
    } else {
        $error_msg = "Username หรือ Password ไม่ถูกต้อง";
    }
}
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ - ปนัดดา ศรีลารักษ์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .login-card { max-width: 400px; margin-top: 100px; border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .btn-primary { background-color: #6f42c1; border: none; }
        .btn-primary:hover { background-color: #59359a; }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card login-card p-4">
                <div class="card-body">
                    <h3 class="text-center mb-4 fw-bold">Login หลังบ้าน</h3>
                    <p class="text-center text-muted mb-4">ยินดีต้อนรับคุณ ปนัดดา</p>

                    <?php if($error_msg != ""): ?>
                        <div class="alert alert-danger py-2 text-center" role="alert">
                            <?php echo $error_msg; ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="auser" class="form-control" placeholder="ระบุชื่อผู้ใช้งาน" autofocus required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="apwd" class="form-control" placeholder="ระบุรหัสผ่าน" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="Submit" class="btn btn-primary btn-lg">เข้าสู่ระบบ</button>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center mt-4 text-muted small">&copy; 2024 ปนัดดา ศรีลารักษ์</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>