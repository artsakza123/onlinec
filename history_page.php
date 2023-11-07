<?php
    include('config/condb.php');
?>

<!DOCTYPE html>
<html>
    <head>  

        <title> OnlineC : แหล่งรวมสอนพิเศษ </title>       <!-- แสดงชื่อแท็บ --> 
        <meta charset ="UTF-8">                          <!-- กำหนดอักขรที่ใช้ในหน้าเว็บเพจ ชุดอักขระมาตรฐานสากลที่ใช้รองรับภาษาต่างๆ ทั่วโลก -->
	    <meta name ="viewport" content="width=device-width, initial-scale=1">    <!-- แสดงผลของหน้าเว็บเพจให้เหมาะสมกับอุปกรณ์ที่ใช้งาน -->

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--Style-->
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>

    </head>

    <body>
        <!-- แถบบาร์ด้านบน-->
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                    <!--ปุ่มลิงค์หน้าหลัก-->
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-white" onclick="window.location.href='after_login_page.php'">หน้าหลัก</a></li>
                        <li><a href="#" class="nav-link px-2 text-secondary">ประวัติ</a></li>
                    </ul>
                    

                    <!--พิมพ์ค้นหา-->
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-white" placeholder="ค้นหา..." aria-label="Search">
                    </form>
        
                    <!--ปุ่มเข้าสู่ระบบ-->
                    <div class="text-end">
                        <a href="#"class="content-btn">ดูรายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </header>

        <!--แสดงตารางประวัติ-->
        <h2>History Table</h2>
        <table>
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
            <th>Country</th>
            <th>Country</th>
        </tr>
        </table>

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>