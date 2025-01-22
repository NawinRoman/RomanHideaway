<?php
include 'db.php'; // เชื่อมต่อฐานข้อมูล

// รับค่าจากฟอร์ม
$name_hh = $_POST['name_hh'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$gen = $_POST['gen'];

// สร้างคำสั่ง SQL สำหรับแทรกข้อมูล
$sql = "INSERT INTO member (name_hh, nickname, email, gen) VALUES ('$name_hh', '$nickname', '$email', '$gen')";

// ตรวจสอบว่าแทรกข้อมูลสำเร็จหรือไม่
if ($conn->query($sql) === TRUE) {
    echo "ข้อมูลถูกบันทึกสำเร็จ! <a href='index.php'>กลับไปที่ฟอร์ม</a>";
} else {
    echo "เกิดข้อผิดพลาด: " . $conn->error;
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
