<?php
include_once("check_login.php");
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า admin - ปนัดดา</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@101.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background: #212529;
            color: white;
        }
        .sidebar a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            color: #fff;
            background: rgba(255,255,255,0.1);
        }
        .nav-link.active {
            background-color: #0d6efd !important;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="position-sticky pt-3">
                <div class="px-4 mb-4">
                    <h5 class="fw-bold text-info">Admin Panel</h5>
                    <small class="text-secondary">ปนัดดา Shop</small>
                </div>
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-4" href="products.php">
                            <i class="bi bi-box-seam me-2"></i> จัดการสินค้า
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 px-4" href="orders.php">
                            <i class="bi bi-cart-check me-2"></i> จัดการออเดอร์
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 px-4 active" href="customers.php">
                            <i class="bi bi-people me-2"></i> จัดการลูกค้า
                        </a>
                    </li>
                    <hr class="mx-3 border-secondary">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-4 text-danger" href="logout.php">
                            <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">จัดการลูกค้า</h1>
                <div class="btn-toolbar mb-2 mb-md-0 text-muted">
                    <i class="bi bi-person-circle me-2"></i> 
                    แอดมิน: <strong><?php echo $_SESSION['aname']; ?></strong>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4 text-primary">รายชื่อลูกค้าและข้อมูลการจัดการ</h5>
                    <p class="text-muted">คุณสามารถจัดการข้อมูลลูกค้าได้จากส่วนนี้</p>
                    
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>ชื่อลูกค้า</th>
                                    <th>อีเมล</th>
                                    <th>สถานะ</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted small">
                                        (แสดงตารางข้อมูลลูกค้าที่นี่)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@101.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>