<?php
session_start();
include '../connect.php';

//รับค่าตัวแปรมาจากไฟล์ applicant
$applicant_usercode = $_POST['applicant_usercode'];
$applicant_user_name = $_POST['applicant_user_name'];
$applicant_course_name = $_POST['applicant_course_name'];
$applicant_user_telphone = $_POST['applicant_user_telphone'];
$applicant_branch = $_POST['applicant_branch'];
$applicant_study = $_POST['applicant_study'];
$applicant_year = $_POST['applicant_year'];

//อัพโหลดรูปภาพ
// if (is_uploaded_file($_FILES['image']['tmp_name'])) {
//     $new_image_name = 'yls_'.uniqid().".".pathinfo(basename($_FILES['image']['name']), PATHINFO_EXTENSION);
//     $image_upload_path = "../image/".$new_image_name;
//     move_uploaded_file($_FILES['image']['tmp_name'],$image_upload_path);
//     } else {
//     $new_image_name = "";
//     }

//คำสั่งเพิ่มข้อมูลลงตาราง applicant
        $sql ="INSERT INTO applicant (applicant_usercode,applicant_user_name,applicant_course_name,applicant_user_telphone,applicant_branch,applicant_study,applicant_year)
        VALUES('$applicant_usercode','$applicant_user_name','$applicant_course_name','$applicant_user_telphone','$applicant_branch','$applicant_study','$applicant_year')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            $_SESSION['success']="เพิ่มข้อมูลสำเร็จ";
            echo "<script> window.location='check_application.php'; </script>";
        }
        else
        {
            $_SESSION['error']=" ไม่สามารถทำการได้ กรุณาลองใหม่อีกครั้ง ";
            echo "<script> window.location='add_application.php'; </script>";
        }

        ?>