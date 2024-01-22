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
                        แสดงข้อมูลการสั่งซื้อสินค้า (ยังไม่ได้ชำระเงิน)
                        <div><br>
                            <a href="applicant_yes.php"> <button type="button" class="btn btn-outline-success">ชำระเงินแล้ว</button></a>
                            <a href="applicant.php"> <button type="button" class="btn btn-outline-success">ยังไม่ชำระเงิน</button></a>
                        </div>
                    </div>
                    <br>

                    <div>
                        <form name="form1" method="POST" action="applicant.php">
                            <div class="row ">
                                <div class="col-sm-2">
                                    <input type="date" name="dt1" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                <input type="date" name="dt2" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> </button>
                                </div>
                            </div>

                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped">
                            <thead>
                            <tr>
                                    <th>ID</th>
                                    <th>รหัสนักศึกษา</th>
                                    <th>รายชื่อผู้สมัคร</th>
                                    <th>ชื่อหลักสูตร</th>
                                    <th>เบอร์โทร</th>
                                    <th>สาขา</th>
                                    <th>คณะ</th>
                                    <th>ปีการศึกษา</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $ddt1=@$_POST['dt1'];
                                $ddt2=@$_POST['dt2'];
                                $add_date =date('Y/m/d' , strtotime($ddt2 . "1+ days"));

                                if(($ddt1 != "") & ($ddt2 != "")){
                                    echo "ค้นหาจากวันที่ $ddt1 ถึง $ddt2 ";
                                    $sql = "select * from tb_order where check_application='1' and reg_date BETWEEN '$ddt1' and '$ddt2'
                                     order by reg_date DESC";
                                }else{
                                    $sql = "select * from tb_order where check_application='1' order by reg_date DESC";
                                }

                                $sql = "select * from tb_order where check_application='1' order by reg_date DESC";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    $status = $row['check_application'];
                                ?>


                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?= $row['applicant_usercode'] ?></td>
                                    <td><?= $row['applicant_user_name'] ?></td>
                                    <td><?= $row['applicant_course_name'] ?></td>
                                    <td><?= $row['applicant_user_telphone'] ?></td>
                                    <td><?= $row['applicant_branch'] ?></td>
                                    <td><?= $row['applicant_study'] ?></td>
                                    <td><?= $row['applicant_year'] ?></td>
                                <td>
                                            <?php
                                            if ($status == 1) {
                                                echo "ยังไม่ชำระเงิน";
                                            } else if ($status == 2) {
                                                echo "<b style='color:green'> ชำระเงินแล้ว </b>";
                                            } else if ($status == 0) {
                                                echo "<b style='color:red'> ยกเลิก </b>";
                                            }
                                            ?>
                                </td>

                                        <td><a href="report_order_detail.php?id=<?= $row['orderID'] ?>" class="btn btn-success">รายละเอียด</a></td>

                                        <td><a href="pay_order.php?id=<?= $row['orderID'] ?>" class="btn btn-warning" onclick="del1(this.href); return false">ปรับสถานะ</a></td>

                                        <td><a href="cencel_order.php?id=<?= $row['orderID'] ?>" class="btn btn-danger" onclick="del(this.href); return false">ยกเลิก</a></td>
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
        <!-- <?php include 'footer.php'; ?> -->



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


<script>
    function del(mypage) {
        var agree = confirm('คุณต้องการยกเลิกใบสินค้าหรือไม่');
        if (agree) {
            window.location = mypage;
        }
    }

    function del1(mypage) {
        var agree = confirm('คุณต้องการปรับสถานะการชำระเงินหรือไม่');
        if (agree) {
            window.location = mypage;
        }
    }
</script>