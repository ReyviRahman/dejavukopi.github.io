<?php 
  require 'functions.php';
  if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
      echo "<script>
        alert('Terima kasih telah mendaftar data anda akan kami verifikasi');
      </script>";
    } 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">
   <form action="" method="POST">
      <h3>register now</h3>
      <input type="text" name="username" required placeholder="Masukkan username">
      <input type="email" name="email" required placeholder="Masukkan email">
      <input type="number" name="noHandphone" required placeholder="No Handphone">
      <input type="text" name="alamat" required placeholder="Alamat">
      <input type="password" name="password" required placeholder="Masukkan password">
      
      <input type="submit" name="register" value="register now" class="form-btn">
      <p>Sudah memiliki akun? <a href="login_form.php">login sekarang</a></p>
   </form>
</div>

</body>
</html>