<?php
error_reporting(0); // Disable debug output
$host_db = "127.0.0.1";
$user_db = "root";
$pass_db = "";
$db_name = "pccst";
$conn = mysqli_connect($host_db,$user_db,$pass_db,$db_name);
if (!$conn){
    echo "<script>window.onload=function(){
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'ไม่พบการเชื่อมต่อฐานข้อมูล!',
            text: 'โปรดตรวจสอบและลองใหม่อีกครั้ง ;-;',
            showConfirmButton: false,
            timer: 2000
          })
    }</script>";
}
?>