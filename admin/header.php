<?php 
    // session_start();
    
    include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

        :root {
            --header-height: 3rem;
            --nav-width: 70px;
            --first-color: #333;
            --white-color: #333;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }

        *,
        ::before,
        ::after {
            box-sizing: border-box
        }

        body {
            position: relative;
            /* background-image: url(../image/bakery.jpg); */
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s
        }

        a {
            text-decoration: none
        }

        .header {
            width: 100%;
            height: var(--header-height);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: #333;
            z-index: var(--z-fixed);
            transition: .5s
        }

        .header_toggle {
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer
        }

        /* .header_img{width: 35px;
                height: 35px;display: flex;
                justify-content: center;
                border-radius: 50%;
                overflow: hidden
            } */

        .header_img img {
            width: 40px
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed)
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
        }

        .nav_logo {
            margin-bottom: 2rem
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: #fff;
        }

        .nav_logo-name {
            color: #fff;
            font-weight: 700
        }

        .nav_link {
            position: relative;
            color:#fff;
            margin-bottom: 1.5rem;
            transition: .3s
        }

        .nav_link:hover {
            color: var(--white-color)
        }

        .nav_icon {
            font-size: 1.25rem
        }

        .show {
            left: 0
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem)
        }

        .active {
            color: var(--white-color)
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }

        @media screen and (min-width: 8px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }

            .header_img img {
                width: 45px;
                border-radius: 50%;
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0
            }

            .show {
                width: calc(var(--nav-width) + 156px)
            }

            .body-pd {
                padding-left: calc(var(--nav-width) + 188px)
            }
            .nav_logo {
                text-decoration: none;
                justify-content: center;
                align-items: center;
                height: 0px; 
             }

        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
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

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>

        
        <div class="header_img"> 
        <?php
            if (isset($_SESSION["name"])) {
                echo "<div class='mt-1 me-1 h6 text-white'>";
                echo $_SESSION["name"];
                echo "</div>";
            }
        ?>
           <img class="" src="../image/11.jpg" alt="" width="40"> 
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo">  <span class="nav_logo-name">YRU ระบบรับสมัครระยะสั้น</span> </a>
            <br><br>
                <a href="#" class="nav_logo">
            <span class="nav_logo-name">MENU</span></a>
            <hr>
            <span p class="outset"></p></span>
                
                
                <div class="nav_list">
                    <a href="report.applicant.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="course.php" class="nav_link"> <i class='bx bx-data nav_icon'></i> <span class="nav_name">จัดการข้อมูลหลักสูตร</span> </a>
                    <a href="announce.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">ประกาศรับสมัคร</span> </a>
                    <a href="applicant.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">จัดการข้อมูลผู้สมัคร</span> </a>
                    <a href="end.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">ประกาศผู้ผ่านอบรม</span> </a>
                </div>
            </div> <a href="../login/login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">ออกจากระบบ</span> </a>
        </nav>
    </div>
</body>

</html>