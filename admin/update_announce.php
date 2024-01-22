<?php
    session_start();
    include '../connect.php';

    $announce_id=$_POST['announce_id'];
    $announce_course_name=$_POST['announce_course_name'];
    $announce_model=$_POST['announce_model'];
    $announce_date=$_POST['announce_date'];
    $announce_time=$_POST['announce_time'];



    

    $sql = "UPDATE announce set announce_course_name='$announce_course_name',announce_model='$announce_model', 
    announce_date='$announce_date',announce_time='$announce_time' WHERE announce_id= '$announce_id' ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> window.location='announce.php'; </script>";
        $_SESSION['success']= "แก้ไขข้อมูลเรีบยร้อยแล้ว";
    }else{
        echo "<script> window.location='edit_announce.php'; </script>";
        $_SESSION['error']= "ไม่สามารถแก้ไขข้อมูล ลองใหม่อีกครั้ง";
    }
    mysqli_close($conn);

?>
