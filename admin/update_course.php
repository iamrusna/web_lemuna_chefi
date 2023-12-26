<?php
    session_start();

    include '../connect.php';

    $course_id=$_POST['course_id'];
    $course_name=$_POST['course_name'];
    $course_detail=$_POST['course_detail'];
    $course_year=$_POST['course_year'];
    $course_hour=$_POST['course_hour'];



    

    $sql = "UPDATE course set course_name='$course_name',course_detail='$course_detail', 
    course_year='$course_year',course_hour='$course_hour' WHERE course_id= '$course_id' ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> window.location='course.php'; </script>";
        $_SESSION['success']= "แก้ไขข้อมูลเรีบยร้อยแล้ว";
    }else{
        echo "<script> window.location='edit_course.php'; </script>";
        $_SESSION['error']= "ไม่สามารถแก้ไขข้อมูล ลองใหม่อีกครั้ง";
    }
    mysqli_close($conn);

?>
