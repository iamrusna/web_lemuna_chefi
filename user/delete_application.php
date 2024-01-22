<?php
  session_start();

  include '../connect.php';

  $applicant_id=$_GET['applicant_id'];
  $sql="DELETE FROM applican WHERE applicant_id='$applicant_id'";
  if(mysqli_query($conn,$sql))
  {
    echo "<script> window.location='check_application.php'; </script>";
    $_SESSION['success']= "ลบข้อมูลเรีบยร้อยแล้ว";
      }else{
        echo "<script> window.location='check_application.php'; </script>";
        $_SESSION['error']= "ไม่สามารถลบข้อมูลได้ ลองใหม่อีกครั้ง";
  }

  mysqli_close($conn);

?>
