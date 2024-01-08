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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
            /* background-color: #e7cae0; */
            /* ตั้งค่าการขยายภาพในกรณีที่ไม่เต็มขนาด */
            background-attachment: fixed;
            /* หรือ scroll ถ้าต้องการให้ขยายตามการ scroll */
        }
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
        :root{
            --header-height: 3rem;
            --nav-width: 70px;
            --first-color: #C56535;
            --first-color: #2D4F71;
            --white-color: #D0DAE5;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
          }*,
            ::before,::after{box-sizing: border-box}
            body{
                position: relative;
                margin: var(--header-height) 0 0 0;
                padding: 0 1rem;font-family: var(--body-font);
                font-size: var(--normal-font-size);transition: .5s
            }

            a{text-decoration: none}
            .header{
                width: 100%;height: var(--header-height);
                position: fixed;
                top: 0;left: 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 1rem;
                background-color: var(--white-color);
                z-index: var(--z-fixed);
                transition: .5s
            }

            .header_toggle{
                color: var(--first-color);
                font-size: 1.5rem;
                cursor: pointer
            }

            /* .header_img{width: 35px;
                height: 35px;display: flex;
                justify-content: center;
                border-radius: 50%;
                overflow: hidden
            } */

            .header_img img{width: 40px}
            .l-navbar{position: fixed;
                top: 0;
                left: -30%;
                width: var(--nav-width);
                height: 100vh;
                background-color: var(--first-color);
                padding: .5rem 1rem 0 0;
                transition: .5s;
                z-index: var(--z-fixed)
            }

            .nav{height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                overflow: hidden
            }

            .nav_logo, 
            .nav_link{display: grid;
                grid-template-columns: max-content max-content;
                align-items: center;
                column-gap: 1rem;
                padding: .5rem 0 .5rem 1.5rem

            }
            .nav_logo{
                margin-bottom: 2rem
            }

            .nav_logo-icon{
                font-size: 1.25rem;color: var(--black-color)
            }

            .nav_logo-name{
                color: var(--black-color);font-weight: 700
            }
            
            .nav_link{
                position: relative;color:var(--first-color-light);
                margin-bottom: 1.5rem;transition:.3s
            }
            
            .nav_link:hover{
                color: var(--white-color)
            }
            
            .nav_icon{
                font-size: 1.25rem
            }
            
            .show{
                left: 0
            }

            .body-pd{
                padding-left: calc(var(--nav-width) + 1rem)
            }

            .active{
                color: var(--white-color)
            }

            .active::before{
                content: '';position:absolute;
                left: 0;
                width: 2px;
                height: 32px;
                background-color: var(--white-color)
            }

            @media screen and (min-width: 768px)
            {body{
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
              }
              
              .header{
                  height: calc(var(--header-height) + 1rem);
                  padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
              }
              
              .header_img{width: 40px;height: 40px
              }
              
              .header_img img{
                  width: 45px
              }
              
              .l-navbar{
                  left: 0;
                  padding: 1rem 1rem 0 0
              }
              
              .show{
                  width: calc(var(--nav-width) + 156px)
              }
              
              .body-pd{
                  padding-left: calc(var(--nav-width) + 188px)
              }
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
                            <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                                    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                                    <script>
                                        new DataTable('#datatablesSimple');
                                    </script>
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
<!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
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