<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>66010914050 ปนัดดา ศรีลารักษ์ (มะปราง)</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; color: #333; margin: 0; padding: 20px; }
        .container { max-width: 900px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        
        /* จัดวางกราฟให้ขนานกัน */
        .charts-wrapper { display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 40px; justify-content: center; }
        .chart-box { flex: 1; min-width: 300px; max-width: 400px; text-align: center; }
        
        /* ตกแต่งตาราง */
        table { width: 100%; border-collapse: collapse; border-radius: 8px; overflow: hidden; margin-top: 20px; }
        th { background-color: #4e73df; color: white; padding: 12px; }
        td { padding: 10px; border-bottom: 1px solid #eee; text-align: center; }
        tr:hover { background-color: #f1f4ff; }
    </style>
</head>

<body>
<div class="container">
    <h1>📊 รายงานสรุปยอดขาย (ปนัดดา)</h1>

    <?php
    include_once("connectdb.php");
    $sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales 
            FROM popsupermarket 
            GROUP BY MONTH(p_date) 
            ORDER BY Month;";
    $rs = mysqli_query($conn, $sql);

    $labels = [];
    $salesData = [];
    $tableRows = [];

    while ($data = mysqli_fetch_array($rs)) {
        $labels[] = "เดือน " . $data['Month'];
        $salesData[] = $data['Total_Sales'];
        $tableRows[] = $data; // เก็บไว้แสดงในตารางด้านล่าง
    }
    ?>

    <div class="charts-wrapper">
        <div class="chart-box">
            <canvas id="myBarChart"></canvas>
        </div>
        <div class="chart-box">
            <canvas id="myDoughnutChart"></canvas>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>เดือนที่</th>
                <th>ยอดขายรวม (บาท)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableRows as $row) { ?>
            <tr>
                <td><?php echo $row['Month']; ?></td>
                <td align="right"><strong><?php echo number_format($row['Total_Sales'], 0); ?></strong></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    // ดึงข้อมูลจาก PHP มาไว้ใน JavaScript
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($salesData); ?>;

    const colors = [
        '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796'
    ];

    // สร้าง Bar Chart
    new Chart(document.getElementById('myBarChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขายรายเดือน',
                data: dataValues,
                backgroundColor: colors,
                borderRadius: 5
            }]
        },
        options: { plugins: { legend: { display: false } } }
    });

    // สร้าง Doughnut Chart
    new Chart(document.getElementById('myDoughnutChart'), {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: colors,
                hoverOffset: 10
            }]
        },
        options: { cutout: '60%' }
    });
</script>

<?php mysqli_close($conn); ?>
</body>
</html>