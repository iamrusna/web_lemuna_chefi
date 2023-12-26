<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

   <style>
    
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #a3cd2e;
}

.tab-bar {
    background-color: #d8e1c0;
    overflow: hidden;
    position: relative;
}

.tab-bar img {
    height: 100px; /* ปรับความสูงของโลโก้ตามที่คุณต้องการ */
    position: absolute;
    top: 50%; /* ย้ายโลโก้ไปที่ตรงกลางแนวดิ่ง */
    transform: translateY(-50%);
    margin-left: 10px; /* ระยะห่างของโลโก้จากขอบซ้าย */
}

.tab-bar a {
    float: right;
    display: block;
    color: black;
    text-align: center;
    padding: 13px 16px;
    text-decoration: none;
    margin-left: 0px;
}

.tab-bar a:hover {
    background-color: #8ac78d;
    color: black;
}

h1 {
    text-align: center;
    padding: 20px;
}

.main-content {
    text-align: center;
}

a {
    display: block;
    margin: 20px;
    /* background-color: #36f88d; */
    color: white;
    text-decoration: none;
    border-radius: 10px;
    height: 17px;
}
        
   </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: rgb(237, 243,217);">

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(247, 249,230);">
    <div class="container-fluid">
        <img src="image/bg.png" alt="Logo" height="70">

        <ul class="navbar-nav ms-5">
            <!-- Add an ID to the button for handling in JavaScript -->

            <li class="nav-item">
                <button type="button" class="btn ms-4" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">หน้าดูประกาศประกาศทั้งหมด</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn ms-2" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">หน้าจัดการการสมัครหลักสูตรระยะสั้น</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn ms-2" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">หน้าตรวจสอบการสมัครหลักสูครระยะสั้น</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn ms-2" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">หน้าดาวน์โหลดเกียรติบัตร</button>
            </li>
        
            <li class="conteiner mt-1 ms-5">
            <li class="conteiner mt-1 ms-5">
            <li class="conteiner mt-1 ms-5">
            <li class="conteiner mt-1 ms-5">
            <li class="conteiner mt-1 ms-5">

            <div class="dropdown">
            <button type="button" class="btn dropdown-toggle ms-5" data-bs-toggle="dropdown">
            ผู้ใช้งาน
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login/login.php">ออกจากระบบ</a>
            </li>
            <!-- Add more buttons as needed -->
        </ul>
        </div>
        </div>
</nav>

<br><br><br>


    <!-- Section 1 content -->
    <center>
        <h2>หลักสูตรวิชาชีพระยะสั้น(Lemuna Chefi)</h2>
    </center>

    <div class="container mt-4">
        <div class="row">

        <div class="col-md-4">
            <img src="image/sewing.jpg" alt="Image 3" class="text-center ms-4" height="250">
            <br><br>
                <h3 class="text-center">หลักสูตร: การตัดเย็บ</h3>
                <h5 class="text-center ms-2" >ค่าลงทะเบียนเรียน: 250฿</h5>
                <h5 class="text-center ms-2" >สามารถดาวน์โหลดเกียรติบัตรผ่านหลักสูตร</h5>
        </div>

        <div class="col-md-4">
            <img src="image/bakery.jpg" alt="Image 1" class="text-center ms-1" height="250">
            <br><br>
                <h3 class="text-center">หลักสูตร: เบเกอร์รี่</h3>
                <h5 class="text-center ms-2" >ค่าลงทะเบียนเรียน: 200฿</h5>
                <h5 class="text-center ms-2" >สามารถดาวน์โหลดเกียรติบัตรผ่านหลักสูตร</h5>
        </div>
        
        <div class="col-md-4">
            <img src="image/ขนมไทย.webp" alt="Image 1" class="text-center ms-5" height="250">
            <br><br>
                <h3 class="text-center">หลักสูตร: ขนมพื้นบ้าน</h3>
                <h5 class="text-center ms-2" >ค่าลงทะเบียนเรียน: 200฿</h5>
                <h5 class="text-center ms-2" >สามารถดาวน์โหลดเกียรติบัตรผ่านหลักสูตร</h5>
        </div>
        </div>
    </div>
