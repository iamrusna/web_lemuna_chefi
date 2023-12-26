<?php
session_start();
include '../connect.php';

//รับค่าตัวแปรมาจากไฟล์ course
$course_name = $_POST['course_name'];
$course_detail = $_POST['course_detail'];
$course_year = $_POST['course_year'];
$course_hour = $_POST['course_hour'];

//อัพโหลดรูปภาพ
// if (is_uploaded_file($_FILES['image']['tmp_name'])) {
//     $new_image_name = 'yls_'.uniqid().".".pathinfo(basename($_FILES['image']['name']), PATHINFO_EXTENSION);
//     $image_upload_path = "../image/".$new_image_name;
//     move_uploaded_file($_FILES['image']['tmp_name'],$image_upload_path);
//     } else {
//     $new_image_name = "";
//     }

//คำสั่งเพิ่มข้อมูลลงตาราง course
$sql ="INSERT INTO course (course_name,course_detail,course_year,course_hour)
VALUES('$course_name','$course_detail','$course_year','$course_hour')";
$result=mysqli_query($conn,$sql);
if($result)
{
    $_SESSION['success']="เพิ่มข้อมูลสำเร็จ";
    echo "<script> window.location='course.php'; </script>";
}
// else
// {
//     $_SESSION['error']=" ไม่สามารถทำการได้ กรุณาลองใหม่อีกครั้ง ";
//     echo "<script> window.location='add_course.php'; </script>";
// }

?>