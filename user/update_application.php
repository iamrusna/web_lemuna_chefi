<?php
    session_start();

    include '../connect.php';

    $applicant_id=$_POST['applicant_id'];
    $applicant_usercode = $_POST['applicant_usercode'];
    $applicant_user_name = $_POST['applicant_user_name'];
    $applicant_course_name = $_POST['applicant_course_name'];
    $applicant_user_telphone = $_POST['applicant_user_telphone'];
    $applicant_branch = $_POST['applicant_branch'];
    $applicant_study = $_POST['applicant_study'];
    $applicant_year = $_POST['applicant_year'];



    

    $sql = "UPDATE applicant set applicant_usercode='$applicant_usercode',applicant_user_name='$applicant_user_name', 
    applicant_course_name='$applicant_course_name',applicant_user_telphone='$applicant_user_telphone',applicant_branch='$applicant_branch',
    applicant_study='$applicant_study',applicant_year='$applicant_year'WHERE applicant_id= '$applicant_id' ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> window.location='check_application.php'; </script>";
        $_SESSION['success']= "แก้ไขข้อมูลเรีบยร้อยแล้ว";
    }else{
        echo "<script> window.location='edit_course.php'; </script>";
        $_SESSION['error']= "ไม่สามารถแก้ไขข้อมูล ลองใหม่อีกครั้ง";
    }
    mysqli_close($conn);

?>
