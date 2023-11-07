<?php
    session_start();
    include('config/condb.php');
    $call_data = "SELECT * FROM location WHERE locationid = '" . $_SESSION['locationid'] . "'";
    $callback_data = mysqli_query($conn, $call_data);
    $info = mysqli_fetch_assoc($callback_data);
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
        <style>
                #map {
                height: 500px;
                    }
        </style>

    </head>

<body>

    <!--แถบเมนูด้านบนสุด-->
    <nav>
        <div class="container">
            <div class="nav-con">
                <div class="logo"><a href="#">ระบบแหล่งรวมสอนพิเศษ</a></div>
                <ul class="menu">
                    <li><a href="#" onclick="window.location.href='after_login_page.php'">หน้าหลัก</a></li>

                    <!--ปุ่มสมัครสมาชิก-->
                    <li><a href="#" onclick="window.location.href='history_page.php'">ประวัติ</a></li>

                    <!--ปุ่มออกจากระบบ-->
                    <li><a href="#" onclick="window.location.href='first_page.php'">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--รายละเอียดแหล่งสอนพิเศษ-->
    <section class="content">
        <div class="container">
            <div class="content-title">

                <h3> <?php echo $info['namelo'];?></h3>
            </div>
            <div class="content-con">

                <!--แผนที่-->
                <div id="map"></div>
                    <script>
                        var map;

                        function initMap(zoomeLevel,latDb,longDb) {
                            map = new google.maps.Map(document.getElementById("map"), {
                                center: { lat: latDb != null ? latDb : 15.0000, lng: longDb != null ? longDb: 101.000 },
                                zoom: zoomeLevel != null ? zoomeLevel:8
                            });


                        }
                        function GOLocation(locationid) {
                                        $.get("/Home/GetAllLocationById?id=" + locationid,function (data, status) {
                                            //var iconName = data.Rating == 1 ? "../Icons/1-solid.svg"  : data.Rating == 2 ? "../Icons/number-2.png" : "../Icons/number-3.png";
                                            initMap(data.zoom, data.Lat, data.Long);
                                    marker = new google.maps.Marker({
                                        position: { lat: data.Lat, lng: data.Long },
                                        map: map,
                                        //icon: iconName
                                    });
                                    contentString =
                                        '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        "</div>" +
                                        '<h1 id="firstHeading" class="firstHeading">' + data.Address + '</h1>'

                                    infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });
                                    
                                    google.maps.event.addListener(marker, "mouseover", (function (marker, i) {
                                        return function () {
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    google.maps.event.addListener(marker, "mouseout", (function (marker, i) {
                                        return function () {
                                            infowindow.close();
                                        }
                                    })(marker, i));
                            })
                    }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPth5DvCTL4cw39FzH8L0BpqV4JSSVKcg&callback=initMap"
                            async defer>
                    </script>

                


                <!--รายละเอียดแหล่งสอนพืเศษ-->
                <iframe width="720"  height="360"
                        src="<?php echo $info['videolink'];?>" frameborder="0" allowfullscreen></iframe>
                <br>
                <br>
                <h4>ชื่อสถานที่: <?php echo $info['namelo'];?></h4>
                <p>ที่อยู่: <?php echo $info['address'];?></p>
                <p>วิชา: <?php echo $info['subj'];?></p>
                <p>ผู้สอน: <?php echo $info['teachname'];?></p>
                <p>ประสบการณ์: <?php echo $info['exp'];?> ปี</p>
                <p>เวลาเรียน: <?php echo $info['time'];?></p>
                <p>ตัวอย่างการสอน: <?php echo $info['videolink'];?></p>
                <li><a href="pay_page.php" class="nav-link px-2 text-white" onclick="window.location.href='pay_page.php'">สมัครเรียน</a></li>
        </div>
    </section>
</body>
</html>