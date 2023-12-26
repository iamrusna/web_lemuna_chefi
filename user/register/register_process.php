<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // เชื่อมต่อฐานข้อมูล (ให้แก้ไขตามการเชื่อมต่อของคุณ)
    require_once '../../connect.php';

    // ดึงข้อมูลจากฟอร์ม
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $telphone = isset($_POST["tel"]) ? $_POST["tel"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";


    // ทำความสะอาดข้อมูลที่รับเข้ามา (อย่าลืมทำความสะอาดเพื่อป้องกัน SQL Injection)
    $name = mysqli_real_escape_string($conn, $name);
    $telphone = mysqli_real_escape_string($conn, $telphone);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // เช็คว่าอีเมลนี้มีอยู่ในฐานข้อมูลหรือไม่
    $check_email_query = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($check_email_query);

    if ($result->$num_rows > 0) {
        // ถ้ามีอีเมลนี้ในฐานข้อมูลแล้ว
        echo "อีเมลนี้มีผู้ใช้แล้ว";
    } else {
        // ถ้ายังไม่มีอีเมลนี้ในฐานข้อมูล
        // คำสั่ง SQL สำหรับเพิ่มข้อมูลลงในตาราง user
        $sql = "INSERT INTO user (name, telphone, email, password, type_user) VALUES ('$name', '$telphone', '$email', '$password', 'user')";

        if ($conn->query($sql) === TRUE) {
            // สมัครสมาชิกสำเร็จ ให้เด้งไปยังหน้า login
            header("Location: ../../login/login.php");
            exit(); // ต้องใส่ exit() เพื่อให้ระบบหยุดการทำงานทันทีหลังจากเด้งไปหน้าใหม่
        } else {
            echo "การสมัครสมาชิกล้มเหลว: " . $conn->error;
        }
    }
    
    $conn->close();
}
?>
