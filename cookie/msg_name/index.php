<?php
if(isset($_POST['tell'])){
    $Text=$_POST['tell'];
    setcookie("Text-Teller",$Text, time() + (86400 * 365),"/");
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>???????</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['Text-Teller'])){
            include('./include/box_tell.php');
        }else{
            include('./include/box_input.php');
        }
    ?>
</body>
</html>
