<?php
    session_start();
    include('config/condb.php');

    //ดึงข้อมูลทั้งหมดในตาราง location
    $call_location = "SELECT * FROM location";
    $callback_location = mysqli_query($conn, $call_location);
    $count = mysqli_num_rows($callback_location);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- กำหนดอักขรที่ใช้ในหน้าเว็บเพจ ชุดอักขระมาตรฐานสากลที่ใช้รองรับภาษาต่างๆ ทั่วโลก -->
    <meta charset="UTF-8">

    <!-- แสดงผลของหน้าเว็บเพจให้เหมาะสมกับอุปกรณ์ที่ใช้งาน -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- แสดงชื่อแท็บ -->
    <title>แหล่งรวมสอนพิเศษ</title>

    <!--Style-->
    <link rel="stylesheet" href="style/mainstyle.css">
</head>

<body>

    <!--แถบเมนูด้านบนสุด-->
    <nav>
        <div class="container">
            <div class="nav-con">
                <div class="logo"><a href="#">ระบบแหล่งรวมสอนพิเศษ</a></div>
                <ul class="menu">
                    <li><a href="#">หน้าหลัก</a></li>

                    <!--ปุ่มสมัครสมาชิก-->
                    <li><a href="#" onclick="window.location.href='history_page.php'">ประวัติ</a></li>

                    <!--ปุ่มออกจากระบบ-->
                    <li><a href="#" onclick="window.location.href='first_page.php'">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--ตัวอย่างแหล่งสอนพิเศษ-->
    <section class="content">
        <div class="container">
            <div class="content-title">
                <h3>สถานที่สอนพิเศษ</h3>
            </div>
             <div class="content-con">

                <!--สร้างตัวอย่างแหล่งสอนพิเศษตามจำนวน record ในตาราง location-->
                <?php  while ($data = mysqli_fetch_assoc($callback_location)) {

                    // เก็บข้อมูลของ record ที่ต้องการแสดงไว้ในเซสชัน
                    $_SESSION['locationid'] = $data['locationid'];

                    // แสดงข้อมูลทีละ record
                    ?>
                    <div class="content-item">
                        <br>

                        <iframe width="360"  height="240"
                        src="<?php echo $data['videolink'];?>" frameborder="0" allowfullscreen></iframe>


                        <h4>ชื่อสถานที่: <?php echo $data['namelo'];?></h4>
                        <p>ที่อยู่: <?php echo $data['address'];?></p>
                        <p>วิชา: <?php echo $data['subj'];?></p>
                        <a href="info_page.php"class="content-btn" onclick="window.location.href='info_page.php'">ดูรายละเอียดเพิ่มเติม</a>
                    </div> 
                    <?php
                } ?>
             </div>
        </div>
    </section>
</body>
</html>