<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>66010914050 ปนัดดา ศรีลารักษ์ (มะปราง) - Bootstrap</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container my-5">
    <h1 class="text-center mb-4 text-primary">ฟอร์มรับข้อมูล - ปนัดดา ศรีลารักษ์ (มะปราง) - Gemini</h1>

    <div class="card shadow-lg p-4 mb-5 bg-white rounded">
        <form method="post" action="" class="row g-3">
            
            <div class="col-md-6">
                <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
            </div>

            <div class="col-md-6">
                <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="col-md-6">
                <label for="height" class="form-label">ส่วนสูง (ซม.)</label>
                <input type="number" class="form-control" id="height" name="height" min="100" max="200" placeholder="100 - 200">
            </div>

            <div class="col-md-6">
                <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="birthday" name="birthday">
            </div>

            <div class="col-md-6">
                <label for="major" class="form-label">สาขาวิชา</label>
                <select id="major" name="major" class="form-select">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>
            
            <div class="col-md-6">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c" title="เลือกสี">
            </div>

            <div class="col-12">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            </div>

            <div class="col-12 mt-4 d-flex flex-wrap gap-2">
                <button type="submit" name="Submit" class="btn btn-success">สมัครสมาชิก</button>
                <button type="reset" class="btn btn-outline-secondary">ยกเลิก</button>
                <button type="button" onClick="window.location='https://www.msu.ac.th/';" class="btn btn-info text-white">Go to MSU</button>
                <button type="button" onMouseOver="alert('อะแฮ่มม');" class="btn btn-warning text-white">Hello (On Hover)</button> 
                <button type="button" onClick="window.print();" class="btn btn-dark">พิมพ์</button>
            </div>
        </form>
    </div>
    
    <hr class="my-5">

    <?php
    if (isset($_POST['Submit'])) {
        // ดึงข้อมูล
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $major = $_POST['major'];
        
        // แสดงผลลัพธ์
        echo '<div class="card p-4 bg-light shadow-sm">';
        echo '<h3 class="mb-3 text-success">✅ ข้อมูลที่ส่งมา:</h3>';
        echo '<p><strong>ชื่อ-สกุล:</strong> ' . htmlspecialchars($fullname) . '</p>';
        echo '<p><strong>เบอร์โทร:</strong> ' . htmlspecialchars($phone) . '</p>';
        echo '<p><strong>ส่วนสูง:</strong> ' . (isset($height) && $height != '' ? htmlspecialchars($height) . ' ซม.' : '-') . '</p>';
        echo '<p><strong>ที่อยู่:</strong> ' . (isset($address) && $address != '' ? nl2br(htmlspecialchars($address)) : '-') . '</p>';
        echo '<p><strong>วันเดือนปีเกิด:</strong> ' . (isset($birthday) && $birthday != '' ? htmlspecialchars($birthday) : '-') . '</p>';
        echo '<p class="d-flex align-items-center"><strong>สีที่ชอบ:</strong> &nbsp;';
        echo '<span class="px-3 py-1 rounded me-2 border" style="background-color:' . htmlspecialchars($color) . '; color: ' . (is_dark($color) ? 'white' : 'black') . ';">' . htmlspecialchars($color) . '</span></p>';
        echo '<p><strong>สาขาวิชา:</strong> ' . htmlspecialchars($major) . '</p>';
        echo '</div>';
    }

    /**
     * Helper function to check if a color is dark (for text contrast)
     * @param string $hexColor The hex color code (e.g., #RRGGBB)
     * @return bool True if the color is considered dark, false otherwise.
     */
    function is_dark($hexColor) {
        $hexColor = ltrim($hexColor, '#');
        if (strlen($hexColor) == 3) {
            $hexColor = $hexColor[0] . $hexColor[0] . $hexColor[1] . $hexColor[1] . $hexColor[2] . $hexColor[2];
        }
        $r = hexdec(substr($hexColor, 0, 2));
        $g = hexdec(substr($hexColor, 2, 2));
        $b = hexdec(substr($hexColor, 4, 2));
        // Use the W3C recommended Luma calculation
        $luma = (0.2126 * $r + 0.7152 * $g + 0.0722 * $b);
        return $luma < 150; // Threshold can be adjusted
    }
    ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>