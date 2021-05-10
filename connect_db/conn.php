<?php
error_reporting(0); // Disable debug output
$host = "127.0.0.1";
$user = "your_username";
$pass = "your_password";
$db = "type_your_db_name";
$conn = mysqli_connect($host,$user,$pass,$db);
if ($conn){
    echo "<script>window.onload=function(){
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'DB Connected!',
            showConfirmButton: false,
            timer: 2000
          })
    }</script>";
}else{
    echo "<script>window.onload=function(){
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'DB failed to connect',
            showConfirmButton: false,
            timer: 2000
          })
    }</script>";
}
?>
