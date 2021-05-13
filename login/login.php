<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Forms!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7b30317d32.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container-sm" style="margin-top: 2rem;">
    <h1>Login!</h1>
        <div class="card">
            <div class="card-body text-center">
            <form action="" method="POST">
	   	        <div>
                   <label for="user"><i class="fas fa-address-book"></i> Username: <input type="text" name="user" class="form-control"></label>
                </div>
                <div>
                    <label><i class="fas fa-key"></i> Password: <input type="password" name="pass" class="form-control"></label>
                </div>
	   	        <div style="margin-top: 1rem;">
                   <button class="btn btn-success" type="submit"><i class="fas fa-sign-in-alt"></i> Login!</button>
                </div>
	        </form>
            <a href="reg.php">Don't have account?</a>
            </div>
        </div>
    </div>
</body>
</html>