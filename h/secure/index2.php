<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบหลังบ้าน - ปนัดดา</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .main-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .menu-item {
            transition: all 0.3s ease;
            text-decoration: none;
            border: 1px solid #eee;
            border-radius: 15px;
        }
        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background-color: #f8f9fa;
        }
        .icon-box {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card main-card p-4 p-md-5">
                
                <div class="text-center mb-5">
                    <h1 class="fw-bold text-dark mb-2">ระบบหลังบ้าน (Admin Panel)</h1>
                    <p class="text-muted">ยินดีต้อนรับเข้าสู่ระบบจัดการร้านค้า ปนัดดา</p>
                    <div class="d-inline-block px-4 py-2 bg-light rounded-pill border">
                        <i class="bi bi-person-badge me-2 text-primary"></i>
                        <span>แอดมิน: <strong><?php echo $_SESSION['a_name']; ?></strong></span>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <a href="products.php" class="menu-item d-block p-4 bg-white h-100">
                            <div class="icon-box bg-primary-subtle text-primary">
                                <i class="bi bi-box-seam fs-3"></i>
                            </div>
                            <h5 class="fw-bold text-dark">จัดการสินค้า</h5>
                            <p class="text-muted small mb-0">เพิ่ม แก้ไข ลบ และตรวจสอบสต็อกสินค้าในคลัง</p>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="orders.php" class="menu-item d-block p-4 bg-white h-100">
                            <div class="icon-box bg-success-subtle text-success">
                                <i class="bi bi-cart-check fs-3"></i>
                            </div>
                            <h5 class="fw-bold text-dark">จัดการออเดอร์</h5>
                            <p class="text-muted small mb-0">ดูรายการสั่งซื้อ แจ้งชำระเงิน และสถานะการจัดส่ง</p>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="customers.php" class="menu-item d-block p-4 bg-white h-100">
                            <div class="icon-box bg-info-subtle text-info">
                                <i class="bi bi-people fs-3"></i>
                            </div>
                            <h5 class="fw-bold text-dark">จัดการลูกค้า</h5>
                            <p class="text-muted small mb-0">ข้อมูลสมาชิก ประวัติการซื้อ และที่อยู่ติดต่อ</p>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="logout.php" class="menu-item d-block p-4 bg-white h-100 border-danger-subtle">
                            <div class="icon-box bg-danger-subtle text-danger">
                                <i class="bi bi-box-arrow-right fs-3"></i>
                            </div>
                            <h5 class="fw-bold text-danger">ออกจากระบบ</h5>
                            <p class="text-muted small mb-0">จบการทำงานและออกจากระบบอย่างปลอดภัย</p>
                        </a>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <hr class="mb-4">
                    <p class="text-secondary small">&copy; 2026 ปนัดดา ศรีลารักษ์ (มะปราง) - All Rights Reserved</p>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>