<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            /* background-color: #e7eed4; */
            background-image: url(../image/bakery.jpg);
            background-size: cover; 
            background-position: center; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 350px;
            height: 380px;
            padding: 20px;
            /* background-color: #8092A4; */
            backdrop-filter: blur(20px);
            background-color: rgba(215, 215, 215, 0.2);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative; /* เพิ่ม */
        }

        /* .logo {
            text-align: center;
            margin-bottom: 20px;
        } */

        .logo img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 92%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 15px;
            background-color: #ece5e5;
        }

        button {
            width: 50%;
            padding: 10px;
            background: #f8ec36;
            color: #000;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            /* จัดกึ่งกลาง */
            display: block;
            margin: 0 auto;
        }

        button:hover {
            background-color: #6fcd73;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #ff3700;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* .cake {
            position: absolute;
            top: 360px;
            right: -20px;
        }

        .cake img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        } */
    </style>
</head>

<body>
    <!-- <img src="../image/bg.png" alt="Logo" height="280"> -->
    <div class="card">
        <!-- <div class="cake">
            <img src="../image/cake.png" alt="Cake" height="100" width="100">
        </div> -->

        <h1>เข้าสู่ระบบ</h1>
        <p>ยินดีตอนรับเข้าสู่บัญชีผู้ใช้</p>

        <form method="post" action="login_process.php">
            <label for="email">อีเมล:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">เข้าสู่ระบบ</button>
        </form>
        <p>ไม่มีบัญชี? <a href="../user/register/register.php">สมัคร</a></p>


    </div>
</body>
</html>



