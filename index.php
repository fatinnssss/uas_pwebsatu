<?php
/* nama server kita */
$servername = "localhost";

/* nama database kita */
$database = "ecommerce"; 

/* nama user yang terdaftar pada database (default: root) */
$username = "root";

/* password yang terdaftar pada database (default : "") */ 
$password = ""; 

/* membuat koneksi */
$conn = mysqli_connect($servername, $username, $password, $database);

/* mengecek koneksi */
if (!$conn) {
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());

}
/* menutup koneksi */
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========= FONT-AWESOME ========-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <!-- SCROLL UP -->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-chevron-up scrolltop_icon"></i>
    </a>


    <!--======== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav_logo">Tas Fashion Branded</a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item"><a href="#home" class="nav_link active-link">Home</a></li>
                    <li class="nav_item"><a href="#about" class="nav_link">About</a></li>
                    <li class="nav_item"><a href="#menu" class="nav_link">Menu</a></li>
                    <li class="nav_item"><a href="#contact" class="nav_link">Contact Us</a></li>
                </ul>
            </div>

            <div class="nav_toggle" id="nav-toggle">
                <i class="bx bx-menu"></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--========= HOME ==========-->
        <section class="home" id="home">
            <div class="home_container bd-container bd-grid">
                <div class="home_data">
                    <h1 class="home_title">Selamat Datang</h1>
                    <h2 class="home_subtitle">Di Toko Tas Kami</h2>
                    <a href="#" class="button">Lihat Toko</a>
                </div>

                <img src="Image/tas2.png" alt="" class="home_img">
            </div>
        </section>

        <!--=========== ABOUT =============-->
        <section class="about section bd-container" id="about">
            <div class="about_container bd-grid">
                <div class="about_data">
                    <span class="section-subtitle about_initial">About US</span>
                    <p class="about_description">Temukan berbagai tas seminar berkualitas dengan harga terbaik hanya di toko online kami. Tersedia dalam berbagai ukuran, desain, dan warna. Dapatkan pengalaman berbelanja online yang mudah dan aman dengan layanan pelanggan terbaik dari kami. Beli sekarang dan dapatkan diskon menarik serta penawaran spesial!
                    </p>
                    
                </div>

                <img src="Images/tas4.jpeg" alt="" class="about_img">
            </div>
        </section>

           <!--=========== MENU =============-->
        <section class="menu section bd-container" id="menu">
            <span class="section-subtitle">Menu Kami</span>
            <h2 class="section-title">Pilih Keranjang</h2>

            <div class="menu_container bd-grid">
                <div class="menu_content">
                    <img src="Images/tas1.png" alt="" class="menu_img">
                    <h3 class="menu_name">chanel</h3>
                    <span class="menu_detail">2022 Edition</span>
                    <span class="menu_price">Rp. 350.000</span>
                    <a href="order.php" class="button menu_button"><i class="bx bx-cart-alt"></i></a>
                </div>
                <div class="menu_content">
                    <img src="Images/tas2.png" alt="" class="menu_img">
                    <h3 class="menu_name">elizabeth</h3>
                    <span class="menu_detail">2022 Edition</span>
                    <span class="menu_price">Rp. 600.000</span>
                    <a href="order.php" class="button menu_button"><i class="bx bx-cart-alt"></i></a>
                </div>
                <div class="menu_content">
                    <img src="Images/tas5.jpeg" alt="" class="menu_img">
                    <h3 class="menu_name">Dior</h3>
                    <span class="menu_detail">2021 Edition</span>
                    <span class="menu_price">Rp. 200.000</span>
                    <a href="order.php" class="button menu_button"><i class="bx bx-cart-alt"></i></a
                </div>
            </div>
        </section>

       
        <!--========= CONTACT =========-->
        <section class="contact section bd-container" id="contact">
            <div class="contact_container bd-grid">
               <div class="contact_button">
                    <a href="https://wa.me/6285702292253" class="button">Hubungi kami dan kami akan melayani dengan segera mungkin 
                    </a>
                </div>
            </div>
        </section>
    </main>

 
    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== JAVASCRIPT =======-->
    <script src="js/main.js"></script>

</body>
</html>