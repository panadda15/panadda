<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>66010914050 ปนัดดา ศรีลารักษ์ (มะปราง)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .table-thead { background-color: #6c5ce7; color: white; }
    </style>
</head>

<body>
<div class="container py-5">
    <div class="card p-4">
        <h1 class="text-center mb-4 text-primary"> ระบบจัดการข้อมูล Pop Supermarket</h1>
        <h5 class="text-secondary mb-4">ผู้ดูแล: ปนัดดา ศรีลารักษ์ (มะปราง)</h5>

        <div class="table-responsive">
            <table id="myTable" class="table table-striped table-hover" style="width:100%">
                <thead class="table-thead">
                    <tr>
                        <th>Order ID</th>
                        <th>รูปภาพ</th>
                        <th>ชื่อสินค้า</th>
                        <th>ประเภท</th>
                        <th>วันที่</th>
                        <th>ประเทศ</th>
                        <th class="text-end">จำนวนเงิน (บาท)</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include_once("connectdb.php");
                $sql = "SELECT * FROM popsupermarket";
                $rs = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($rs)) {
                ?>
                <tr>
                    <td><span class="badge bg-info text-dark"><?php echo $data['p_order_id'];?></span></td>
                    <td>
                        <img src="img/<?php echo $data['p_product_name'];?>.jpg" 
                             width="50" height="50" class="rounded shadow-sm"
                             onerror="this.src='https://via.placeholder.com/50?text=No+Img'">
                    </td>
                    <td class="fw-bold"><?php echo $data['p_product_name'];?></td>
                    <td><span class="badge outline-primary border text-primary"><?php echo $data['p_category'];?></span></td>
                    <td><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                    <td><?php echo $data['p_country'];?></td>
                    <td class="text-end fw-bold text-success">
                        <?php echo number_format($data['p_amount'], 2);?>
                    </td>
                </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json" // เมนูภาษาไทย
            },
            "pageLength": 10,
            "order": [[ 0, "desc" ]] // เรียงจาก Order ล่าสุด
        });
    });
</script>
</body>
</html>