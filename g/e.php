<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>66010914050 ปนัดดา ศรีลารักษ์ (มะปราง)</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #4e73df;
            --bg-color: #f8f9fc;
            --card-bg: #ffffff;
            --text-main: #2e59d9;
        }
        body { 
            font-family: 'Sarabun', 'Inter', sans-serif; 
            background-color: var(--bg-color); 
            margin: 0; padding: 40px; color: #5a5c69;
        }
        .container { max-width: 1000px; margin: auto; }
        h1 { color: var(--text-main); border-bottom: 3px solid var(--text-main); padding-bottom: 10px; margin-bottom: 30px; }
        
        /* ตกแต่งตาราง */
        .table-card { background: var(--card-bg); border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); padding: 20px; margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; overflow: hidden; border-radius: 8px; }
        th { background-color: var(--primary); color: white; padding: 12px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #e3e6f0; }
        tr:hover { background-color: #f1f4ff; }

        /* ตกแต่ง Layout กราฟ */
        .chart-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 25px; }
        .chart-card { background: var(--card-bg); border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); padding: 25px; text-align: center; }
        .chart-card h3 { margin-top: 0; color: #333; font-size: 1.1rem; }
        canvas { width: 100% !important; height: auto !important; }
    </style>
</head>

<body>
    <div class="container">
        <h1>ปนัดดา ศรีลารักษ์ (มะปราง)</h1>

        <?php
        include_once("connectdb.php");
        $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country` ORDER BY total DESC;";
        $rs = mysqli_query($conn, $sql);
        $labels = []; $values = [];
        ?>

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>ประเทศ (Country)</th>
                        <th style="text-align: right;">ยอดขายรวม (Total Sales)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($rs)) { 
                        $labels[] = $data['p_country'];
                        $values[] = $data['total'];
                    ?>
                    <tr>
                        <td><strong><?php echo $data['p_country']; ?></strong></td>
                        <td align="right"><?php echo number_format($data['total'], 2); ?></td>
                    </tr>
                    <?php } mysqli_close($conn); ?>
                </tbody>
            </table>
        </div>

        <div class="chart-grid">
            <div class="chart-card">
                <h3>Bar Chart: Sales by Country</h3>
                <canvas id="barChart"></canvas>
            </div>
            <div class="chart-card">
                <h3>Pie Chart: Sales Share</h3>
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        const ctxData = {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                data: <?php echo json_encode($values); ?>,
                backgroundColor: [
                    '#4e73df', '#1cc88a', '#f6c23e', '#e74a3b', '#36b9cc', '#858796'
                ],
                hoverOffset: 15,
                borderRadius: 5
            }]
        };

        const commonOptions = {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        };

        // สร้าง Bar Chart
        new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: ctxData,
            options: {
                ...commonOptions,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true, grid: { drawBorder: false } } }
            }
        });

        // สร้าง Pie Chart
        new Chart(document.getElementById('pieChart'), {
            type: 'doughnut', // ใช้ doughnut จะดูทันสมัยกว่า pie ปกติครับ
            data: ctxData,
            options: commonOptions
        });
    </script>
</body>
</html>