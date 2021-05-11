<?php
error_reporting(0); // Disable debug output
$host = "your_host";
$user = "your_user";
$pass = "password";
$db = "your_db_name";
$conn = mysqli_connect($host,$user,$pass,$db);
if (!$conn){ // แสดงข้อความเมื่อไม่สามารถเชื่อม SQL ได้เท่านั้น!
    echo "<script>window.onload=function(){
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'ไม่พบการเชื่อมต่อฐานข้อมูล!',
            showConfirmButton: false,
            timer: 2000
          })
    }</script>";
}
?>
