<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

  <style>
    
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    /* background-color: #c75329; */
}

.tab-bar {
    background-color: #e1cdc0;
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
    background-color: #021403;
    color: black;
}

h1 {
    text-align: center;
    /* padding: 25px; */
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
      
.img-column1{
    text-align: center;
}

  </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
</head>
    <body style="background-color: rgb(237, 243,217);">

<?php 
    include 'header.php';//ดึง header มาแสดง
?>
    
    <br><br><br>
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

</body>

</html>
