<?php
include_once("check_login.php");
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ admin - ปนัดดา</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f0f2f5;
        }
        .sidebar {
            min-height: 100vh;
            background: #1a1d20;
            color: white;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: 0.2s;
            border-radius: 8px;
            margin: 4px 12px;
        }
        .sidebar a:hover {
            color: #fff;
            background: rgba(255,255,255,0.1);
        }
        .nav-link.active {
            background-color: #198754 !important; /* สีเขียวสำหรับ Orders */
            color: white !important;
        }
        .admin-profile {
            background: rgba(255,255,255,0.05);
            padding: 15px;
            border-radius: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="position-sticky pt-3">
                <div class="px-4 mb-3">
                    <h5 class="fw-bold text-success">Panadda Admin</h5>
                </div>
                
                <div class="admin-profile text-center mb-4">
                    <i class="bi bi-person-circle fs-3 text-info"></i>
                    <div class="small mt-2 text-light">แอดมิน: <?php echo $_SESSION['aname']; ?></div>
                </div>
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-4" href="products.php">
                            <i class="bi bi-box-seam me-2"></i> จัดการสินค้า
                        </a>
                    </li>
                    <li class