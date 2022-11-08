<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ASSETS_URI ?>/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URI ?>/css/main.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<header id="navigation">
    <div class="container">
        <div id="mobile-menu" class="row d-flex align-items-center justify-content-between">
            <div id="logo" class="col-sm-12 col-md">
                <a href="/">
                    <img src="<?= IMAGES_URI ?>/logo.png" alt="logo">
                </a>
            </div>
            <div class="col-sm-12 col-md d-flex justify-content-end">
                <nav class="nav d-flex" id="links">
                    <a href="#home" class="nav-link">Home</a>
                    <a href="#about-us" class="nav-link">About</a>
                    <a href="#menu" class="nav-link">Coffee</a>
                    <a href="#kind-coffee" class="nav-link">Gallery</a>
                    <a href="#blog" class="nav-link">Blog</a>
                    <a href="#cart" class="nav-link cart">
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                        <span class="circle">0</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>