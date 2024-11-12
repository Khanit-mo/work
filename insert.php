<?php
// รับค่าจากตัวแปร GET
$name = $_GET['name'];
$name2 = $_GET['name2'];
$num = $_GET['num'];
$home = $_GET['home'];
$soy = $_GET['soy'];
$tambon = $_GET['tambon'];
$aum = $_GET['aum'];
$jang = $_GET['jang'];
$name23 = $_GET['name23'];
$num3 = $_GET['num3'];

// รวมไฟล์ config.php
include('config.php');

// เตรียมคำสั่ง SQL
$sql = "INSERT INTO `show`(`name`, `name2`, `num`, `home`, `soy`, `tambon`, `aum`, `jang`, `name23`, `num3`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// เตรียมคำสั่ง
$query = $conn->prepare($sql);

// ตรวจสอบความสำเร็จของ prepare
if (!$query) {
    die("การเตรียมคำสั่ง SQL ผิดพลาด: " . $conn->error);
}

// ผูกตัวแปร PHP กับ SQL parameters และรัน execute
$query->bind_param("ssissssssi", $name, $name2, $num, $home, $soy, $tambon, $aum, $jang, $name23, $num3);

if ($query->execute()) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย'); location.href = 'showdata.php'; </script>";
} else {
    echo "<script>alert('มีบางอย่างผิดพลาด: " . $query->error . "'); location.href = 'showdata.php'; </script>";
}
?>
