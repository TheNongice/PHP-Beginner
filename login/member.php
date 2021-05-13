<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Say Hi!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7b30317d32.js" crossorigin="anonymous"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
    body{
        font-family: 'Kanit',sans-serif;
    }
    </style>
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-dark bg-danger">
        <div class="container-fluid">
            <span class="navbar-brand mb-1 h1">Member Zones!</span>
            <form class="d-flex">
            <button class="btn btn-success me-2" type="button"><i class="fas fa-lock"></i> Logout</button>
            </form>
        </div>
    </nav>
    <!--main-->
    <div class="container-fluid" style="padding-top: 1rem;">
        <div class="card">
            <div class="card-body">
                <h3>สวัสดีท่านสมาชิกชมรมคนชอบ....</h3>
                <?php if(isset($_SESSION['user'])):?>
                <small>สวัสดีคุณ <strong><?php echo $_SESSION['user']; ?></strong></small><br>
                <small>ขณะนี้คุณใช้รหัส: <strong><?php echo $_SESSION['pass']; ?></strong></small>
                <a href="/index.php?logout='1'">ออกระบบ</a>
                <?php endif?>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>