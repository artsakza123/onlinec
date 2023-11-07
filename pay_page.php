<?php
    //เชื่อมฐานข้อมูล
    session_start();
    include('config/condb.php');
    $call_data = "SELECT * FROM location WHERE locationid = '" . $_SESSION['locationid'] . "'";
    $callback_data = mysqli_query($conn, $call_data);
    $info = mysqli_fetch_assoc($callback_data);
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
                <form action="pay_process.php" method="POST">

                    <!---ข้อความสมัครเรียน-->
                    <h1 class="h3 mb-3 fw-normal">สมัครเรียน</h1>

                    <!--ช่องกรอกแหล่งสอน-->
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>เลือกแหล่งเรียน</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <!--ช่องกรอกเวลาเรียน-->
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>เลือกเวลาเรียน</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
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

                    <!--ปุ่มเข้าสมัครเรียน-->
                    <button class="btn btn-primary w-100 py-2" type="submit" name="send">สมัครเรียน</button>
                </form>  
            </main>
        </div>    

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>