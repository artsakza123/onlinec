<?php
    //ระบบเบื้องหลังปุ่มสมัครสมาชิก

    //เชื่อมฐานข้อมูล
    session_start();
    include('config/condb.php');

    ////เช็คการกรอกข้อมูล
    if (isset($_POST['send'])){

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $email_reg = mysqli_real_escape_string($conn, $_POST['email_reg']);
        $password_reg = mysqli_real_escape_string($conn, $_POST['password_reg']);

        //ไม่ได้กรอกชื่อ
        if(empty($name)){
            echo "<script>alert('ไม่ได้กรอกชื่อ');</script>";
            header('Refresh:0; url= register_page.php');
        }

        //ไม่ได้กรอกนามสกุล
        elseif(empty($lastname)){
            echo "<script>alert('ไม่ได้กรอกนามสกุล');</script>";
            header('Refresh:0; url= register_page.php');
        }

        //ไม่ได้กรอกเบอร์โทร
        elseif(empty($tel)){
            echo "<script>alert('ไม่ได้กรอกเบอร์โทร');</script>";
            header('Refresh:0; url= register_page.php');
        }

        //ไม่ได้กรอกอีเมลล์
        elseif(empty($email_reg)){
            echo "<script>alert('ไม่ได้กรอกอีเมลล์');</script>";
            header('Refresh:0; url= register_page.php');
        }

        //ไม่ได้กรอกรหัสผ่าน
        elseif(empty($password_reg)){
            echo "<script>alert('ไม่ได้กรอกรหัสผ่าน');</script>";
            header('Refresh:0; url= register_page.php');
        }

        //เช็คอีเมลล์ซ้ำหรือไม่
        else{

            $email_check = "SELECT * FROM student WHERE email_reg = '$email_reg'";
            $callback_email_check = mysqli_query($conn, $email_check);

            //มีอีเมลล์ซ้ำ
            if(mysqli_num_rows($callback_email_check) > 0 ){
                echo "<script>alert('มีอีเมลล์นี้แล้วในระบบ');</script>";
                header('Refresh:0; url= register_page.php');
            }

            //มีอีเมลล์ไม่ซ้ำ
            else{

                //แปลงรหัสผ่าน(เพื่อความปลอดภัย)
                $password_reg = md5($password_reg);

                //เพิ่มข้อมูลลงตาราง student
                $ad_reg = "INSERT INTO student VALUES ('', '$name', '$lastname', '$tel', '$email_reg', '$password_reg')";
                $callback_ad_reg = mysqli_query($conn, $ad_reg);

                //สร้างบัญชีสำเร็จ
                if ($callback_ad_reg){
                    echo "<script>alert('สร้างบัญชีสำเร็จ');</script>";
                    header('Refresh:0; url= log_page.php');
                }

                //สร้างบัญชีล้มเหลว
                else{
                    echo "<script>alert('สร้างบัญชีล้มเหลว');</script>";
                    header('Refresh:0; url= register_page.php');
                }

            }
        }
    }
?>