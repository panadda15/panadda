<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มรับสมัครงาน - บริษัท LOLO จำกัด</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* Custom style to make the form look more professional */
    .form-section-header {
        background-color: #f8f9fa; /* Light gray background */
        border-left: 5px solid #0d6efd; /* Blue border on the left */
        padding: 10px 15px;
        margin-top: 20px;
        margin-bottom: 15px;
    }
</style>
</head>

<body>
<div class="container my-5">
    
    <header class="text-center mb-5">
        <h1 class="display-6 fw-bold text-primary">บริษัท LOLO จำกัด</h1>
        <p class="lead text-secondary">ฟอร์มรับสมัครงานออนไลน์</p>
    </header>

    <div class="card shadow-lg p-md-5 p-3 bg-white rounded">
        
        <form method="post" action="f.php">
            
            <div class="form-section-header">
                <h4 class="mb-0 text-dark">ตำแหน่งที่ต้องการสมัคร</h4>
            </div>
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="position" class="form-label fw-bold">ตำแหน่งงานที่สนใจ <span class="text-danger">*</span></label>
                    <select id="position" name="position" class="form-select" required>
                        <option value="" selected disabled>-- กรุณาเลือกตำแหน่ง --</option>
                        <option value="Senior Software Developer">Content Creator</option>
                        <option value="Digital Marketing Manager">Video Editor</option>
                        <option value="Data Analyst">Marketing Executive</option>
                        <option value="HR Officer">PR</option>
                        <option value="HR Officer">Social Media Manager</option>
                        <option value="Other">อื่นๆ (ระบุในช่องความสามารถพิเศษ)</option>
                    </select>
                </div>
            </div>

            <div class="form-section-header">
                <h4 class="mb-0 text-dark">ข้อมูลส่วนตัว</h4>
            </div>
            <div class="row g-3">
                
                <div class="col-md-3">
                    <label for="prefix" class="form-label">คำนำหน้า <span class="text-danger">*</span></label>
                    <select id="prefix" name="prefix" class="form-select" required>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="firstname" class="form-label">ชื่อ (ภาษาไทย) <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="col-md-4">
                    <label for="lastname" class="form-label">นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                
                <div class="col-md-6">
                    <label for="birthday" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="birthday" name="birthday" required>
                </div>
                
                <div class="col-md-6">
                    <label for="phone" class="form-label">เบอร์โทรศัพท์มือถือ <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" required placeholder="0XX-XXX-XXXX">
                </div>
                
                <div class="col-12">
                    <label for="address" class="form-label">ที่อยู่ปัจจุบัน</label>
                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                </div>
            </div>

            <div class="form-section-header">
                <h4 class="mb-0 text-dark">ประวัติการศึกษาและทักษะ</h4>
            </div>
            <div class="row g-3">
                
                <div class="col-md-6">
                    <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                    <select id="education" name="education" class="form-select" required>
                        <option value="" selected disabled>-- เลือก --</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                        <option value="ปวส/อนุปริญญา">ปวส/อนุปริญญา</option>
                        <option value="มัธยมปลาย">มัธยมปลาย/เทียบเท่า</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="experience_years" class="form-label">ประสบการณ์ทำงาน (ปี) <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="experience_years" name="experience_years" min="0" required>
                </div>

                <div class="col-12">
                    <label for="skills" class="form-label">ความสามารถพิเศษ / ทักษะที่เกี่ยวข้อง (เช่น ภาษา, โปรแกรม, เครื่องมือ)</label>
                    <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="เช่น ภาษาอังกฤษระดับดี, Python, SEO, Photoshop, Microsoft Office"></textarea>
                </div>
            </div>
            
            <div class="form-section-header">
                <h4 class="mb-0 text-dark">ข้อมูลเพิ่มเติม</h4>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="resume" class="form-label">อัปโหลด Resume/CV</label>
                    <input class="form-control" type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">
                    <div class="form-text">รองรับไฟล์ PDF, DOC, DOCX
                    
  <div class="d-flex justify-content-between">
            <button type="submit" name="Submit" class="btn btn-primary">ยืนยันการสมัคร</button>on> </div>
            
