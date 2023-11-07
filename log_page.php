<?php
        //เชื่อมฐานข้อมูล
        include('config/condb.php');
?>

<!DOCTYPE html>
<html>
    <head>  
        <!-- แสดงชื่อแท็บ -->
        <title> OnlineC : แหล่งรวมสอนพิเศษ </title>    
        
        <!-- กำหนดอักขรที่ใช้ในหน้าเว็บเพจ ชุดอักขระมาตรฐานสากลที่ใช้รองรับภาษาต่างๆ ทั่วโลก -->
        <meta charset ="UTF-8">                         

        <!-- แสดงผลของหน้าเว็บเพจให้เหมาะสมกับอุปกรณ์ที่ใช้งาน -->
	    <meta name ="viewport" content="width=device-width, initial-scale=1">    

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style/login.css">

    </head>

    <body>

        <!--ปรับโครงหน้าให่อยู่ตรงกลาง-->
        <div class="contianer min-vh-100 d-flex justify-content-center align-item-center">
            <main class="form-signin w-50 m-auto">
                <form action="log_process.php" method="POST">

                    <!---ข้อความเข้าสู่ระบบ-->
                    <h1 class="h3 mb-3 fw-normal">เข้าสู่ระบบ</h1>

                    <!--ช่องกรอกกอีเมลล์-->
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email_reg" placeholder="อีเมลล์" require>
                        <label for="email_reg">อีเมลล์</label>
                    </div>

                     <!--ช่องกรอกรหัสผ่าน-->
                     <div class="form-floating">
                        <input type="password" class="form-control" name="password_reg" placeholder="รหัสผ่าน" require>
                        <label for="password_reg">รหัสผ่าน</label>
                    </div>

                    <!--ปุ่มเข้าสู่บัญชี-->
                    <button class="btn btn-primary w-100 py-2" type="submit" name="sendto">เข้าสู่ระบบ</button>

                    <!--สำหรับคนไม่มีบัญชี-->
                    <p class="mt-2 mb-3 text-body-secondary">คุณยังไม่ได้มีบัญชีใช่ไหม?
                        <br>
                        <!--เข้าหน้าสมัครสมาชิก-->
                        <a href="register_page.php">คลิกที่นี้เพื่อสร้างบัญชี</a>
                    </p>
                    
                </form>
               
            </main>
        </div> 

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>