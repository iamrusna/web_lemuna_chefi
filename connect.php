<?php
// ข้อมูลการเชื่อมต่อฐานข้อมูล (แก้ไขตามการเชื่อมต่อของคุณ)

$servername = "localhost"; // ชื่อเซิร์ฟเวอร์หรือที่อยู่ IP
$username = "root"; // ชื่อผู้ใช้ของฐานข้อมูล
$password = ""; // รหัสผ่านของฐานข้อมูล
$dbname = "web_lemuna_chefi"; // ชื่อฐานข้อมูลที่ต้องการเชื่อมต่อ

// สร้างการเชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($servername, $username, $password, $dbname);

// ตรวจสอบว่าการเชื่อมต่อสำเร็จหรือไม่
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}
?>

