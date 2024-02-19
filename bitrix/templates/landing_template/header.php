<?
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}
$APPLICATION->SetTitle("Onevo");
?>

<?
/* IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/lang/ru/header.php", );
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__); */
?>


<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>
    <meta charset="UTF-8" />

    <title><?$APPLICATION->ShowTitle();?></title>
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
    <?$APPLICATION->ShowHead();?>
</head>

<body class="_active-preloader-ovh">

<div id="panel">
    <?=$APPLICATION->ShowPanel();?>
</div>
<div class="preloader"><div class="spinner"></div></div> <!-- /.preloader -->

<!--<header class="header home-page-one">-->
<!--    <nav class="navbar navbar-default header-navigation stricky">-->
<!--        <div class="container clearfix">-->
<!--             Brand and toggle get grouped for better mobile display -->
<!--            <div class="navbar-header">-->
<!--                <a class="navbar-brand" href="/">-->
<!--                    <img src="/bitrix/templates/.default/img/logo-1-1.png" alt="Awesome Image" class="default-logo" />-->
<!--                </a>-->
<!--            </div>-->
<!---->
<!--             Collect the nav links, forms, and other content for toggling -->
<!--            <div class="collapse navbar-collapse main-navigation mainmenu one-page-scroll-menu" id="main-nav-bar">-->
<!---->
<!--                <ul class="nav navbar-nav navigation-box">-->
<!--                    <li class="scrollToLink current"> <a href="#minimal-bootstrap-carousel">Home</a>-->
<!--                        <ul class="sub-menu">-->
<!--                            <li><a href="/index.php">Home One</a></li>-->
<!--                            <li><a href="--><?//=SITE_TEMPLATE_PATH;?><!--/index2.html">Home Two</a></li>-->
<!--                            <li><a href="--><?//=SITE_TEMPLATE_PATH;?><!--/index3.html">Home Three</a></li>-->
<!--                            <li><a href="--><?//=SITE_TEMPLATE_PATH;?><!--/index4.html">Home Four</a></li>-->
<!--                            <li><a href="--><?//=SITE_TEMPLATE_PATH;?><!--/index5.html">Home Five</a></li>-->
<!--                            <li><a href="--><?//=SITE_TEMPLATE_PATH;?><!--/index6.html">Home Six</a></li>-->
<!--                            <p>--><?// GetMessage("ABOUT_US"); ?><!--</p>-->
<!--                        </ul> /.sub-menu -->
<!--                    </li>-->
<!--                    <li class="scrollToLink"> <a href="#features">--><?// echo GetMessage("ABOUT_US"); ?><!--</a> </li>-->
<!--                    <li class="scrollToLink"> <a href="#services">--><?// echo GetMessage("SERVICES"); ?><!--</a> </li>-->
<!--                    <li class="scrollToLink"> <a href="#portfolio">--><?// echo GetMessage("PORTFOLIO"); ?><!--</a> </li>-->
<!--                    <li class="scrollToLink"> <a href="#pricing">--><?// echo GetMessage("PRICING"); ?><!--</a> </li>-->
<!--                    <li class="scrollToLink">-->
<!--                        <a href="#blog">Blog</a>-->
<!--                        <ul class="sub-menu">-->
<!--                            <li><a href="/blog/blog-listing/index.php">Blog Listing</a></li>-->
<!--                            <li><a href="/blog/blog-details/index.php">Blog Details</a></li>-->
<!--                        </ul> /.sub-menu -->
<!--                    </li>-->
<!--                    <li class="scrollToLink"> <a href="#contact">Contact</a> </li>-->
<!--                </ul>-->
<!---->
<!--            </div> /.navbar-collapse -->
<!--            <div class="right-side-box">-->
<!--                <a href="#" class="sidemenu-btn flaticon-menu side-nav-opener"></a>-->
<!--            </div> /.right-side-box -->
<!--        </div> /.container -->
<!--    </nav>-->
<!---->
<!--</header> /.header -->

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


