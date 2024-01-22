<?php 
    session_start();
    include '../connect.php';  
?>
<br>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
        <style>
        body {
            /* กำหนดพื้นหลังของ body ด้วย background-image */
            /* background-image: url('img/background.png'); */
            /* ตั้งค่าการซ่อนการซ้ำซ้อนของ background image */
            background-repeat: no-repeat;
            /* ตั้งค่าการจัดกลุ่มภาพ */
            background-size: cover;
            /* ตั้งค่าการจัดตำแหน่งภาพ */
            background-position: center;
            /* ตั้งค่าสีพื้นหลังหลัก (ถ้าภาพไม่มีขนาดเต็ม) */
            background-color: #e7cae0;
            /* ตั้งค่าการขยายภาพในกรณีที่ไม่เต็มขนาด */
            background-attachment: fixed;
            /* หรือ scroll ถ้าต้องการให้ขยายตามการ scroll */
        }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'header.php'; ?>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">


                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                แสดงข้อมูลการสั่งซื้อสินค้า (ชำระเงินแล้ว)
                                <div><br>
                                <a href="applicant_yes.php"> <button type="button" class="btn btn-outline-success">ชำระเงินแล้ว</button></a>
                                <a href="applicant.php"> <button type="button" class="btn btn-outline-success">ยังไม่ชำระเงิน</button></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>เลขทีใบสั่งซื้อ</th>
                                            <th>ชื่อลูกค้า</th>
                                            <th>ที่อยู่</th>
                                            <th>เบอร์โทรศัพท์</th>
                                            <th>ราคารวมสุทธิ</th>
                                            <th>วันที่สั่งซื้อ</th>
                                            <th>สถานะ</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>orderID</th>
                                            <th>cus_name</th>
                                            <th>address</th>
                                            <th>telephon</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                <?php 
                                $sql ="select * from applicant where course='2' order by reg_date DESC";
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_array($result)){
                                    $status = $row['course'];
                                ?>

                                   
                                        <tr>
                                            <td><?=$row['orderID']?></td>
                                            <td><?=$row['cus_name']?></td>
                                            <td><?=$row['address']?></td>
                                            <td><?=$row['telephone']?></td>
                                            <td><?=$row['total_price']?></td>
                                            <td><?=$row['reg_date']?></td>
                                            <td>
                                                <?php
                                                if($status == 1){
                                                    echo "ยังไม่ชำระเงิน";
                                                }else if($status == 2){
                                                    echo "<b style='color:blue'> ชำระเงินแล้ว </b>";
                                                }else if($status == 0){
                                                    echo "<b style='color:red'> ยกเลิก </b>";
                                                }
                                                ?>
                                            </td>
                                            
                                        </tr>
                                        <?php }
                                        mysqli_close($conn);
                                        ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php'; ?>

               

            </div>
        </div>
       
    </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>



    
