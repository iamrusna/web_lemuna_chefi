<?php
    session_start();

    include '../connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>managemembers</title>
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Homepage</title>
    <!-- เพิ่ม CSS และอื่นๆ ตามต้องการ -->

    <style>
        body {
            /* กำหนดพื้นหลังของ body ด้วย background-image */
            background-image: url('img/background.png');
            /* ตั้งค่าการซ่อนการซ้ำซ้อนของ background image */
            background-repeat: no-repeat;
            /* ตั้งค่าการจัดกลุ่มภาพ */
            background-size: cover;
            /* ตั้งค่าการจัดตำแหน่งภาพ */
            background-position: center;
            /* ตั้งค่าสีพื้นหลังหลัก (ถ้าภาพไม่มีขนาดเต็ม) */
            background-color: #e7cae0;
            /* ตั้งค่าการขยายภาพในกรณีที่ไม่เต็มขนาด */
            background-attachment: fixed; /* หรือ scroll ถ้าต้องการให้ขยายตามการ scroll */
        }
        
        
  
        /* สามารถเพิ่ม CSS เพิ่มเติมตามความต้องการ */
    </style>
    </head>
    <body class="sb-nav-fixed">
          <?php include 'header.php' ?>   
          <div class="mt-5 ms-5 " >
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<h3 style="position: relative; margin-left: 30px;">
    <i class="fas fa-user-plus" style="margin-left: 320px;"></i>
    แก้ไขข้อมูลสมาชิก
</h3>
                    </div>
                        <div class="card-body">
                            <?php
                                $connection = mysqli_connect("localhost","root","","web_lemuna_chafi");

                                if(isset($_POST['edit_btn']))
                                {
                                $course_id = $_POST['edit_id'];
                                
                                $query = "SELECT * FROM course WHERE course_id='$course_id' ";
                                $query_run = mysqli_query($connection, $query);

                                foreach($query_run as $row)
                                {
                            ?>
                            <div class="row justify-content-center m-2">
                                <div class="col-lg-6">
                                    <div class="card shadow-lg border-0 rounded-lg">
                                        <div class="card-header" style="background-color: #ffffff;">
                                            <center class="p-4">
                                                <form class="row g-3" action="update_course.php" method="POST" enctype="multipart/form-data">
                                                   
                                                    <div class="col-md-12">
                                                        <label for="inputName" class="form-label breadcrumb" style="color: gray;">ID :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                                            <input type="hidded" name="course_id" class="form-control" readonly value="<?=$row['course_id']?>" style="background-color: #f5f5f5;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputName" class="form-label breadcrumb" style="color: gray;">ชื่อหลักสูตร:</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                                            <input type="name" name="course_name" value="<?php echo $row['course_name'] ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-6">
                                                        <label for="inputtel" class="form-label breadcrumb" style="color: gray;">รายละเอียด :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                                        <input type="name" name="course_detail" value="<?php echo $row['course_detail'] ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-12">
                                                        <label for="inputEmail" class="form-label breadcrumb" style="color: gray;">รุ่นปีการศึกษา :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                                            <input type="name" name="course_year" value="<?php echo $row['course_year'] ?>" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputPassword" class="form-label breadcrumb" style="color: gray;">ชั่วโมง :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                            <input type="number" name="course_hour" value="<?php echo $row['course_hour'] ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                                
                                                    <div class="mt-4 mb-0 text-center">
                                                        <input type="submit" name="submit" value=" ยืนยัน " class="btn btn-primary py-2">
                                                        <a href="course.php" class="btn btn-danger py-2"> ยกเลิก </a>
                                                    </div>
                                                </form>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                                }
                            ?>
                        </div>
                </main>
       
            </div>
            </div>
    </body>
</html>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>



<script language="JavaScript">
    function update(mypage){
        Swal.fire({
        title: 'คุณแน่ใจไหม?',
        text: "คุณอาจจะไม่สามารถเปลี่ยนกลับสิ่งนี้ได้!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ใช่, ยืนยัน!'
        }).then((agree) => {
        if (agree.isConfirmed) 
        {
            window.location=mypage;
        }
        })
    }
</script>