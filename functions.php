<?php 
  $conn = mysqli_connect("sql313.epizy.com", "epiz_33137087", "qgZS5Eo6AIJOx","epiz_33137087_dejavukopi");

  function registrasi($data){
    global $conn;
    $username = $data["username"];
    $email = $data["email"];
    $noHandphone = $data["noHandphone"];
    $alamat = $data["alamat"];
    $password = $data["password"];

    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$email','$noHandphone','$alamat', '$password')");

    return mysqli_affected_rows($conn);

  }

  function pembelian($data){
    global $conn;
    $username = $data["username"];
    $noTelepon = $data["noTelepon"];
    $alamat = $data["alamat"];
    $pesanan = $data["pesanan"];

    mysqli_query($conn, "INSERT INTO pembelian VALUES('','$username','$noTelepon','$alamat','$pesanan')");

    return mysqli_affected_rows($conn);

  }

?>