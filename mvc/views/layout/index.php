<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    
    <title>Adela Cosmetic</title>

    <style>
    html, body{
        font-family: 'Baloo Tammudu 2', cursive;
    }
    </style>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

     <?php
    require_once('home/css.php');
    ?> 
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?php echo URL_LAYOUT; ?>img/logo3.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
           
        </div>
        <div class="humberger__menu__widget">
           
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="<?php echo URL.'layout/shop-grid'?>">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> adelacosmetic@gmail.com</li>
                <li>Miễn phí ship với đơn hàng trên 300.000</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php
    require_once('home/header.php');
    ?> 
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero" style="font-family: 'Baloo Tammudu 2', cursive;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả sản phẩm</span>
                        </div>
                        <ul>
                            <li><a href="#">Nước Hoa</a></li>
                            <li><a href="#">Mỹ phẩm xách tay</a></li>
                            <li><a href="#">Son</a></li>
                            <li><a href="#">Toners</a></li>
                            <li><a href="#">Phấn Má</a></li>
                            <li><a href="#">Kẻ mắt</a></li>
                            <li><a href="#">Kem nền</a></li>
                            <li><a href="#">Mascara</a></li>
                            <li><a href="#">Nước tẩy trang</a></li>
                            <li><a href="#">Phấn mắt</a></li>
                            <li><a href="#">Hoa tai</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="search.php" method="POST">
                                
                                <input type="text" placeholder="Tìm sản phẩm..." name="tensp">
                                <button type="submit" class="site-btn" value="Search" name="search1"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 123 123 123</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="<?php echo URL_LAYOUT; ?>img/hero/banner2.jpg">
                        <div class="hero__text">
                            
                            <h2 style="color: green">Săn mỹ phẩm <br />nhận ngay quà hay</h2>
                            <h6>Khuyến mãi chỉ hôm nay.</h6><br>
                            <a href="#" class="btn btn-warning">Đặt hàng ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <?php
    require_once('home/categories.php');
    ?> 
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
            <?php
    require_once('home/listProduct.php');
    ?> 

    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo URL_LAYOUT; ?>img/hero/banner3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo URL_LAYOUT; ?>img/hero/banner4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <?php
    require_once('home/latestProduct.php');
    ?>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
     <?php
    require_once('home/blog.php');
    ?>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
     <?php
    require_once('home/footer.php');
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    
    <?php
    require_once('home/js.php');
    ?>


</body>

</html>