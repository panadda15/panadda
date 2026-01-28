<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>สรุปข้อมูลใบสมัคร - LOLO จำกัด</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    body {
        background-color: #f0f2f5; /* Light background for contrast */
    }
    .card-summary {
        border-top: 5px solid #198754; /* Green border for success */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .table-detail th, .table-detail td {
        padding: 0.75rem 0;
        vertical-align: top;
        border-top: none;
    }
    .table-detail th {
        width: 35%;
        color: #6c757d; /* Gray color for labels */
        font-weight: 500;
    }
    .section-header {
        background-color: #e9ecef;
        color: #0d6efd;
        font-weight: bold;
        padding: 10px 15px;
        margin-top: 20px;
        border-radius: 4px;
        border-left: 5px solid #0d6efd;
    }
</style>
</head>

<body>
<div class="container my-5">
    
    <header class="text-center mb-5">
        <h1 class="display-6 fw-bold text-success">🎉 การสมัครเสร็จสมบูรณ์</h1>
        <p class="lead text-muted">สรุปข้อมูลใบสมัคร - LOLO จำกัด</p>
    </header>

    <?php
    // ตรวจสอบว่ามีการส่งข้อมูลผ่าน method POST หรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // 1. ดึงและทำความสะอาดข้อมูลจาก $_POST
        $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : ' - ';
        $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ' - ';
        $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ' - ';
        
        // ใช้ชื่อตัวแปรจากโค้ดเดิมที่คาดว่ามี เช่น prefix, position, education, experience_years
        $prefix = isset($_POST['prefix']) ? htmlspecialchars($_POST['prefix']) : $title; // ใช้ prefix แทน title ถ้ามี
        $position = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : 'ไม่ได้ระบุ';
        $birthday = isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : ' - ';
        $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ' - ';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ' - ';
        // ใช้ nl2br สำหรับ textarea
        $address = isset($_POST['address']) ? nl2br(htmlspecialchars($_POST['address'])) : ' - '; 
        $education = isset($_POST['education']) ? htmlspecialchars($_POST['education']) : ' - ';
        // ใช้ nl2br สำหรับทักษะและประสบการณ์
        $skills = isset($_POST['skills']) ? nl2br(htmlspecialchars($_POST['skills'])) : ' - '; 
        $experience_desc = isset($_POST['experience']) ? nl2br(htmlspecialchars($_POST['experience'])) : ' - '; // ใช้ experience_desc แทน experience
        $experience_years = isset($_POST['experience_years']) ? htmlspecialchars($_POST['experience_years']) . ' ปี' : ' - '; // ถ้ามีช่องปี
        
        // การจัดการเงินเดือน: ใช้ number_format()
        $raw_salary = isset($_POST['salary']) ? (int)$_POST['salary'] : 0;
        $salary = $raw_salary > 0 ? number_format($raw_salary) : 'ไม่ระบุ';

        // สำหรับช่องทางรับข่าวสาร (สมมติว่าใช้ 'channel' จากโค้ดต้นฉบับ)
        $channels = isset($_POST['channel']) && is_array($_POST['channel']) ? implode(", ", array_map('htmlspecialchars', $_POST['channel'])) : 'ไม่ได้ระบุ';

        // 2. แสดงผลข้อมูลในรูปแบบ Card และ Detail Table
        echo '<div class="card card-summary p-md-5 p-4 bg-white">';
        
        // หัวข้อหลัก: ตำแหน่งงานที่สมัคร
        echo '<div class="alert alert-primary text-center" role="alert">';
        echo '<h3 class="mb-0 fw-bold">ตำแหน่งที่สมัคร: <span class="text-dark">'.$position.'</span></h3>';
        echo '</div>';
        
        echo '<table class="table table-detail mb-0">';
        
        // --- ส่วนที่ 1: ข้อมูลส่วนตัว ---
        echo '<thead><tr><th colspan="2" class="section-header">ข้อมูลส่วนตัว</th></tr></thead>';
        echo '<tbody>';
        echo '<tr><th>ชื่อ-สกุล:</th><td>'.$prefix.' '.$firstname.' '.$lastname.'</td></tr>';
        echo '<tr><th>วันเดือนปีเกิด:</th><td>'.$birthday.'</td></tr>';
        echo '<tr><th>เบอร์โทรศัพท์:</th><td>'.$phone.'</td></tr>';
        echo '<tr><th>อีเมล:</th><td>'.$email.'</td></tr>';
        echo '<tr><th>ที่อยู่ปัจจุบัน:</th><td>'.$address.'</td></tr>';
        echo '</tbody>';

        // --- ส่วนที่ 2: การศึกษาและประสบการณ์ ---
        echo '<thead><tr><th colspan="2" class="section-header">การศึกษาและทักษะ</th></tr></thead>';
        echo '<tbody>';
        echo '<tr><th>ระดับการศึกษา:</th><td>'.$education.'</td></tr>';
        echo '<tr><th>ประสบการณ์ทำงานรวม:</th><td>'.$experience_years.'</td></tr>';
        echo '<tr><th>ความสามารถพิเศษ:</th><td>'.$skills.'</td></tr>';
        echo '<tr><th>รายละเอียดประสบการณ์:</th><td>'.$experience_desc.'</td></tr>';
        echo '</tbody>';

        // --- ส่วนที่ 3: ข้อมูลเพิ่มเติม ---
        echo '<thead><tr><th colspan="2" class="section-header">ข้อมูลการจ้างงาน</th></tr></thead>';
        echo '<tbody>';
        echo '<tr><th>เงินเดือนคาดหวัง:</th><td><span class="fw-bold text-danger">'.$salary.'</span> บาท/เดือน</td></tr>';
        echo '<tr><th>ทราบข่าวจาก:</th><td>'.$channels.'</td></tr>';
        echo '</tbody>';

        echo '</table>';
        
        // ปุ่มกลับไปยังหน้าหลัก
        echo '<div class="d-grid gap-2 col-4 mx-auto mt-5">';
        echo '<a href="index.html" class="btn btn-success btn-lg">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill me-2" viewBox="0 0 16 16"><path d="M6.5 14.5v-3.505c0-.263.2-.5.5-.5h2a.5.5 0 0 1 .5.5v3.505h2V7.5L8 2.766 4.5 7.5v6.5z"/><path d="M13 5.75L8 1.282 3 5.75V15h10V5.75z"/></svg> เสร็จสิ้น';
        echo '</a>';
        echo '</div>';

        echo '</div>'; // end card-summary

    } else {
        // กรณีเข้าถึงหน้านี้โดยตรงโดยไม่ได้ส่งฟอร์มมา
        echo '<div class="alert alert-warning text-center" role="alert">';
        echo '⚠️ กรุณาส่งข้อมูลจากแบบฟอร์มรับสมัครงานก่อน';
        echo '<div class="mt-3"><a href="index.html" class="btn btn-warning">กลับไปที่ฟอร์ม</a></div>';
        echo '</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>