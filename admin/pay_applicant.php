<?php
include '../connect.php';
$ids=$_Get['id'];

$sql="UPDATE applicant SET order_status = 2 WHERE orderID='$ids' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>window.location='report_order.php'; </script> ";
}else{
    echo "<script>alert('ไม่สามารถลบข้อมูลได้'); </script> ";
}

mysqli_close($conn);
?>