<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "slider",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "slider",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("BUTTON_TWO","BUTTON_ONE","SUBTITLE_SECOND_WORD","SUBTITLE_FIRST_WORD","LINK","SUBTITLE",""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>

<div style="margin: auto; width: 50vw;">
<?$APPLICATION->IncludeComponent(
    "bitrix:system.auth.form",
    "",
    Array(
        "FORGOT_PASSWORD_URL" => "/polzovatel/",
        "PROFILE_URL" => "/polzovatel/profile.php",
        "REGISTER_URL" => "/polzovatel/registration.php",
        "SHOW_ERRORS" => "N"
    )
);?>
</div>

<section class="about-style-one">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="about-content">
                    <div class="tag-line">About us</div><!-- /.tag-line -->
                    <div class="title-text">We are modern & <br />special for
                        <div class="type-wrap">
                            <div class="typed-strings">
                                <p>designing</p>
                                <p>developing</p>
                                <p>marketing</p>
                            </div>
                            <div class="typed"></div>
                        </div>
                    </div>
                    <p>Browse our HTML5 responsive agency template <br /> below. Quisque lorem tortor fringilla sed, <br /> vestibulum id, eleifend justo  bibendum sapien <br /> massa ac turpis faucibus.</p>
                    <div class="progress-box">
                        <div class="single-progress-bar">
                            <div class="labeled-text">html</div><!-- /.labeled-text -->
                            <div class="progress-scale">
                                <div class="inner pogress-animation slideInLeft" style="width: 70%; background-color: #79CD1C"></div><!-- /.inner -->
                            </div><!-- /.progress-scale -->
                            <div class="percent"><span class="timer" data-from="0" data-to="70" data-speed="3000" data-refresh-interval="50"></span>%</div><!-- /.percent -->
                        </div><!-- /.single-progress-bar -->
                        <div class="single-progress-bar">
                            <div class="labeled-text">css</div><!-- /.labeled-text -->
                            <div class="progress-scale">
                                <div class="inner pogress-animation slideInLeft" style="width: 90%; background-color: #3396EC"></div><!-- /.inner -->
                            </div><!-- /.progress-scale -->
                            <div class="percent"><span class="timer" data-from="0" data-to="90" data-speed="3000" data-refresh-interval="50"></span>%</div><!-- /.percent -->
                        </div><!-- /.single-progress-bar -->
                        <div class="single-progress-bar">
                            <div class="labeled-text">php</div><!-- /.labeled-text -->
                            <div class="progress-scale">
                                <div class="inner pogress-animation slideInLeft" style="width: 60%; background-color: #19CAD0"></div><!-- /.inner -->
                            </div><!-- /.progress-scale -->
                            <div class="percent"><span class="timer" data-from="0" data-to="60" data-speed="3000" data-refresh-interval="50"></span>%</div><!-- /.percent -->
                        </div><!-- /.single-progress-bar -->
                    </div><!-- /.progress-box -->
                </div><!-- /.about-content -->
            </div><!-- /.col-md-5 -->
            <div class="col-md-7  col-sm-12 col-xs-12">
                <div class="about-img" data-wow-duration="2s"><img src="/bitrix/templates/.default/img/about-1-1.png" alt="Awesome Image"/></div><!-- /.about-img -->
            </div><!-- /.col-md-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-style-one -->

<section class="feature-style-three sec-pad gray-bg" id="features">
    <div class="container">
        <div class="sec-title text-center">
            <span>Processing</span>
            <h3>Easy ways to <br /> get ready your work</h3>
            <p>Browse our HTML5 responsive agency template below. Quisque lorem <br /> tortor fringilla sed,vestibulum id, eleifend justo.</p>
        </div><!-- /.sec-title -->
        <div class="row masonary-layout">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="single-feature-style-three">
                    <div class="icon-box">
                        <i class="flaticon-creative"></i>
                    </div><!-- /.icon-box -->
                    <h3>Contact us first</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis icing elitodin pro us.</p>
                </div><!-- /.single-feature-style-three -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="single-feature-style-three">
                    <div class="icon-box">
                        <i class="flaticon-network"></i>
                    </div><!-- /.icon-box -->
                    <h3>Consult with us</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div><!-- /.single-feature-style-three -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="single-feature-style-three">
                    <div class="icon-box">
                        <i class="flaticon-objective"></i>
                    </div><!-- /.icon-box -->
                    <h3>Place order</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis</p>
                </div><!-- /.single-feature-style-three -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="single-feature-style-three">
                    <div class="icon-box">
                        <i class="flaticon-banknote"></i>
                    </div><!-- /.icon-box -->
                    <h3>Give us payment</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div><!-- /.single-feature-style-three -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.feature-style-three -->

<section class="feature-style-two sec-pad pb0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 text-center-md">
                <div class="img-box gradient-one">
                    <div class="inner">
                        <img src="/bitrix/templates/.default/img/features-1-1.jpg" alt="Awesome Image"/>
                    </div><!-- /.inner -->
                </div><!-- /.img-box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-content">
                    <div class="tag-line">Quality of services</div><!-- /.tag-line -->
                    <h3>We design by <br /> maintaing UI/UX</h3>
                    <p>Browse our HTML5 responsive agency template below. Quisq <br /> ue lorem tortor fringilla sed,vestibulum id, eleifend justo  bib <br /> endum sapien massa ac turpis faucibus.</p>
                    <a href="#" class="view-more">View Portfolio</a>
                </div><!-- /.feature-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 pull-right text-right">
                <div class="img-box gradient-two">
                    <div class="inner">
                        <img src="/bitrix/templates/.default/img/features-1-2.jpg" alt="Awesome Image"/>
                    </div><!-- /.inner -->
                </div><!-- /.img-box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                <div class="feature-content">
                    <div class="tag-line">Quality of services</div><!-- /.tag-line -->
                    <h3>We develop with <br /> no coding issues</h3>
                    <p>Browse our HTML5 responsive agency template below. Quisq <br /> ue lorem tortor fringilla sed,vestibulum id, eleifend justo  bib <br /> endum sapien massa ac turpis faucibus.</p>
                    <a href="#" class="view-more style-two">Check pricing</a>
                </div><!-- /.feature-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.feature-style-two -->

<section class="service-style-one sec-pad" id="services">
    <div class="container">
        <div class="sec-title text-center">
            <h3>Our awesome services</h3>
            <p>Browse our HTML5 responsive agency template below. Quisq <br /> ue lorem tortor fringilla sed,vestibulum id, eleifend justo  bib <br /> endum sapien massa ac turpis faucibus.</p>
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/service-bg-1.jpg" alt="" />
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <i class="flaticon-layers"></i>
                                    <h3>Designing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.col-md-3 col-sm-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/service-bg-1.jpg" alt="" />
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <i class="flaticon-gear"></i>
                                    <h3>Developing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.col-md-3 col-sm-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/service-bg-1.jpg" alt="" />
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <i class="flaticon-objective"></i>
                                    <h3>SEO optimization</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.col-md-3 col-sm-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/service-bg-1.jpg" alt="" />
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <i class="flaticon-computer"></i>
                                    <h3>Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.col-md-3 col-sm-6 col-xs-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-style-one sec-pad -->

<section class="team-style-one">
    <div class="sec-title text-center">
        <span>Group members</span>
        <h3>Expert team member</h3>
    </div><!-- /.sec-title -->
    <div class="team-member-img-box">
        <div class="container-fluid">
            <!--Custom-Pager-->
            <div class="team-pager clearfix" id="team-pager">
                <a href="#" class="pager-item active" data-slide-index="0">
                    <div class="team-thumb"><img src="/bitrix/templates/.default/img/team-1-1.png" alt="" title=""></div>
                </a>
                <a href="#" class="pager-item" data-slide-index="1">
                    <div class="team-thumb"><img src="/bitrix/templates/.default/img/team-1-2.png" alt="" title=""></div>
                </a>
                <a href="#" class="pager-item" data-slide-index="2">
                    <div class="team-thumb"><img src="/bitrix/templates/.default/img/team-1-3.png" alt="" title=""></div>
                </a>
                <a href="#" class="pager-item" data-slide-index="3">
                    <div class="team-thumb"><img src="/bitrix/templates/.default/img/team-1-4.png" alt="" title=""></div>
                </a>
                <a href="#" class="pager-item" data-slide-index="4">
                    <div class="team-thumb"><img src="/bitrix/templates/.default/img/team-1-5.png" alt="" title=""></div>
                </a>
            </div>
        </div><!-- /.container-fluid -->
    </div><!-- /.team-member-img-box -->
    <div class="team-member-content-box">
        <div class="container">
            <!--Slider-->
            <ul class="slider bxslider">
                <li class="slide-item"><div class="slide-text">
                        <h4>Karena Schuyler</h4>
                        <span>Managing Director</span>
                        <div class="progress-box">
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>HTML</h4>
                                    <span>50%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 50%;background: #79CD1C;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>CSS</h4>
                                    <span>90%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 90%;background: #319BE9;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>PHP</h4>
                                    <span>75%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 75%;background: #19C9D0;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                        </div><!-- /.progress-box -->
                        <div class="social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-google-plus-g"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.social -->
                    </div></li>
                <li class="slide-item"><div class="slide-text">
                        <h4>Roselee Breitenbach</h4>
                        <span>Managing Director</span>
                        <div class="progress-box">
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>HTML</h4>
                                    <span>50%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 50%;background: #79CD1C;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>CSS</h4>
                                    <span>90%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 90%;background: #319BE9;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>PHP</h4>
                                    <span>75%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 75%;background: #19C9D0;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                        </div><!-- /.progress-box -->
                        <div class="social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-google-plus-g"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.social -->
                    </div></li>
                <li class="slide-item"><div class="slide-text">
                        <h4>Johnson Salzberg</h4>
                        <span>Managing Director</span>
                        <div class="progress-box">
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>HTML</h4>
                                    <span>50%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 50%;background: #79CD1C;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>CSS</h4>
                                    <span>90%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 90%;background: #319BE9;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>PHP</h4>
                                    <span>75%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 75%;background: #19C9D0;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                        </div><!-- /.progress-box -->
                        <div class="social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-google-plus-g"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.social -->
                    </div></li>
                <li class="slide-item"><div class="slide-text">
                        <h4>Jutta Kolasinski</h4>
                        <span>Managing Director</span>
                        <div class="progress-box">
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>HTML</h4>
                                    <span>50%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 50%;background: #79CD1C;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>CSS</h4>
                                    <span>90%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 90%;background: #319BE9;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>PHP</h4>
                                    <span>75%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 75%;background: #19C9D0;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                        </div><!-- /.progress-box -->
                        <div class="social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-google-plus-g"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.social -->
                    </div></li>
                <li class="slide-item"><div class="slide-text">
                        <h4>Emery Otuafi</h4>
                        <span>Managing Director</span>
                        <div class="progress-box">
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>HTML</h4>
                                    <span>50%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 50%;background: #79CD1C;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>CSS</h4>
                                    <span>90%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 90%;background: #319BE9;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                            <div class="single-progress">
                                <div class="top clearfix">
                                    <h4>PHP</h4>
                                    <span>75%</span>
                                </div><!-- /.top -->
                                <div class="progress-scale">
                                    <div class="inner pogress-wow slideInLeft" style="width: 75%;background: #19C9D0;"></div><!-- /.inner -->
                                </div><!-- /.progress-scale -->
                            </div><!-- /.single-progress -->
                        </div><!-- /.progress-box -->
                        <div class="social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-google-plus-g"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.social -->
                    </div></li>
            </ul>
        </div><!-- /.container -->
    </div><!-- /.team-member-content-box -->
</section><!-- /.team-style-one -->

<section class="portfolio-style-one sec-pad" id="portfolio">
    <div class="container">
        <div class="sec-title text-center">
            <span>Portfolio</span>
            <h3>Some of <br /> our portfolio</h3>
        </div><!-- /.sec-title -->
        <div class="row masonary-layout">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-portfolio-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/portfolio-1-1.png" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <span>Web design</span>
                                    <a href="#"><h3>el diseño web</h3></a>
                                    <a href="/bitrix/templates/.default/img/portfolio-1-1.png" class="img-popup flaticon-long-arrow-pointing-to-the-right"></a>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-portfolio-style-one -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-portfolio-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/portfolio-1-2.png" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <span>Web design</span>
                                    <a href="#"><h3>el diseño web</h3></a>
                                    <a href="/bitrix/templates/.default/img/portfolio-1-2.png" class="img-popup flaticon-long-arrow-pointing-to-the-right"></a>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-portfolio-style-one -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-portfolio-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/portfolio-1-3.png" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <span>Web design</span>
                                    <a href="#"><h3>el diseño web</h3></a>
                                    <a href="/bitrix/templates/.default/img/portfolio-1-3.png" class="img-popup flaticon-long-arrow-pointing-to-the-right"></a>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-portfolio-style-one -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-portfolio-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/portfolio-1-4.png" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <span>Web design</span>
                                    <a href="#"><h3>el diseño web</h3></a>
                                    <a href="/bitrix/templates/.default/img/portfolio-1-4.png" class="img-popup flaticon-long-arrow-pointing-to-the-right"></a>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-portfolio-style-one -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-portfolio-style-one">
                    <div class="img-box">
                        <img src="/bitrix/templates/.default/img/portfolio-1-5.png" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <span>Web design</span>
                                    <a href="#"><h3>el diseño web</h3></a>
                                    <a href="/bitrix/templates/.default/img/portfolio-1-5.png" class="img-popup flaticon-long-arrow-pointing-to-the-right"></a>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-portfolio-style-one -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.portfolio-style-one -->

<section class="feature-style-one sec-pad pt0">
    <div class="container">
        <div class="sec-title text-center">
            <span>We have Apps</span>
            <h3>Easy to work <br /> in mobile by app</h3>
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="feature-content-wrapper">
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="flaticon-responsive"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Super responsive</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis icing elitodin pro us.</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="flaticon-gear"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Very easy to customize</h3>
                            <p>Lorem ipsum dolor sit amet.Class aptent taciti sociosqu ad litora torquent <br /> per conubia. </p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.feature-content-wrapper -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <img src="/bitrix/templates/.default/img/mobile-mock.png" class="moc-img" alt="Awesome Image"/>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="feature-content-wrapper">
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="flaticon-edit"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Clean & bug free code</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis icing elitodin pro us Class.</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="flaticon-speed"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>First loading app</h3>
                            <p>Lorem ipsum dolor sit amet. Class aptent taciti sociosq</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.feature-content-wrapper -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        <div class="btn-box text-center">
            <a href="#" class="feature-btn active">
                <span class="icon-box">
                    <i class="fab fa-apple"></i>
                </span>
                <span class="text-box">
                    <span class="labeled-text">Download from</span>
                    <span class="store-name">App Store</span>
                </span>
            </a>
            <a href="#" class="feature-btn">
                <span class="icon-box">
                    <i class="fab fa-google-play"></i>
                </span>
                <span class="text-box">
                    <span class="labeled-text">Download from</span>
                    <span class="store-name">Google play</span>
                </span>
            </a>
        </div><!-- /.btn-box -->
    </div><!-- /.container -->
</section><!-- /.feature-style-one -->

<section class="funfact-style-one sec-pad">
    <div class="container">
        <span class="tag-line">Our Progress</span><!-- /.tag-line -->
        <h3>Our many years of experience and the <br /> succeed are the main reasons to <br /> choice us.</h3>
        <div class="single-fun-fact">
            <div class="icon-box">
                <i class="flaticon-network"></i>
            </div><!-- /.icon-box -->
            <div class="text-box">
                <h3><span class="timer" data-from="0" data-to="2470" data-speed="3000" data-refresh-interval="50"></span></h3>
                <p>Expert team</p>
            </div><!-- /.text-box -->
        </div><!-- /.single-fun-fact -->
        <div class="single-fun-fact">
            <div class="icon-box">
                <i class="flaticon-objective"></i>
            </div><!-- /.icon-box -->
            <div class="text-box">
                <h3><span class="timer" data-from="0" data-to="1521" data-speed="3000" data-refresh-interval="50"></span></h3>
                <p>Completed projects</p>
            </div><!-- /.text-box -->
        </div><!-- /.single-fun-fact -->
        <div class="single-fun-fact">
            <div class="icon-box">
                <i class="flaticon-happiness"></i>
            </div><!-- /.icon-box -->
            <div class="text-box">
                <h3><span class="timer" data-from="0" data-to="1250" data-speed="3000" data-refresh-interval="50"></span></h3>
                <p>Happy customers</p>
            </div><!-- /.text-box -->
        </div><!-- /.single-fun-fact -->
    </div><!-- /.container -->
</section><!-- /.funfact-style-one -->


<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/pricing-section.php"
    )
);?>

<section class="video-box-style-one">
    <div class="container">
        <div class="tag-line">Quality of services</div><!-- /.tag-line -->
        <h3>We design by <br />maintaing UI/UX</h3>
        <a href="//www.youtube.com/watch?v=M0DPqqp_kJQ" class="flaticon-play-button video-popup hvr-pulse"></a>
    </div><!-- /.container -->
</section><!-- /.video-box-style-one -->

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/news-of-us.php"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/testimonials-title.php"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/testimonials-carousel.php"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/brands_carousel.php"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.feedback",
    "contact_form",
    Array(
        "EMAIL_TO" => "evgenylebedevv@gmail.com",
        "EVENT_MESSAGE_ID" => array("7"),
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "REQUIRED_FIELDS" => array("NAME","EMAIL","MESSAGE"),
        "USE_CAPTCHA" => "Y"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/map.php"
    )
);?>