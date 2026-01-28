<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>66010914050 ปนัดดา ศรีลารักษ์ (มะปราง)</title>

<!-- Link to Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        max-width: 600px;
        margin-top: 50px;
    }
    h1 {
        font-size: 2rem;
        text-align: center;
        margin-bottom: 30px;
    }
    .btn-custom {
        width: 100%;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .alert-color {
        display: inline-block;
        height: 30px;
        width: 50px;
        border-radius: 5px;
    }
</style>
</head>

<body>

<div class="container">
    <h1>ฟอร์มรับข้อมูล - ปนัดดา ศรีลารักษ์ (มะปราง) - Chat gpt</h1>

    <form method="post" action="">
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-สกุล</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทร</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="height" class="form-label">ส่วนสูง</label>
            <input type="number" class="form-control" id="height" name="height" min="100" max="200">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">ที่อยู่</label>
            <textarea class="form-control" id="address" name="address" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">สีที่ชอบ</label>
            <input type="color" class="form-control form-control-color" id="color" name="color">
        </div>

        <div class="mb-3">
            <label for="major" class="form-label">สาขาวิชา</label>
            <select class="form-select" id="major" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การตลาด">การตลาด</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" name="Submit" class="btn btn-primary">สมัครสมาชิก</button>
            <button type="reset" class="btn btn-secondary">ยกเลิก</button>
        </div>

        <div class="mt-3">
            <button type="button" class="btn btn-info w-100" onClick="window.location='https://www.msu.ac.th/';">Go to MSU</button>
        </div>

        <div class="mt-2">
            <button type="button" class="btn btn-warning w-100" onMouseOver="alert('อะแฮ่มม');">Hello</button>
        </div>

        <div class="mt-2">
            <button type="button" class="btn btn-success w-100" onClick="window.print();">พิมพ์</button>
        </div>

    </form>

    <hr>

    <?php
    if (isset($_POST['Submit'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $major = $_POST['major'];
        
        echo "<div class='alert alert-info mt-4'>";
        echo "<strong>ข้อมูลที่ได้รับ:</strong><br>";
        echo "ชื่อ-สกุล: ".$_POST['fullname']."<br>";
        echo "เบอร์โทร: ".$_POST['phone']."<br>";
        echo "ส่วนสูง: ".$_POST['height']." ซม.<br>";
        echo "ที่อยู่: ".$_POST['address']."<br>";
        echo "วันเดือนปีเกิด: ".$_POST['birthday']."<br>";
        echo "สีที่ชอบ: <div class='alert-color' style='background-color:{$color};'></div><br>";
        echo "สาขาวิชา: ".$major."<br>";
        echo "</div>";
    }
    ?>

</div>

<!-- Bootstrap JS and dependencies (optional for some features like modals) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
