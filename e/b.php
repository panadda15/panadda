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
        
        <form method="post" action="">
            
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
            <button type="submit" name="Submit" class="btn btn-primary">ยืนยันการสมัคร</button> </div>
            

            
<hr>

<?php
    if (isset($_POST['Submit'])) {
        $position = $_POST['position'];
        $prefix = $_POST['prefix'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $education = $_POST['education'];
        $experience_years = $_POST['experience_years'];
        $skills = $_POST['skills'];
        
        include_once("connectdb.php");

        $sql = "INSERT INTO application (a_position, a_prefix, a_firstname, a_lastname, a_birthday, a_phone, a_address, a_education, a_experience_years, a_skills) 
        VALUES  ('{$position}', '{$prefix}', '{$firstname}', '{$lastname}', '{$birthday}', '{$phone}', '{$address}', '{$education}', '{$experience_years}', '{$skills}')";
        
       mysqli_query ($conn, $sql) or die ("insert ไม่ได้"); 

        echo "<script>";
        echo "alert('บันทึกข้อมูลสำเร็จ');";
        echo "</script>";
       
    }
    ?>
    
</div>

<script>
</body>
</html>