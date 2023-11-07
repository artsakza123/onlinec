<?php
    //เชื่อมฐานข้อมูล
    include ('config/condb.php');
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
                
                <!--ส่งฟอร์มไปเข้ากระบวนการ register_db.php-->
                <form action="register_process.php" method="POST">

                    <!---ข้อความสมัครสมาชิก-->
                    <h1 class="h3 mb-3 fw-normal">สมัครสมาชิก</h1>

                    <!--ช่องกรอกชื่อ-->
                    <div class="form-floating">
                      <input type="text" class="form-control" name="name" placeholder="ชื่อ" require>
                      <label for="name">ชื่อ</label>
                    </div>

                    <!--ช่องกรอกนามสกุล-->
                    <div class="form-floating">
                      <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" require>
                      <label for="lastname">นามสกุล</label>
                    </div>

                    <!--ช่องกรอกเบอร์โทร-->
                    <div class="form-floating">
                      <input type="tel" class="form-control" name="tel" placeholder="เบอร์โทร" require>
                      <label for="tel">เบอร์โทร</label>
                    </div>


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

                    <!--ปุ่มเข้าสร้างบัญชี-->
                    <button class="btn btn-primary w-100 py-2" type="submit" name="send">สมัครสมาชิก</button>

                </form>  
            </main>
        </div>    

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>