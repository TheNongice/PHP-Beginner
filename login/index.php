<?php session_start() ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pages!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!--<script src="https://kit.fontawesome.com/**YOUR_PROJECT_ID**.js" crossorigin="anonymous"></script> -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');
    body{
      font-family: 'Mitr', sans-serif;
    }
    .a{
      text-align: center;
    }
    .cen{
      margin-top: 2rem;
      margin-left: 4rem;
      margin-right: 4rem;
    }
    </style>
    <!--SweetAlert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
  <?php include_once('conn.php'); ?>  
 <div class='container-sm' style='margin-top: 2rem;'>
  	<h1 class="a" style="margin-top: 2rem;"><i class="fas fa-user-shield"></i> Login Pages!</h1>
  	<div class='card cen'>
	  <div class='card-body'>
	   <form action="auth.php" class="text-center">
	   		<p><i class="fas fa-address-book"></i> Username: <input type="user" class="form-control"></p>
	   		<p><i class="fas fa-key"></i> Password: <input type="password" class="form-control"></p>
	   		<button class="btn btn-success" type="submit"><i class="fas fa-sign-in-alt"></i> Login!</button>
	   </form>
	  </div>
	</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
