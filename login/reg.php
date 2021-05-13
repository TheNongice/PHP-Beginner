<?php 
if (isset($_POST['user'])){
    echo '<script type="text/javascript">alert("Your user is : '.$_POST['user'].' \nYour password is : '.$_POST['pass'].'");</script>';
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Forms!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7b30317d32.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container-sm" style="margin-top: 2rem;">
    <h1>Register</h1>
        <div class="card">
            <div class="card-body text-center">
            <form action="" method="POST">
            <div>
                   <label for="user"><i class="fas fa-address-book"></i> Username: <input type="text" name="user" class="form-control" required></label>
                </div>
                <div>
                    <label><i class="fas fa-key"></i> Password: <input type="password" name="pass" class="form-control" required></label>
                </div>
	   	        <div style="margin-top: 1rem;">
                   <button class="btn btn-success" name="reg_naja" type="submit"><i class="fas fa-sign-in-alt"></i> Register!</button>
                </div>
	        </form>
            <a href="login.php">Are you Member?</a>
            </div>
        </div>
    </div>
</body>
</html>