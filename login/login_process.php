<?php
session_start();

// // ตรวจสอบว่าผู้ใช้ล็อกอินแล้วหรือไม่
// if(isset($_SESSION["email"])) {
//     // ตรวจสอบประเภทผู้ใช้
//     if(isset($_SESSION["type_user"])) {
//         $type_user = $_SESSION["type_user"];
//         if($type_user == "admin") {
//             header("Location: ../admin/announce.php"); // ไปที่หน้า admin หรือหน้าที่คุณต้องการให้ไป
//         } elseif($type_user == "user") {
//             header("Location: ../homepage.php"); // ไปที่หน้า user หรือหน้าที่คุณต้องการให้ไป
//         } else {
//             // ประเภทผู้ใช้ไม่ถูกต้อง
//             header("Location: login.php"); // เช่นเดียวกับการล็อกเอ้าท์
//         }
//         exit();
//     }
// }

// ตรวจสอบว่ามีการส่งข้อมูลผ่านแบบฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // เชื่อมต่อกับฐานข้อมูล
    require_once "../connect.php";

    // รับข้อมูลจากแบบฟอร์ม
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]); // เพิ่มบรรทัดนี้

    // คิวรีสำหรับตรวจสอบข้อมูลผู้ใช้
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'"; // ปรับคิวรีนี้
    $result = $conn->query($sql);

    // ตรวจสอบผลลัพธ์
    if ($result->num_rows > 0) {
        // ล็อกอินสำเร็จ
        $row = $result->fetch_assoc();
        $_SESSION["email"] = $email;

        // ตรวจสอบประเภทผู้ใช้
        if ($row["type_user"] == "admin") {
            header("Location: ../admin/header.php"); // ไปที่หน้า admin หรือหน้าที่คุณต้องการให้ไป
        } elseif ($row["type_user"] == "user") {
            header("Location: ../homepage.php"); // ไปที่หน้า user หรือหน้าที่คุณต้องการให้ไป
        }

        exit();
    } else {
        // ล็อกอินไม่สำเร็จ
        $error_message = "รหัสบัตรประชาชนหรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>