<?php 
    session_start();
    include '../connect.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
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



        /* สามารถเพิ่ม CSS เพิ่มเติมตามความต้องการ */
    </style>
</head>
<body class="sb-nav-fixed">
    <?php include 'header.php' ?>
    <div class="container-fluid px-3 mt-5">
        <div class="row">
            
            <div class="col-12">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <nav class="navbar navbar-light p-2 " style="background-color: #f0f0f0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                        <h6 class="mt-2 ms-2">จัดการข้อมูลหลักสูตร</h6>
                    </nav>
                    <div class="btn-toolbar">
                        <a href="add_course.php" class="btn btn-primary my-4 "style="margin-right: 90px;"><i class="fas fa-user-plus"></i> เพิ่มข้อมูล </a>
                    </div>
                </div>

                <div class="card mb-4" style="margin-right: 80px;">
                    <div class="card-header">
                        <i class="fas fa-calendar-alt me-1"></i>
                        แสดงข้อมูลหลักสูตร
                        <div class="mt-2 d-flex">
                            <a class="nav-link text-dack" href="course.php" role="button"> จัดการข้อมูลหลักสูตร</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ชื่อหลักสูตร</th>
                                    <th>รายละเอียด</th>
                                    <th>รุ่นปีการศึกษา</th>
                                    <th>ชั่วโมง</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                           
                            <?php
                            $sql = "SELECT * FROM course";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?= $row['course_id'] ?></td>
                                    <td><?= $row['course_name'] ?></td>
                                    <td><?= $row['course_detail'] ?></td>
                                    <td><?= $row['course_year'] ?></td>
                                    <td><?= $row['course_hour'] ?></td>
                                    <td>
                                        <form action="edit_course.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['course_id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-warning"><i class="bx bxs-edit"></i></a></button>
                                        </form>
                                    </td>
                                    <td><a href="delete_course.php?course_id=<?= $row["course_id"] ?>" class="btn btn-danger" onclick="Delete(this.href);return false;"><i class="bx bxs-trash"></i></a></td>
                                </tr>

                            <?php
                            }
                            // mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
                            ?>
                        </table>
                    </div>
                </div>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if (isset($_SESSION['success'])) {
?>
    <script>
        Swal.fire(
            'สำเร็จ',
            '<?php echo $_SESSION['success'] ?>',
            'success'
        )
    </script>
<?php
    unset($_SESSION['success']);
}
?>

<?php
if (isset($_SESSION['error'])) {
?>
    <script>
        Swal.fire(
            'ล้มเหลว',
            '<?php echo $_SESSION['error'] ?>',
            'error'
        )
    </script>
<?php
    unset($_SESSION['error']);
}
?>

<script language="JavaScript">
    function Delete(mypage) {
        Swal.fire({
            title: 'คุณแน่ใจไหม?',
            text: "คุณอาจจะไม่สามารถเปลี่ยนกลับสิ่งนี้ได้!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, ยืนยัน!'
        }).then((agree) => {
            if (agree.isConfirmed) {
                window.location = mypage;
            }
        })
    }
</script>