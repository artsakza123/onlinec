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

                    <!--ปุ่มเข้าสู่ระบบ-->
                    <li><a href="#" onclick="window.location.href='log_page.php'">เข้าสู่ระบบ</a></li>

                    <!--ปุ่มสมัครสมาชิก-->
                    <li><a href="#" onclick="window.location.href='register_page.php'">สมัครสมาชิก</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--แสดงโฆษณาเข้าสมัครสมาชิก-->
    <section class="maincontent">
        <div class="container">
            <div class="maincontent-con">
                <div class="maincontent-info">

                    <!--แสดงคำโฆษณา-->
                    <h3>เราได้รวมแหล่งเรียนพิเศษไว้ให้คุณแล้ว!!</h3>
                    <p>เชิญทุกท่านเข้าสู่เว็บไซต์ของเรา "แหล่งรวมสอนพิเศษ" ที่จะทำให้คุณได้รับความรู้และทักษะที่มีค่าอย่างแท้จริง ที่นี่เรามีบทเรียนและคอร์สที่หลากหลายให้คุณเลือกเรียนตามความสนใจของคุณ ที่นี่เรามีสอนพิเศษที่คุณต้องการ!
                        เรามุ่งมั่นที่จะให้คุณมีประสบการณ์การเรียนรู้ที่ดีที่สุด ด้วยการจัดเตรียมบทเรียนที่มีคุณภาพและอาจารย์ที่เชี่ยวชาญในแต่ละสาขา ไม่ว่าคุณจะเป็นนักเรียน, นักศึกษา, หรือผู้สนใจเรียนรู้ในทุกช่วงอายุ ที่นี่เรามีบทเรียนที่เหมาะกับทุกคน มาเริ่มเรียนรู้และพัฒนาตัวเองไปพร้อมกันกับเราแล้ววันนี้!</p>
                    <br>

                    <!--ปุ่มสมัครสมาชิก-->
                    <a href="#"class="maincontent-btn" onclick="window.location.href='register_page.php'">สมัครสมาชิก</a>
                </div>
                
                <!--แสดงรูปภาพโฆษณาเข้าสมัครสมาชิก-->
                <div class="maincontent-img">
                    <img src="https://smiletutor.sg/wp-content/uploads/2021/04/learning-min.png" alt="">
                </div>
            </div>    
        </div>
    </section>

    <!--ตัวอย่างแหล่งสอนพิเศษ-->
    <section class="content">
        <div class="container">
            <div class="content-title">
                <h3>แสดงรายการสถานที่สอนพิเศษ</h3>
            </div>
             <div class="content-con">

                <!--ตัวอย่างแหล่งสอนพืเศษที่ 1-->
                <div class="content-item">
                    <iframe width="320"  height="240"
                    src="https://www.youtube.com/embed/MWnx7QJK_c0?si=6yU0Aaa1JB3Tfd-K"></iframe>
                    <h4>กวดวิชา Bright Up Kids</h4>
                    <p>กวดวิชา Bright Up Kids,46/31 หมู่ 9 ถนน บรมราชชนนี ศาลาธรรมสพน์ ทวีวัฒนา กรุงเทพมหานคร 10170</p>
                    <a href=""class="content-btn">ดูรายละเอียดเพิ่มเติม</a>
                </div>

                <!--ตัวอย่างแหล่งสอนพืเศษที่ 2-->
                <div class="content-item">
                    <iframe width="320"  height="240"
                    src="https://www.youtube.com/embed/ePhqE32ohC0?si=ZhCwXRI7TzpPE228"></iframe>
                    <h4>แอพพลายด์ฟิสิกส์ พญาไท"</h4>
                    <p>โรงเรียนกวดวิชาแอพพลายด์ฟิสิกส์ 35 อาคารวรรณสรณ์ ชั้น12 A ถ. พญาไท แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพมหานคร 10400</p>
                    <a href=""class="content-btn">ดูรายละเอียดเพิ่มเติม</a>
                </div>

                <!--ตัวอย่างแหล่งสอนพืเศษที่ 3-->
                <div class="content-item">
                    <iframe width="320"  height="240"
                    src="https://www.youtube.com/embed/S1Q5BYcKUS8?si=7jcvBrGmOMJF0bqn"></iframe>
                    <h4>Eureka Education (สาขาศรีนครินทร์) </h4>
                    <p>โรงเรียนกวดวิชา ยูเรก้า 299/255 กรุงเทพมหานคร แขวง ออเงิน เขต ประเวศ กรุงเทพมหานคร 10220</p>
                    <a href=""class="content-btn">ดูรายละเอียดเพิ่มเติม</a>
                </div>
             </div>
        </div>
    </section>
</body>
</html>