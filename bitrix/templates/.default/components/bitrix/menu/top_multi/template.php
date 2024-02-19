<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <header class="header home-page-one">
        <nav class="navbar navbar-default header-navigation stricky">
            <div class="container clearfix">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        <img src="/bitrix/templates/.default/img/logo-1-1.png" alt="Awesome Image" class="default-logo" />
                    </a>
                </div>
                <div class="collapse navbar-collapse main-navigation mainmenu one-page-scroll-menu" id="main-nav-bar">
                    <ul class="nav navbar-nav navigation-box">
<? $previousLevel = 0;

foreach ($arResult as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

        <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
            <li class="scrollToLink">
                <a href="<?= $arItem["LINK"] ?>"><span><?= $arItem["TEXT"] ?></span></a>
            <ul>
        <? else: ?>
            <li class="scrollToLink">
                <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
            <ul>

    <? endif ?>

    <? else:?>

        <? if ($arItem["PERMISSION"] > "D"):?>

            <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="scrollToLink">
                    <a href="<?= $arItem["LINK"] ?>"><span><?= $arItem["TEXT"] ?></span></a>
                </li>
            <? else:?>
                <li class="scrollToLink">
                    <a href="<?= $arItem["LINK"] ?>"><span><?= $arItem["TEXT"] ?></span></a>
                </li>
            <? endif ?>

        <? endif ?>

    <? endif ?>

    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<? endforeach ?>

    <? if ($previousLevel > 1)://close last item tags?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>

                </ul>
            </div>
                <div class="right-side-box">
                    <a href="#" class="sidemenu-btn flaticon-menu side-nav-opener"></a>
                </div>
       </div>
    </nav>
</header>
<? endif ?>