<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./public/frontend/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./public/frontend/css/style.css">
    <link rel="stylesheet" href="./public/frontend/css/cart/style.css">
    <link rel="stylesheet" href="./public/frontend/css/shop/style.css">
</head>

<body>    
    <header class="heading">
        <div class="heading__heading-top">
            <div class="container">
                <div class="heading__heading-grid">
                    <div class="heading__heading-left">
                        <div class="heading__heading-item">
                            <a href="#"><img src="./public/frontend/image/en.png" alt="">
                                <span>Eng/$</span>
                            </a>
                        </div>
                        <div class="heading__heading-item">
                            <span>Available 24/7 at(00) 33 169 7720</span>
                        </div>
                    </div>
                    <div class="heading__heading-right">
                        <div class="heading__heading-item">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>
                                Wishlist(3)
                            </a>
                        </div>
                        <div class="heading__heading-item">
                            <a href="#">
                                <i class="fa fa-refresh" aria-hidden="true"></i> Compare(3)
                            </a>
                        </div>
                        <div class="heading__heading-item">
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Oder tracking
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="heading__heading-center">
            <div class="container">
                <div class="heading__heading-grid">
                    <div class="heading__heading-item">
                        <div class="heading__logo">
                            <a href="index.php"> <img class="img-1" src="./public/frontend/image/logo-dark.png" alt=""></a>
                            <a href="index.php"><img class="img-2" src="./public/frontend/image/logo-icon.png" alt="">
                            </div></a>
                    </div>
                    <div class="heading__heading-item">
                        <form action="#" class="heading__heading-search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="search" name="search" id="search" placeholder="Search for products">
                                <select class="heading__custom-select">
                                    <option>All categories</option>
                                    <?php foreach($categories as $category):?>
                                        <option><?=$category['name']?></option>
                                    <?php endforeach;?>
                                </select>
                        </form>
                    </div>
                    <div class="heading__group-item">
                        <span class="heading--menu"><i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <a href="index.php?module=backend&controller=verify" class="heading__heading-item">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                            <span class="heading--hidden">My Account</span>
                        </a>
                        <a href="index.php?controller=cart" class="heading__heading-item">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="heading--hidden">My cart</span>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="heading__navbar">
                <div class="container">
                    <div class="heading__heading-grid">
                        <div class="heading__department-menu">
                            <ul>
                                <li>
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    <span>Departments</span>
                                    <div class="heading__dropdown-menu">
                                        <?php foreach($categories as $category):?>
                                            <a href="index.php?controller=category&action=show&id=<?=$category['id']?>">
                                                <?=$category['name']?>
                                            </a>                     
                                        <?php endforeach;?>    
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="heading__primary-menu">
                            <ul>
                                <li><a href="index.php?controller=home&action=index" class="home active" >Home</a></li>
                                <li><a href="index.php?controller=product&action=more" class="shop">Shop</a></li>
                                <li><a href="">Account</a></li>
                                <li><a href="about.html" class="about">About us</a></li>
                                <li><a href="" class="blog">Blog</a></li>
                                <li><a href="">Docs/Components</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>