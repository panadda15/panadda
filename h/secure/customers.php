<?php
include_once("check_login.php");
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า admin - ปนัดดา</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        :root {
            --sidebar-bg: #1e293b;
            --main-bg: #f8fafc;
            --accent-color: #3b82f6;
        }

        body {
            font-family: 'Sarabun', sans-serif;
            background-color: var(--main-bg);
            color: #334155;
        }

        /* Sidebar Styling */
        .sidebar {
            min-height: 100vh;
            background: var(--sidebar-bg);
            box-shadow: 4px 0 10px rgba(0,0,0,0.05);
            z-index: 100;
        }

        .sidebar .nav-link {
            color: #94a3b8;
            font-weight: 400;
            padding: 0.8rem 1.5rem;
            margin: 0.2rem 1rem;
            border-radius: 10px;
            transition: all 0.2s ease;
        }

        .sidebar .nav-link:hover {
            color: #f1f5f9;
            background: rgba(255,255,255,0.05);
        }

        .sidebar .nav-link.active {
            background-color: var(--accent-color) !important;
            color: white !important;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        /* Main Content Styling */
        .header-box {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .card {
            border: none;
            border-radius: 16px;
            transition: transform 0.2s ease;
        }

        .table thead th {
            background-color: #f1f5f9;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            color: #64748b;
            border: none;
        }

        .product-img {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .btn-action {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: 0.2s;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="position-sticky pt-3">
                <div class="px-4 mb-5 mt-2">
                    <h4 class="fw-bold text-white d-flex align-items-center">
                        <i class="bi bi-stars text-info me-2"></i> Panadda
                    </h4>
                    <span class="badge bg-info bg-opacity-10 text-info fw-normal px-3">System Administrator</span>
                </div>
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">
                            <i class="bi bi-grid-1x2-fill me-2"></i> จัดการสินค้า
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <i class="bi bi-bag-check me-2"></i> จัดการออเดอร์
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers.php">
                            <i class="bi bi-person-gear me-2"></i> จัดการลูกค้า
                        </a>
                    </li>
                    <div class="mt-5 px-4 mb-2 text-uppercase text-secondary" style="font-size: 0.7rem;">Account</div>
                    <li class="nav-item">
                        <a class="nav-link text-danger-emphasis" href="logout.php">
                            <i class="bi bi-power me-2"></i> ออกจากระบบ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between align-items-center mb-4 header-box p-4 rounded-4 shadow-sm">
                <div>
                    <h1 class="h3 mb-1 fw-bold text-dark">Inventory Management</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item text-muted small">Dashboard</li>
                            <li class="breadcrumb-item active small text-primary" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex align-items-center">
                    <div class="text-end me-3 d-none d-sm-block">
                        <div class="small fw-bold text-dark"><?php echo $_SESSION['aname']; ?></div>
                        <div class="text-muted" style="font-size: 0.75rem;">Online Status</div>
                    </div>
                    <button class="btn btn-primary px-4 py-2 rounded-3 shadow-sm fw-semibold">
                        <i class="bi bi-plus-circle me-2"></i> เพิ่มสินค้า
                    </button>
                </div>
            </div>

            <div class="card shadow-sm border-0 overflow-hidden">
                <div class="card-header bg-white py-3 border-0">
                    <h5 class="mb-0 fw-bold"><i class="bi bi-list-ul me-2"></i>รายการสินค้าทั้งหมด</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="ps-4">รูปภาพ</th>
                                    <th>ข้อมูลสินค้า</th>
                                    <th>หมวดหมู่</th>
                                    <th>ราคา</th>
                                    <th>คลังสินค้า</th>
                                    <th class="text-center pe-4">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <tr>
                                    <td class="ps-4">
                                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=100&q=80" class="product-img border" alt="product">
                                    </td>
                                    <td>
                                        <div class="fw-bold text-dark">เซรั่มบำรุงผิวหน้าไฮยา</div>
                                        <span class="badge bg-light text-secondary border fw-normal" style="font-size: 0.7rem;">PN-001</span>
                                    </td>
                                    <td><span class="text-muted">Beauty & Care</span></td>
                                    <td class="fw-bold text-primary">฿ 590.00</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="badge rounded-pill bg-success-subtle text-success px-3">In Stock (45)</span>
                                        </div>
                                    </td>
                                    <td class="text-center pe-4">
                                        <a href="#" class="btn btn-action btn-light border me-1 text-primary shadow-sm" title="แก้ไข"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-action btn-light border text-danger shadow-sm" title="ลบ"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">
                                        <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=100&q=80" class="product-img border" alt="product">
                                    </td>
                                    <td>
                                        <div class="fw-bold text-dark">กันแดดปนัดดา SPF50</div>
                                        <span class="badge bg-light text-secondary border fw-normal" style="font-size: 0.7rem;">PN-002</span>
                                    </td>
                                    <td><span class="text-muted">Sunscreen</span></td>
                                    <td class="fw-bold text-primary">฿ 350.00</td>
                                    <td>
                                        <span class="badge rounded-pill bg-danger-subtle text-danger px-3">Low Stock (3)</span>
                                    </td>
                                    <td class="text-center pe-4">
                                        <a href="#" class="btn btn-action btn-light border me-1 text-primary shadow-sm"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-action btn-light border text-danger shadow-sm"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-light bg-opacity-50 py-3 text-center border-0">
                    <p class="mb-0 text-muted small">จัดการข้อมูลอัปเดตล่าสุดเมื่อ: <?php echo date("d/m/Y H:i"); ?></p>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>