<?php
    $cate_id=$this->input->get('cateId');
?>
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script>
        window.addEventListener("load",function () {
            setTimeout(hideURLbar,0);
        },false);
        function  hideURLbar() {
            window.scrollTo(0,1);
        }
    </script>
</head>

<body>
<header id="header" class="clearfix">
    <div class="wrapper">
        <a href="#">
            <img src="img/logo.png" alt="图片加载失败">
        </a>
        <div id="header-menu">
            <a href="#header-menu" id="btn-show" class="btn btn-show"><span><i class="fa fa-bars" aria-hidden="true"></i></span></a>
            <a href="#header-nav" id="btn-hide" class="btn btn-hide"><span class="fa fa-remove"></span></a>
            <ul id="header-nav" class="header-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li class="search">
                    <div id="search-box">
                        <input type="search" id="search-input" placeholder="Enter your search term..">
                        <button type="submit" id="search-btn"></button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<div id="banner" >
    <div class="wrapper">
        <div class="banner-matter">
            <h2>Creative Ideas Live Here</h2>
            <p>Aliquam suscipit vel nulla quis eleifend. Maecenas vitae tristique ante. Sed sit amet vehicula libero.</p>
        </div>
        <div class="tv">
            <img class="img-responsive" src="img/tv.png" alt="图片加载失败">
        </div>
        <div class="clearfix"></div>
        <hr>
    </div>
</div>

<div id="works">
    <!--<div class="wrapper">
        <div class="works-top">
            <h3>Latest Works</h3>
            <ul class="blog-cate">
                <li><a href="#"  class="<?php /*echo !$cate_id?"active":"";*/?>">ALL</a></li>
                <?php
/*                    foreach ($categories as $cate){
                        */?>
                        <li><a class="<?php /*echo $cate_id==$cate->cate_id?"active":"";*/?>" href="welcome/index?cateId=<?php /*echo $cate->cate_id ; */?>"><?php /*echo  $cate->cate_name ;*/?></a></li>
                        <?php
/*                    }
                */?>
            </ul>
        </div>
        <ul class="blog-list">
            <?php
/*                foreach ($blogs as $blog) {
                    */?>

                    <li class="blog">
                        <a href="#">
                            <img src="<?php /*echo  $blog->img;*/?>" alt="图片加载失败">
                            <div class="blog-desc">
                                <p class="blog-title"><?php /*echo  $blog->title;*/?></p>
                                <span class="blog-click"><?php /*echo  $blog->clicked;*/?></span>
                            </div>
                            <div class="mask">
                                <h4>PHOTO</h4>
                                <span>VIEW PHOTO</span>
                            </div>
                        </a>
                    </li>



                    <?php
/*                }

            */?>
        </ul>
    </div>-->
    <div class="wrapper">
        <div class="works-top">
            <h3>Latest Works</h3>
            <ul class="blog-cate">
                <li><a href="javascript:;"  class="active">ALL</a></li>
                <?php
                foreach ($categories as $cate){
                    ?>
                    <li><a href="javascript:;" data-id="<?php echo  $cate->cate_id ;?>"><?php echo  $cate->cate_name ;?></a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <ul class="blog-list">
            <?php
            foreach ($blogs as $blog) {
                ?>

                <li class="blog">
                    <a href="welcome/view_blog?blogId=<?php echo $blog->blog_id;?>">
                        <img src="<?php echo  $blog->img;?>" alt="图片加载失败">
                        <div class="blog-desc">
                            <p class="blog-title"><?php echo  $blog->title;?></p>
                            <span class="blog-click"><?php echo  $blog->clicked;?></span>
                        </div>
                        <div class="mask">
                            <h4>PHOTO</h4>
                            <span>VIEW PHOTO</span>
                        </div>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>


</div>
<div id="service"></div>
<div id="meet"></div>
<footer></footer>
<script src="js/require.js" data-main="js/index"></script>
</body>
</html>