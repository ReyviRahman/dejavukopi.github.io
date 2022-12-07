<?php 
  require 'functions.php';
  if(isset($_POST["admin"])){

      if(("admin" == $_POST['username']) && ("dejavu121" == $_POST['password']) ){
        header("Location: berandaAdmin.php");
        exit;
      }
    $error = true;
  }

  if(isset($_POST["user"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_assoc($result);
      if($password == $row["password"]){
        header("Location: beranda.php");
        exit;
      }
    }
    $error = true;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>login sekarang</h3>
      <?php if(isset($error)) : ?>
        <p style="color: red;">Username / password salah</p>
      <?php endif; ?>
      <input type="text" name="username" required placeholder="Masukkan username">
      <input type="password" name="password" required placeholder="Masukkan Password">
      <p>Login sebagai</p>
      <div class="row justify-content-center">
         <div class="col-5">
            <input type="submit" name="user" value="User" class="form-btn">
         </div>
         <div class="col-5">
            <input type="submit" name="admin" value="Admin" class="form-btn">
         </div>
      </div>
      <p>Belum punya akun? <a href="register_form.php">Daftar Sekarang</a></p>
   </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>