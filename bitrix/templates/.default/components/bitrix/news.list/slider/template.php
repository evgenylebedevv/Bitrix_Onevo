<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="item active slide-1" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>); background-position: center center;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="box valign-middle">
                            <div class="content text-center">
                                <h3 data-animation="animated fadeInUp"><?echo $arItem["NAME"]?><br /> <span><?=$arItem["PROPERTIES"]["SUBTITLE_FIRST_WORD"]["VALUE"]?></span> <?=$arItem["PROPERTIES"]["SUBTITLE_SECOND_WORD"]["VALUE"]?></h3>
                                <p data-animation="animated fadeInDown">
                                    <?echo $arItem["PREVIEW_TEXT"];?>
                                </p>
                                <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="banner-btn" data-animation="animated fadeInDown"><?=$arItem["PROPERTIES"]["BUTTON_ONE"]["VALUE"]?></a>
                                <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="banner-btn style-two" data-animation="animated fadeInDown"><?=$arItem["PROPERTIES"]["BUTTON_TWO"]["VALUE"]?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</div>
