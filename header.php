<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <style>
        .tab-bar {
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

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(247, 249,230);">
        <div class="container-fluid">
            <img src="image/bg.png" alt="Logo" height="80">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <form class="d-flex">
                <a href="login/login.php"><button type="button" class="btn ms-5" style="border-radius: 10px; background-color: #B6EA75;">เข้าสู่ระบบ</button></a>
                <a href="user/register/register.php"><button type="button" class="btn ml-5" style="border-radius: 10px; background-color: #B6EA75;">สมัครสมาชิก</button></a>
            </form>
        </div>
    </nav>
</body>

</html>