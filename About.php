<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "ต้องไป login";
        header('location: Accounts.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: Accounts.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUR</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- BOXICON -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <!-- HEADER -->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="index.php" class="nav__logo">FIGURE SHOP</a>
            </div>

            <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="test_2.php" class="nav__link">Featured</a></li>
                    <li class="nav__item"><a href="view-arrivals.php" class="nav__link">New</a></li>
                    <li class="nav__item"><a href="About.php" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="Accounts.php" class="nav__link">Account</a></li>
                    <li class="nav__item"><a href="#"><i class='bx bx-cart-alt nav_cart'></i></a></li>
                    <i class='bx bx-menu nav_toggle' id="nav_toggle"></a></i>
                    <li class="nav__item"><?php if (isset($_SESSION['username'])) :?></li>
                        <strong><?php echo $_SESSION['username']; ?></strong>
                        <p><a href="index.php?logout='1'" style="color: red"> Logout</a></p>
                    <?php endif ?>          
                </ul>
            </div>

            <!-- <div>
            <a href="adf.php"><i class='bx bx-cart-alt nav_cart'></i></a>
                <i class='bx bx-menu nav_toggle' id="nav_toggle" ></i>
            </div> -->
        </nav>
    </header>

    <main class="l-main">

        <!-- about -->
        <div class="about">
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <h2>FIGURE SHOP</h2>
                            <p>FIGURE SHOP 
                              เว็บขายโมเดล FIGURE ONLINE  โมเดลสะสม โมเดลตัวละครหายาก โมเดลการ์ตูน <br> 
                              ที่ชื่นชอบ FIGURE SHOP ตั้งใจจะมอบความสนุก และให้ความสำคัญในทุกๆ Hobby เราจึงขอเป็นตัวแทนจำหน่ายโมเดลแท้ในทุกๆ 
                              หมวดเพื่อเป็นตัวกลางให้กับผู้รักและชื่นชอบในตัวละครต่างๆ FIGURE SHOP <br> 
                              มีโมเดลให้เลือกหลากหลายตัว ไม่ว่าจะเป็นโมเดลตัวละครในการ์ตูน อาทิ เช่น <br>
                                -ONE PICE <br>
                                -DRAGONBALL <br>
                                -NARUTO  <br>
                                -CONAN <br>
                                -KIMETSU NO YAIBA<br>
                                - GUNDAM <br> 
                                และอื่น ๆ มีให้เลือกหลากหลายรูปแบบ หลากหลายขนาด
                            </p>
                        </div>    
                        <div class="col-sm-5">
                            <div class="img-wrap">
                                <img src="./assets/pngguru.com (1).png" alt="">
                            </div>
                        </div>
                    </div>
                </div>    
            </section>
        </div>
        
        <!-- FEATURED PRODUCTS -->
        <section class="festured section" id="featured">
            <h2 class="section-title">FEATURED PRODUCTS</h2>
            <a href="test_2.php" class="section-all">View All</a>

            <div class="featured__container bd-grid">
                <a href="pikaju.html">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/01/2.jpg" alt="" class="featured__img">
                        </div>    
    
                        <div class="featured__data">
                            <h3 class="featured__name">BEPO X PIKACHU</h3>
                            <span class="featured__preci">10,800THB</span>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/03/2.jpg" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Shiki</h3>
                            <span class="featured__preci">2,350THB</span>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/04/1.jpg" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Charizard</h3>
                            <span class="featured__preci">14,500THB</span>
                        </div>
                    </div>
                </a>    

                <a href="#">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/08/4.jpg" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Buu Foodie</h3>
                            <span class="featured__preci">3,250THB</span>
                        </div>
                    </div>
                </a>
                    
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer section">
        <div class="footer__container bd-grid">
            <div class="footer__box">
                <h3 class="footer__title">FIGUER SHOP</h3>
                <p class="footer__deal">Products Store</p>
                <a href="#"><img src="./assets/footerstore1.png" alt="" class="footer__store"></a>
                <a href="#"><img src="./assets/footerstore2.png" alt="" class="footer__store"></a>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">EXPLORE</h3>
                <ul>
                    <li><a href="index.php" class="footer__link">Home</a></li>
                    <li><a href="test_2.php" class="footer__link">Featured</a></li>
                    <li><a href="view-arrivals.php" class="footer__link">new</a></li>
                    <li><a href="About.php" class="footer__link">About</a></li>
                    <li><a href="Accounts.php" class="footer__link">Account</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">OUR SERVICES</h3>
                <ul>
                    <li><a href="#" class="footer__link">Pricing</a></li>
                    <li><a href="#" class="footer__link">Free Shipping</a></li>
                    <li><a href="#" class="footer__link">Gift Cards</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">FOLLow</h3>
                <a href="#" class="footer__social"><i class='bx bxl-facebook-square'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; 2020 copyright all right reserved</p>
    </footer>
    



    <script src="./js/mian.js"></script>
</body>
</html>