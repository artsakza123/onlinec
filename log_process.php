<?php
    //ระบบเบื้องหลังปุ่มเข้าสู่ระบบ

    //เชื่อมฐานข้อมูล
    session_start();
    include('config/condb.php');

    $email_reg = mysqli_real_escape_string($conn, $_POST['email_reg']);
    $password_reg = mysqli_real_escape_string($conn, $_POST['password_reg']);
    $password_reg = md5($password_reg);

    //เช็คการกรอกข้อมูล
    if(isset($_POST['sendto'])){
        $check_email = "SELECT*FROM student WHERE email_reg = '$email_reg' AND password_reg = '$password_reg'";
        $result = mysqli_query($conn, $check_email);

        if(mysqli_num_rows($result) == 1){
            $call_student_id = mysqli_fetch_assoc($result)['studentid'];
            $_SESSION['student_id']  = $call_student_id;
            header('Location: after_login_page.php');
        }
         else{
        echo "<script>alert('กรอกข้อมูลไม่ถูกต้อง');</script>";
        header('Refresh:0; url=log_page.php');
        }
    }
   
?>