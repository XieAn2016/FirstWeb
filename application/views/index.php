<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo site_url( ) ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header id="header">
    <div class="wrapper">
        <a href="#">
            <img src="img/logo.png" alt="图片加载失败">
        </a>
        <ul id="header-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li style="width: 30px;">
                <div id="search-box">
                    <input type="search" id="search-input" placeholder="Enter your search term..">
                    <button type="submit" id="search-btn"></button>
                </div>
            </li>
        </ul>
    </div>
</header>
<div id="banner"></div>
<div id="works"></div>
<div id="service"></div>
<div id="meet"></div>
<footer></footer>
<script src="js/require.js" data-main="js/index"></script>
</body>
</html>