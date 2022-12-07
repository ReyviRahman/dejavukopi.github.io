<!DOCTYPE html>

<html>

<head>

 <title>Table layout</title>
 <link rel="stylesheet" href="berandaAdmin.css">
</head>

<body>
  <a href="webAdmin.php">Website</a>
  <h1 style="text-align: center; margin-top: 10px;">Orderan Hari ini</h1>

  <div class="filter">

 </div>

 <table >

 <tr>

 <th>No</th>

 <th>Username</th>

 <th>No Telepon</th>
 <th>Alamat </th>

 <th>Pesanan</th>

 </tr>
 <?php 
   $no = 0;
   $conn = mysqli_connect("localhost", "root", "","dejavu");
   if ($conn-> connect_error){
     die("Connection failed:". $conn-> connect_error);
   }

   $sql = "SELECT  username, noTelepon, alamat, pesanan from pembelian";
   $result = $conn-> query($sql);

   if ($result-> num_rows > 0){
     while($row = $result-> fetch_assoc()){
       $no++;
       echo"<tr><td>". $no ."</td><td>". $row["username"] ."</td><td>". $row["noTelepon"]. "</td><td>". $row["alamat"]. "</td><td>". $row["pesanan"]. "</td></tr>";
     }
   }
   else{
     echo "0result";
   }
   $conn-> close();

 ?>
 

 </table>


 </body>

</html>