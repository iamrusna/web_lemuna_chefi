<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="css/register.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e7eed4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 300px;
            padding: 20px;
            background-color: #d8e1c0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative; /* เพิ่ม */
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

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
            background-color: #f8ec36;
            color: #000;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            /* จัดกึ่งกลาง */
            display: block;
            margin: 0 auto;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    
</head>

    <body>
    <img src="../../image/bg.png" alt="Logo" height="280"> 
        <div class="card">
            <h1>สมัครสมาชิก</h1>
            <form method="post" action="register_process.php">
                <label for="name">ชื่อ - สกุล:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="tel">เบอร์โทรศัพท์:</label>
                <input type="text" id="tel" name="tel" required><br>

                <label for="email">อีเมล:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">รหัสผ่าน:</label>
                <input type="password" id="password" name="password" required><br>
                <!-- เพิ่มฟิลด์อื่นๆ ที่ต้องการ -->

                <button type="submit">สมัครสมาชิก</button>
            </form>
        </div>
    </body>
</html>

