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
            background-attachment: fixed; /* หรือ scroll ถ้าต้องการให้ขยายตามการ scroll */
        }
        /* สามารถเพิ่ม CSS เพิ่มเติมตามความต้องการ */
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
   
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   
    // Your code to run since DOM is loaded and ready
   });
    </script>
    </head>
    <body class="sb-nav-fixed">
       
            <div id="layoutSidenav_content">
                <main>
                <?php include 'header.php' ?>   
                    <div class="mt-5 ms-5 " >
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<h3 style="position: relative; margin-left: 30px;">
<br>
    <i class="fas fa-user-plus" style="margin-left: 320px;"></i>  
    เพิ่มข้อมูลหลักสูตร
</h3>
                    </div>
                        <div class="card-body my-4">
                            <div class="row justify-content-center m-2">
                                <div class="col-lg-6">
                                    <div class="card shadow-lg border-0 rounded-lg">
                                        <div class="card-header" style="background-color: #ffffff;">
                                            <div class="card-body">
                                                <form class="row g-3" method="POST" action="add_insert_course.php" enctype="multipart/form-data">
                                                    <div class="col-md-12">
                                                        <label for="inputName" class="form-label" style="color: gray;">ชื่อหลักสูตร :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                                                            <input type="name" name="course_name" class="form-control" placeholder="ชื่อ" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label" style="color: gray;">รายละเอียด :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-light"><i class="fa-solid fa-file"></i></span>
                                                            <input type="name" name="course_detail" class="form-control" placeholder="รายละเอียด" required>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <label for="inputEmail" class="form-label" style="color: gray;">รุ่นปีการศึกษา :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-light"><i class="fa-solid fa-map-pin"></i></span>
                                                            <input type="name" name="course_year" class="form-control" id="inputEmail" placeholder="รุ่น" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label" style="color: gray;">ชั่วโมง :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-light"><i class="fa-solid fa-clock"></i></span>
                                                            <input type="number" name="course_hour" class="form-control" placeholder="ชั่วโมง" required>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center d-grid gap-2 col-6 mx-auto">
                                                        <input type="submit" name="submit" value="บันทึก" class="btn btn-primary py-2">
                                                        <a href="course.php" class="btn btn-danger py-2"> ยกเลิก </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

       
<?php
    if(isset($_SESSION['success'])){ 
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
    if(isset($_SESSION['error'])){ 
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


<!-- <script language="JavaScript">
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
</script> -->