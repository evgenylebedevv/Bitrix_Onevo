<?
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}
$APPLICATION->SetTitle("Onevo");
$APPLICATION->ShowHead();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>oneVo - Responsive HTML 5 template</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/bitrix/templates/.default/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/bitrix/templates/.default/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/bitrix/templates/.default/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/bitrix/templates/.default/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/bitrix/templates/.default/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/bitrix/templates/.default/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/bitrix/templates/.default/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/bitrix/templates/.default/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/bitrix/templates/.default/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/bitrix/templates/.default/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/bitrix/templates/.default/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/bitrix/templates/.default/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/bitrix/templates/.default/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/bitrix/templates/.default/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/style.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/responsive.css">
</head>
<body class="_active-preloader-ovh">
<div id="panel">
    <?=$APPLICATION->ShowPanel();?>
</div>
<!-- <div class="preloader"><div class="spinner"></div></div> --> <!-- /.preloader -->

<!--<header class="header home-page-five">-->
<!--    <nav class="navbar navbar-default header-navigation stricky">-->
<!--        <div class="container clearfix">-->
<!--             Brand and toggle get grouped for better mobile display -->
<!--            <div class="navbar-header">-->
<!--                <a class="navbar-brand" href="/">-->
<!--                    <img src="/bitrix/templates/.default/img/logo-5-1.png" alt="Awesome Image" class="default-logo" />-->
<!--                </a>-->
<!--            </div>-->
<!--             Collect the nav links, forms, and other content for toggling-->
<!--            <div class="collapse navbar-collapse main-navigation mainmenu one-page-scroll-menu" id="main-nav-bar">-->
<!---->
<!--                <ul class="nav navbar-nav navigation-box">-->
<!--                    <li class=" current"> <a href="index.php">Home</a>-->
<!--                        <ul class="sub-menu">-->
<!--                            <li><a href="../index.php">Home One</a></li>-->
<!--                            <li><a href="index2.html">Home Two</a></li>-->
<!--                            <li><a href="index3.html">Home Three</a></li>-->
<!--                            <li><a href="index4.html">Home Four</a></li>-->
<!--                            <li><a href="index5.html">Home Five</a></li>-->
<!--                            <li><a href="index6.html">Home Six</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li> <a href="index.php#features">Features</a> </li>-->
<!--                    <li> <a href="index.php#services">Services</a> </li>-->
<!--                    <li> <a href="index.php#portfolio">Portfolio</a> </li>-->
<!--                    <li> <a href="index.php#pricing">Pricing</a> </li>-->
<!--                    <li>-->
<!--                        <a href="/blog/index.php">Blog</a>-->
<!--                        <ul class="sub-menu">-->
<!--                            <li><a href="/blog/blog-listing/index.php">Blog Listing</a></li>-->
<!--                            <li><a href="/blog/blog-details/index.php">Blog Details</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li> <a href="index.php#contact">Contact</a> </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="right-side-box">-->
<!--                <a href="#" class="sidemenu-btn flaticon-menu side-nav-opener"></a>-->
<!--            </div> /.right-side-box -->
<!--        </div> /.container -->
<!--    </nav>-->
<!--</header> /.header -->

<!--<div class="inner-page-title">-->
<!--    <div class="container">-->
<!--        <h3>Blog Listing</h3>-->
<!--        <ul class="breadcumb">-->
<!--            <li><a href="index.php">Home</a></li>-->
<!--            <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>-->
<!--            <li><span>Blog Listing</span></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "top_multi",
    Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "DELAY" => "N",
        "MAX_LEVEL" => "2",
        "MENU_CACHE_GET_VARS" => array(""),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "top",
        "USE_EXT" => "N"
    )
);?>

<div class="clearBoth"></div>

<?$APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "breadcrumbs",
    Array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    )
);?>

<section class="blog-list blog-style-two sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="has-right-sidebar">
                    <div class="single-blog-post-style-two">
                        <div class="img-box">
                            <img src="/bitrix/templates/.default/img/blog-1-1.jpg" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a href="#"><h3>Loft Office With Vintage Decor For Creative Working</h3></a>
                            <div class="meta-info">
                                <a href="#"><i class="fas fa-calendar-alt"></i> July 21, 2018</a><!--
                                --><a href="#"><i class="fas fa-user-alt"></i> By Admin</a><!--
                                --><a href="#"><i class="fas fa-th-list"></i> Uncategorized</a><!--
                                --><a href="#"><i class="fas fa-comment"></i> (0) Comment</a>
                            </div><!-- /.meta-info -->
                            <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencie, responding to the new possibilitie available. However, the in come is fast becoming overcrowded, heaving with agencies offering similar services — on the most surface, at least. [...]</p>
                            <a href="#" class="read-more">View More <i class="fa fa-angle-right"></i></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-blog-post-style-two -->
                    <div class="single-blog-post-style-two">
                        <div class="img-box">
                            <img src="/bitrix/templates/.default/img/blog-1-2.jpg" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a href="#"><h3>As Envato turns 20, questions over whether it's too powerful</h3></a>
                            <div class="meta-info">
                                <a href="#"><i class="fas fa-calendar-alt"></i> July 21, 2018</a><!--
                                --><a href="#"><i class="fas fa-user-alt"></i> By Admin</a><!--
                                --><a href="#"><i class="fas fa-th-list"></i> Uncategorized</a><!--
                                --><a href="#"><i class="fas fa-comment"></i> (0) Comment</a>
                            </div><!-- /.meta-info -->
                            <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencie, responding to the new possibilitie available. However, the in come is fast becoming overcrowded, heaving with agencies offering similar services — on the most surface, at least. [...]</p>
                            <a href="#" class="read-more">View More <i class="fa fa-angle-right"></i></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-blog-post-style-two -->
                    <div class="single-blog-post-style-two">
                        <div class="img-box">
                            <img src="/bitrix/templates/.default/img/blog-1-3.jpg" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a href="#"><h3>Regulatory bodies for manned submersibles in Canada</h3></a>
                            <div class="meta-info">
                                <a href="#"><i class="fas fa-calendar-alt"></i> July 21, 2018</a><!--
                                --><a href="#"><i class="fas fa-user-alt"></i> By Admin</a><!--
                                --><a href="#"><i class="fas fa-th-list"></i> Uncategorized</a><!--
                                --><a href="#"><i class="fas fa-comment"></i> (0) Comment</a>
                            </div><!-- /.meta-info -->
                            <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencie, responding to the new possibilitie available. However, the in come is fast becoming overcrowded, heaving with agencies offering similar services — on the most surface, at least. [...]</p>
                            <a href="#" class="read-more">View More <i class="fa fa-angle-right"></i></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-blog-post-style-two -->
                    <div class="blog-post-pagination">
                        <a href="#" class="active">1</a><!--
                        --><a href="#">2</a><!--
                        --><a href="#">3</a><!--
                        --><a href="#">4</a><!--
                        --><a href="#"><i class="fa fa-angle-right"></i></a>
                    </div><!-- /.blog-post-pagination -->
                </div><!-- /.has-right-sidebar -->
            </div><!-- /.col-md-9 -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="single-sidebar search-widget">
                        <form action="#">
                            <input type="text" placeholder="Search..." />
                            <button type="submit" class="fa fa-search"></button>
                        </form>
                    </div><!-- /.single-sidebar -->


                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/recent-posts-widget.php"
                        )
                    );?>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "sect",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => ""
                        )
                    );?>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/archives-side-widget.php"
                        )
                    );?>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/tags-widget.php"
                        )
                    );?>

                </div><!-- /.sidebar sidebar-right -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-list blog-style-two -->

