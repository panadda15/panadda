<?php
include_once("connectdb.php");

if(isset($_POST['Submit'])){
    // 1. ป้องกัน SQL Injection ด้วย mysqli_real_escape_string
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $rid = mysqli_real_escape_string($conn, $_POST['rid']);
    
    // 2. ดึงนามสกุลไฟล์และทำให้เป็นตัวพิมพ์เล็กทั้งหมด
    $ext = strtolower(pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION));
    
    // 3. บันทึกข้อมูลลง Database
    $sql_insert = "INSERT INTO provinces (p_id, p_name, p_ext, r_id) VALUES (NULL, '{$pname}', '{$ext}', '{$rid}')";
    
    if(mysqli_query($conn, $sql_insert)){
        $pid = mysqli_insert_id($conn);
        
        // 4. ตรวจสอบและสร้างโฟลเดอร์ images ถ้ายังไม่มี
        if (!file_exists('images')) {
            mkdir('images', 0777, true);
        }

        // 5. ย้ายไฟล์รูปภาพ
        $target_file = "images/" . $pid . "." . $ext;
        if(move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file)){
            echo "<script>alert('บันทึกข้อมูลและอัปโหลดรูปสำเร็จ');</script>";
        } else {
            echo "<script>alert('บันทึกข้อมูลแล้ว แต่พาลูกไปไว้ในโฟลเดอร์ images ไม่ได้ (เช็ค Permission)');</script>";
        }
    } else {
        die("เพิ่มข้อมูลไม่ได้: " . mysqli_error($conn));
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ระบบจัดการจังหวัด - ปนัดดา</title>
    <style>
        body { font-family: Tahoma, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 80%; margin-top: 20px; }
        th { background-color: #f2f2f2; }
        .img-preview { object-fit: cover; border-radius: 5px; border: 1px solid #ddd; }
    </style>
</head>

<body>
<h1>งาน i -- ปนัดดา ศรีลารักษ์ (มะปราง)</h1>

<form method="post" action="" enctype="multipart/form-data">
    ชื่อจังหวัด: <input type="text" name="pname" autofocus required> 
    รูปภาพ: <input type="file" name="pimage" accept="image/*" required> 
    
    ภาค: 
    <select name="rid" required>
        <option value="">-- เลือกภาค --</option>
        <?php
        $sql_region = "SELECT * FROM regions";
        $rs_region = mysqli_query($conn, $sql_region);
        while ($data_region = mysqli_fetch_array($rs_region)){
            echo "<option value='{$data_region['r_id']}'>{$data_region['r_name']}</option>";
        }
        ?>
    </select>
    
    <button type="submit" name="Submit">บันทึกข้อมูล</button> 
</form>

<br><hr><br>

<table border="1" cellpadding="10">
    <tr>
        <th>รหัส</th>
        <th>ชื่อจังหวัด</th>
        <th>ชื่อภาค</th>
        <th>รูปภาพ</th>
        <th>จัดการ</th>
    </tr>
<?php
// ปรับ SELECT ให้ชัดเจน ป้องกันชื่อคอลัมน์ซ้ำกัน
$sql_show = "SELECT p.*, r.r_name FROM provinces AS p 
             INNER JOIN regions AS r ON p.r_id = r.r_id 
             ORDER BY p.p_id ASC";
$rs_show = mysqli_query($conn, $sql_show);

while ($data = mysqli_fetch_array($rs_show)){
    $image_path = "images/" . $data['p_id'] . "." . $data['p_ext'];
?>   
    <tr>
        <td align="center"><?php echo $data['p_id']; ?></td>
        <td><?php echo $data['p_name']; ?></td>
        <td><?php echo $data['r_name']; ?></td>
        
        <td align="center">
            <?php if(!empty($data['p_ext']) && file_exists($image_path)) { ?>
                <img src="<?php echo $image_path; ?>?t=<?php echo time(); ?>" width="100" class="img-preview">
            <?php } else { ?>
                <span style="color:red;">ไม่พบไฟล์รูป</span>
            <?php } ?>
        </td>
        
        <td align="center">
            <a href="delete_province.php?id=<?php echo $data['p_id']; ?>&ext=<?php echo $data['p_ext']; ?>" 
               onClick="return confirm('ยืนยันการลบจังหวัด <?php echo $data['p_name']; ?>?');">
                <img src="images/D.jpg" width="25" title="ลบข้อมูล">
            </a>
        </td>
    </tr>
<?php } ?>
</table>

</body>
</html>
<?php mysqli_close($conn); ?>