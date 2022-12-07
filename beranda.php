<?php 
  require 'functions.php';
  if(isset($_POST["pesan"])){
    if(pembelian($_POST) > 0){
      echo "<script>
        alert('Pesanan anda akan segera di proses Terima kasih');
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
    <title>Dejavu Kopi</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/stylee.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header d-flex">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar d-flex me-auto">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#contact">lokasi</a>
        <a href="#contact2">order</a>
    </nav>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">Rp.15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">Rp.15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">Rp.15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-4.png" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">Rp.15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3 >MENIKMATI KOPI DI WAKTU SENJA</h3>
        <p style="font-weight: bold;">Menyediakan berbagai macam varian minuman dengan penuh cita rasa yang tinggi yang akan menemani mu dikala senja. Di jamin bikin nagih!!!!</p>
        <a href="#contact2" class="btn">Pesan Sekarang</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" style="margin-top: 70px;" id="about">

    <h1 class="heading"> <span>Tentang</span> kami </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>Yuk nongkrong di dejavukopi</h3>
            <p>Dejavukopi berlokasi di jalan Kemajuan, Mendalo Kecamatan Jaluko <br> Buka setiap hari, pukul 16.00 - 23.00</p>
            <p>Lokasi kami sangat strategis karena berada di samping Universitas Jambi yang menjadikannya sebagai tempat nongkrong yang pas untuk mahasiswa setelah jam perkuliahan</p>
            <a href="#" class="btn">Lokasi</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" style="margin-top: 70px;" id="menu">

    <h1 class="heading"><span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>Latte</h3>
            <div class="price">Rp.16.000</div>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>Amricano</h3>
            <div class="price">Rp.12.000</div>
            
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>Capuccino</h3>
            <div class="price">Rp.10.000</div>
            
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>Caramel Latte</h3>
            <div class="price">Rp.16.000</div>
            
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>Vanilla Latte</h3>
            <div class="price">Rp.16.000</div>
            
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>Vietnam Drip</h3>
            <div class="price">Rp.15.000</div>
            
        </div>

    </div>

</section>

<!-- menu section ends -->

<!-- contact section starts  -->

<section class="contact" style="margin-top:70px;margin-bottom: 70px;" id="contact">

    <h1 class="heading"> <span>Lokasi</span> kami </h1>

    <div class="row" style="height: 500px;">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.239769446624!2d103.52222599999999!3d-1.6117759999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMcKwMzYnNDIuNCJTIDEwM8KwMzEnMjAuMCJF!5e0!3m2!1sid!2sid!4v1669942110014!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>

        
    </div>

</section>

<!-- contact section ends -->

<section class="contact" id="contact2">

    <h1 class="heading"> <span>Pesan</span> Sekarang </h1>

    <div class="row">
        
        <form action="">
            <h3>Pesan Melalui WhatsApp</h3>
            <div class="share mt-5">
                <a href="https://web.whatsapp.com/" class="mt-5 share fab fa-whatsapp"></a> <br>
                <a class="no" style="border: none; ">082282609158</a>
                <h1 style="color: white;">Buka setiap hari, pukul 16.00 - 23.00</h1>

            </div>
        </form>
        

        <form action="">
            <h3 >Kunjungi Instagram Kami</h3>
            <div class="share mt-5">
                <a href="https://www.instagram.com/dejavukopi.id/" class="mt-5 share fab fa-instagram"></a> <br>
                <a href="https://www.instagram.com/dejavukopi.id/" class="no" style=" border: none; ">@dejavukopi.id</a>
            </div>
        </form>

        <form action="" method="POST">
            <h3>Pesan Melalui Website</h3>
            <div class="inputBox" style="margin-left: 160px; width: 70%;">
                <input type="text" name="username" placeholder="Nama">
            </div>
            <div class="inputBox" style="margin-left: 160px; width: 70%;">
                <input type="number" name="noTelepon" placeholder="NoTelepon">
            </div>
            <div class="inputBox" style="margin-left: 160px; width: 70%;">
                <input type="text" name="alamat" placeholder="Alamat">
            </div>
            <div class="inputBox" style="margin-left: 160px; width: 70%;">
                <input type="text" name="pesanan" placeholder="Mau Pesan Apa?">
            </div>
            <input type="submit" name="pesan" value="Pesan sekarang" class="btn">
        </form>

    </div>

</section>

<!-- blogs section starts  -->



<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    

    <div class="credit">created by <span>R002 Kelompok 3 </span> | all rights reserved</div>

</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

        