<hr>

<?php
// ตรวจสอบว่ามีการกดปุ่ม 'ส่งใบสมัคร' หรือไม่
if (isset($_POST['apply_submit'])) {
    
    // ดึงข้อมูลที่ส่งมาจากฟอร์ม (พร้อมการทำความสะอาดข้อมูลด้วย htmlspecialchars)
    $position = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : '-';
    $prefix = isset($_POST['prefix']) ? htmlspecialchars($_POST['prefix']) : '-';
    $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '-';
    $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '-';
    $birthday = isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : '-';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '-';
    $address = isset($_POST['address']) ? nl2br(htmlspecialchars($_POST['address'])) : '-'; 
    $education = isset($_POST['education']) ? htmlspecialchars($_POST['education']) : '-';
    $experience_years = isset($_POST['experience_years']) ? htmlspecialchars($_POST['experience_years']) : '0';
    $skills = isset($_POST['skills']) ? nl2br(htmlspecialchars($_POST['skills'])) : '-';
    $salary = isset($_POST['salary']) && $_POST['salary'] != '' ? number_format($_POST['salary']) . ' บาท' : 'ไม่ระบุ';

    // 📢 เริ่มต้นส่วนแสดงผลลัพธ์โดยใช้ Bootstrap Card
    echo '<div class="card p-4 mt-5 bg-light shadow-sm">';
    echo '<h3 class="mb-4 text-success border-bottom pb-2">✅ สรุปข้อมูลใบสมัครที่ได้รับ</h3>';
    
    // ตารางแสดงผลข้อมูล
    echo '<table class="table table-borderless table-sm">';
    
    // ... (ส่วนแสดงผลข้อมูลในตารางตามที่คุณได้เขียนไว้)
    
    echo '<tr><td colspan="2" class="fw-bold text-primary pt-3 border-top">ข้อมูลตำแหน่งงาน</td></tr>';
    echo '<tr><td style="width: 30%;"><strong>ตำแหน่งที่สมัคร:</strong></td><td>' . $position . '</td></tr>';
    
    echo '<tr><td colspan="2" class="fw-bold text-primary pt-3 border-top">ข้อมูลส่วนตัว</td></tr>';
    echo '<tr><td><strong>ชื่อ-สกุล:</strong></td><td>' . $prefix . ' ' . $firstname . ' ' . $lastname . '</td></tr>';
    echo '<tr><td><strong>วันเดือนปีเกิด:</strong></td><td>' . $birthday . '</td></tr>';
    echo '<tr><td><strong>เบอร์โทรศัพท์:</strong></td><td>' . $phone . '</td></tr>';
    echo '<tr><td><strong>ที่อยู่:</strong></td><td>' . $address . '</td></tr>';

    echo '<tr><td colspan="2" class="fw-bold text-primary pt-3 border-top">ประวัติการศึกษาและทักษะ</td></tr>';
    echo '<tr><td><strong>ระดับการศึกษาสูงสุด:</strong></td><td>' . $education . '</td></tr>';
    echo '<tr><td><strong>ประสบการณ์ทำงาน:</strong></td><td>' . $experience_years . ' ปี</td></tr>';
    echo '<tr><td><strong>ความสามารถพิเศษ:</strong></td><td>' . $skills . '</td></tr>';

    echo '<tr><td colspan="2" class="fw-bold text-primary pt-3 border-top">ข้อมูลเพิ่มเติม</td></tr>';
    echo '<tr><td><strong>เงินเดือนที่คาดหวัง:</strong></td><td>' . $salary . '</td></tr>';
    echo '<tr><td><strong>ไฟล์ Resume/CV:</strong></td><td>' . ' *การรับไฟล์ต้องใช้ PHP ในการจัดการไฟล์จริง (File Handling)' . '</td></tr>';
    
    echo '</table>';
    echo '</div>'; // ปิด div card
}
?>