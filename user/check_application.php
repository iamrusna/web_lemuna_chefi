<?php 
    session_start();
    include '../connect.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>applicant</title>
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

            /* .header_img img{width: 40px}
            .l-navbar{position: fixed;
                top: 0;
                left: -30%;
                width: var(--nav-width);
                height: 100vh;
                background-color: var(--first-color);
                padding: .5rem 1rem 0 0;
                transition: .5s;
                z-index: var(--z-fixed)
            } */

            /* .nav{height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                overflow: hidden
            } */

            /* .nav_logo, 
            .nav_link{display: grid;
                grid-template-columns: max-content max-content;
                align-items: center;
                column-gap: 1rem;
                padding: .5rem 0 .5rem 1.5rem

            } */
            /* .nav_logo{
                margin-bottom: 2rem
            }

            .nav_logo-icon{
                font-size: 1.25rem;color: var(--black-color)
            } */

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

            /* .active::before{
                content: '';position:absolute;
                left: 0;
                width: 2px;
                height: 32px;
                background-color: var(--white-color)
            } */

            @media screen and (min-width: 768px)
            {body{
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
              }
              
              .header{
                  height: calc(var(--header-height) + 1rem);
                  padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
              }
              
              .header_img{
                width: 40px;height: 40px
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
    <br>
    <div class="row">
    <div class="col-12 text-center">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <!-- <div class="btn-toolbar">
            <a href="add_applicant.php" class="btn btn-primary my-4" style="margin-right: 100px;">
                <i class="fas fa-user-plus"></i> เพิ่มข้อมูล
            </a>
        </div> -->
    </div>
    <br><br>
    <h2>ข้อมูลผู้สมัคร</h2>
    <div class="btn-toolbar">
            <a href="add_application.php" class="btn btn-primary my-2" style="margin-right: 100px;">
                <i class="fas fa-user-plus"></i> เพิ่มข้อมูล
            </a>
        </div>
    <div class="card mb-3" style="width: 100%;">
        <!-- ... (rest of the card content) ... -->
    </div>
</div>
                    <div class="card-header">
                        <i class="fas fa-calendar-alt me-1"></i>
                        แสดงข้อมูลผู้สมัคร
                        <!-- <div class="mt-2 d-flex">
                            <a class="nav-link text-dack" href="check_application.php" role="button"> จัดการข้อมูลผู้สมัคร</a>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped center">
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
                           
                            <?php
                            $sql = "SELECT * FROM applicant";
                            $result = mysqli_query($conn, $sql);
                            $number=1;
                            while ($row = mysqli_fetch_array($result)) {
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
                                        <form action="edit_application.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['applicant_id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-warning"><i class="bx bxs-edit"></i></a></button>
                                        </form>
                                    </td>
                                    <td>
                                         <a href="delete_application.php?applicant_id=<?= $row["applicant_id"] ?>" class="btn btn-danger" onclick="Delete(this.href);return false;">
                                        <i class="bx bxs-trash"></i></a></td>
                                    </td>
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