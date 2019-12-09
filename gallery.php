<!DOCTYPE html>

<html class="js gr__petervanalphen_com cssanimations" lang="en">
    <head>
        <?php include('partials/head.php'); ?>  
        <title>Black Lotus Photography - Gallery</title>    
        <meta name="description" content="">   
        <link rel="stylesheet" href="/assets/js/masterslider/style/masterslider.css" />
        <script src="/assets/js/masterslider/masterslider.min.js"></script>
    </head>

    <body data-gr-c-s-loaded="true" class="pace-done" cz-shortcut-listen="true">
        <?php include('partials/pace.php'); ?>
        <?php include('partials/navigation.php'); ?>
        <?php include('partials/logo_area.php'); ?>
        <?php include('partials/frame_right.php'); ?>
        <?php include('partials/color_picker.php'); ?>
        <?php include('partials/credits.php'); ?>
        <?php include('partials/hamburger_cnt.php'); ?>

        <div id="barba-wrapper" aria-live="polite">
            <div class="barba-container page-category">
                <div class="frame-left">
                    <div class="frame-left-vertical">
                        <div class="breadcrumbs">
                            <a href="/">
                                <div class="bread-item">
                                    <div class="bread-before">Home</div>
                                    <div class="bread-after">Home</div>
                                </div>
                            </a>
                            <div class="bread-arrow"></div>
                            <div class="bread-item" onMouseOver="this.style.cursor='auto'">
                                <div class="bread-before bread-no-hover" onMouseOver="this.style.cursor='auto'">Gallery</div>
                                <div class="bread-after">Gallery</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper">
                    <!-- Page Content -->
                    <div class="category">
                        <a href="/architecture.php/">
                            <div class="img-container-opening">
                                <div class="discovery"><p>Architecture</p></div>
                                <div class="discovery-arrow"></div>
                                <div class="category-img img-left"><img src="/assets/img/project/architecture-1/1.jpg"/></div>
                                <div class="category-img img-center"><img src="/assets/img/project/architecture-1/2.jpg"/></div>
                                <div class="category-img img-right"><img src="/assets/img/project/architecture-1/3.jpg"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="category">
                        <a href="/nature.php/">
                            <div class="img-container-opening">
                                <div class="discovery"><p>Nature</p></div>
                                <div class="discovery-arrow"></div>
                                <div class="category-img img-left"><img src="/assets/img/project/nature-1/1.jpg"/></div>
                                <div class="category-img img-center"><img src="/assets/img/project/nature-1/2.jpg"/></div>
                                <div class="category-img img-right"><img src="/assets/img/project/nature-1/3.jpg"/></div>
                            </div>
                        </a>
                    </div>
                    <div class="category-bg bg-gallery"></div>
                    <!-- ./Page Content -->
                </div>
            </div>
        </div>
    </body>
</html>