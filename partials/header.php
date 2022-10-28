<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seedra</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="header">
        <div class="wrraper">
            <div class="nav">

                <img src="/assets/img/Logo.svg" alt="Seedra" class="logo">
                
                <ul class="menu">
                    <li class="all"> <a href="#">ALL PRODUCTS</a></li>
                    <div class="vl"></div>
                    <li class="all"><a href="#">ABOUT SEEDRA</a></li>
                    <div class="vl"></div>
                    <li class="all"><a href="#">OUR BLOG</a></li>
                    <div class="vl"></div>
                    <li ><a href="#" class="last">LOGIN</a></li>
                </ul>

                <a href="#" class="likeInst">
                    <div class="contacts"></div>
                </a>

                <a href="#" class="likeFace">
                    <div class="contactsFace"></div>
                </a>

                 <div class="search-box">
                    <form action="" method="GET" class="formForSearch">
                        <a class="search-btn" href="#" value="search"><img src="/assets/img/search.png" alt=""></a>
                        <input class="search-txt" type="text" name="search" placeholder="Search">
                    </form>
                </div>

                <div class="like-cart">
                    <a href="#" class="likeLink"><img src="/assets/img/heart.png" alt=""></a>
                    <a href="#" class="cartLink"><img src="/assets/img/icon_cart_simple .png" alt=""></a>
                </div>
            </div>
        </div>
    </header >
 
