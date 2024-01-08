<?php
session_start();
include '../connect.php';

//รับค่าตัวแปรมาจากไฟล์ announce
$announce_course_name = $_POST['announce_course_name'];
$announce_detail = $_POST['announce_detail'];
$announce_date = $_POST['announce_date'];
$announce_time = $_POST['announce_time'];

//อัพโหลดรูปภาพ
// if (is_uploaded_file($_FILES['image']['tmp_name'])) {
//     $new_image_name = 'yls_'.uniqid().".".pathinfo(basename($_FILES['image']['name']), PATHINFO_EXTENSION);
//     $image_upload_path = "../image/".$new_image_name;
//     move_uploaded_file($_FILES['image']['tmp_name'],$image_upload_path);
//     } else {
//     $new_image_name = "";
//     }

//คำสั่งเพิ่มข้อมูลลงตาราง announce
$sql ="INSERT INTO announce (announce_course_name,announce_detail,announce_date,announce_time)
VALUES('$announce_course_name','$announce_detail','$announce_date','$announce_time')";
$result=mysqli_query($conn,$sql);
if($result)
{
    $_SESSION['success']="เพิ่มข้อมูลสำเร็จ";
    echo "<script> window.location='announce.php'; </script>";
}
else
{
    $_SESSION['error']=" ไม่สามารถทำการได้ กรุณาลองใหม่อีกครั้ง ";
    echo "<script> window.location='add_announce.php'; </script>";
}

?>