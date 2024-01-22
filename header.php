<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camping Gear Website | CodingNepal</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
          <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        background: #f2f2f2;
      }

      header {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 5;
        width: 100%;
        display: flex;
        justify-content: center;
        background: #333;
      }

      .navbar {
        display: flex;
        padding: 0 10px;
        max-width: 1200px;
        width: 100%;
        align-items: center;
        justify-content: space-between;
      }

      .navbar input#menu-toggler {
        display: none;
      }

      .navbar #hamburger-btn {
        cursor: pointer;
        display: none;
      }

      .navbar .all-links {
        display: flex;
        align-items: center;
      }

      .navbar .all-links li {
        position: relative;
        list-style: none;
      }

      .navbar .logo a {
        display: flex;
        align-items: center;
        margin-left: 0;
      }

      header a, footer a {
        margin-left: 40px;
        text-decoration: none;
        color: #fff;
        height: 100%;
        padding: 20px 0;
        display: inline-block;
      }

      header a:hover, footer a:hover {
        color: #ddd;
      }

      .homepage {
        height: 100vh;
        width: 100%;
        position: relative;
        background: url("images/home-bg.jpg");
        background-position: center 65%;
        background-size: cover;
        background-attachment: fixed;
      }

      .homepage::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.2);
      }

      .homepage .content {
        display: flex;
        height: 85%;
        z-index: 3;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .homepage .content h1 {
        font-size: 60px;
        font-weight: 700;
        margin-bottom: 10px;
      }

      .homepage .content .text {
        margin-bottom: 50px;
        color: #fff;
        font-size: 20px;
        text-align: center;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      }

      .content a {
        color: #000;
        display: block;
        text-transform: uppercase;
        font-size: 18px;
        margin: 0 10px;
        padding: 10px 30px;
        border-radius: 5px;
        background: #fff;
        border: 2px solid #fff;
        transition: 0.4s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        text-decoration: none;
      }

      .content a:hover {
        color: #fff;
        background: rgba(255,255,255,0.3);
      }

      @media screen and (max-width: 860px) {
        .navbar .all-links {
          position: fixed;
          left: -100%;
          width: 300px;
          display: block;
          height: 100vh;
          top: 75px;
          background: #333;
          transition: left 0.3s ease;
        }

        .navbar #menu-toggler:checked~.all-links {
          left: 0;
        }

        .navbar .all-links li {
          font-size: 18px;
        }

        .navbar #hamburger-btn {
          display: block;
        }

        section > p {
          text-align: center;
        }

        section .cards .card {
          width: calc(100% / 2 - 15px);
          margin-bottom: 30px;
        }

        .homepage .content h1 {
          font-size: 40px;
          font-weight: 700;
          margin-bottom: 10px;
        }

        .homepage .content .text {
          font-size: 17px;
        }

        .content a {
          font-size: 17px;
          padding: 9px 20px;
        }

        .contact .row {
          flex-direction: column;
        }

        .contact .row .col {
          width: 100%;
        }

        .contact .row .col:last-child {
          margin-top: 40px;
        }

        footer a {
          height: 0;
        }
      }

      @media screen and (max-width: 560px) {
        section .cards .card {
          width: 100%;
          margin-bottom: 30px;
        }
      }
          </style>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="homepage.php">ระบบรับสมัครอบรมระยะสั้น</a></h2>
        <input type="checkbox" id="menu-toggler">
        <label for="menu-toggler" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
          </svg>
        </label>
        <ul class="all-links">
          <li><a href="home.php">หน้าแรก</a></li>
          <!-- <li><a href="personal_infomation.php">ข้อมูลนักศึกษา</a></li>
          <li><a href="check_application.php">ตรวจสอบข้อมูลผู้สมัคร</a></li>
          <li><a href="check_through.php">ตรวจสอบข้อมูลผู้ผ่านอบรม</a></li>
          <li><a href="../homepage.php">ออกจากระบบ</a></li> -->
        </ul>
      </nav>
    </header>
    </body>
</html>