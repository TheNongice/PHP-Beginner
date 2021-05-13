<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pages!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <!--<script src="https://kit.fontawesome.com/**YOUR_PROJECT_ID**.js" crossorigin="anonymous"></script> -->
    <!--SweetAlert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
  <?php include_once('conn.php'); ?>  
  <div class='container-sm' style='margin-top: 2rem;'>
  	<h1 class="a" style="margin-top: 2rem;"><i class="fas fa-user-shield"></i> Member Zones!</h1>
  	<div class='card cen'>
	  <div class='card-body'>
      <div class="container">
        <div class="row">
          <a class="btn btn-primary" href="login.php">เข้าระบบ</a>
        </div>
        <div class="row" style="margin-top: 5px;">
        <a class="btn btn-danger" href="reg.php">ลงทะเบียน</a>
        </div>
      </div>
	  </div>
	</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
