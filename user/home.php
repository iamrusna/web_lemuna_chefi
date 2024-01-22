<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <style>
        body {
            /* กำหนดพื้นหลังของ body ด้วย background-image */
            /* background-image: url('image/bakery.jpg'); */
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

        .card {
            width: 300px;
            height: 600px;
            padding: 20px;
            background: url("../image/cake2.jpg");
            background-color: #8092A4;
            backdrop-filter: blur(20px);
            background-color: rgba(215, 215, 215, 0.2);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
            /* เพิ่ม */
        }

        .card-1 {
            width: 600px;
            height: 400px;
            padding: 20px;
            backdrop-filter: blur(45px);
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .card-2{
            position: absolute;
        }

        section .cards .card {
            background: #fff;
            padding: 40px 15px;
            list-style: none;
            border-radius: 5px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
            margin-bottom: 40px;
            width: calc(100% / 3 - 30px);
            text-align: center;
        }

        /* section {
            background: #fff;
            padding: 40px 15px;
            list-style: none;
            border-radius: 5px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
            margin-bottom: 40px;
            width: calc(100% / 3 - 30px);
            text-align: center;
        } */

        .container{
            background-attachment: fixed;
           
        }

        /* header a, footer a {
            margin-left: 50px;
            text-decoration: none;
            color: #fff;
            height: 100%;
            padding: 20px 0;
            display: inline-block;
            justify-content: center;
        } */

        /* header a:hover, footer a:hover {
            color: #ddd;
      } */

        footer {
            width: 100%;
            display: flex;
            justify-content: center;
            background: #000;
            padding: 5px 0;
        }

        /* footer div {
            padding: 0 10px;
            max-width: 1200px;
            width: 100%;
            display: flex;
            justify-content: space-between;
        } */

        footer span {
            color: #fff;
        }

        button {
            width: 20%;
            padding: 10px;
            background-color: #f8ec36;
            color: #000;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            /* จัดกึ่งกลาง */
            display: block;
            margin: 0 auto;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <body class="sb-nav-fixed">
        <?php include 'header.php' ?>
        <div class="container-fluid px-3 mt-5">
            <divว class="row">
                <div class="col-12 text-center">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                        <!-- <div class="btn-toolbar">
            <a href="add_applicant.php" class="btn btn-primary my-4" style="margin-right: 100px;">
                <i class="fas fa-user-plus"></i> เพิ่มข้อมูล
            </a>
        </div> -->
                    </div>
                    <br><br><br>
                    <h2>ยินดีต้อนรับเข้าสู่หน้าเว็บไซต์</h2>
                    <div class="card mb-3" style="width: 100%"><br>
                    <div class="card-1 mb-3" style="width: 70%"> <br><br><br>
                        <h1>ประกาศ! เปิดรับสมัครหลักสูตรวิชาชีพระยะสั้น</h1><br><br>
                        <p>วันที่และเวลาที่ต้องการอบรม ภายในจำนวน 18 ชั่วโมง <br>ด้วยหลักสูตรการทำขนมไทยและขนมพื้นบ้าน รับรุ่นละ 30 คนเท่านั้น </p>
                        </div>
                    </div>

                    <!-- <div class="row"></div>
                    <div class="card mb-3" style="width: 100%"><br>
                    <div class="card-1 mb-3" style="width: 70%"> <br><br><br>
                        <h1>ประกาศ! เปิดรับสมัครหลักสูตรวิชาชีพระยะสั้น</h1><br>
                        <p>วันที่และเวลาที่ต้องการอบรม ภายในจำนวน 18 ชั่วโมง <br>ด้วยหลักสูตรการทำขนมไทยและขนมพื้นบ้าน รับรุ่นละ 30 คนเท่านั้น </p>
                                <div class="mt-4 mb-0 text-center">
                                    <a href="login/login.php" class="btn btn-danger py-2" class="card mb-3"> คลิกเพื่อสมัคร </a>
                                </div>
                        </div>

                    </div> -->



                </div>


                <footer>
                    <div>
                        <span>YALA RAJAPHAT UNIVERSITY</span>
                        <span class="link">
                        </span>
                    </div>
                </footer>
                <?php                      // mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
                ?>
        </div>
        </div>
    </body>