<?php
  session_start();

  include '../connect.php';

  $ids=$_GET['course_id'];
  $sql="DELETE FROM course WHERE course_id='$ids'";
  if(mysqli_query($conn,$sql))
  {
    echo "<script> window.location='course.php'; </script>";
    $_SESSION['success']= "ลบข้อมูลเรีบยร้อยแล้ว";
      }else{
        echo "<script> window.location='course.php'; </script>";
        $_SESSION['error']= "ไม่สามารถลบข้อมูลได้ ลองใหม่อีกครั้ง";
  }

  mysqli_close($conn);

?>
