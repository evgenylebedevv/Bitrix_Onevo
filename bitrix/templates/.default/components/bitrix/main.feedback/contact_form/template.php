<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<section class="contact-style-one">
    <div class="container">
        <div class="row">

            <? if (!empty($arResult["ERROR_MESSAGE"])) {
                foreach ($arResult["ERROR_MESSAGE"] as $v)
                    ShowError($v);
            }
            if ($arResult["OK_MESSAGE"] <> '') {
                ?>
                <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
            }
            ?>

            <div class="col-md-6">
                <div class="contact-content">
                    <h3>60 Guild Street <br/> N9 5HD, London, UK</h3>
                    <div class="contact-info">
                        <p><span>Email:</span> onevoinfo@gmail.com <br/> <span>Phone:</span> (258) 1254 6325</p>
                    </div><!-- /.contact-info -->
                    <p>Having trouble? Find the answer to your query <br/> here. Don’t hasitate to contact us!</p>
                </div>
            </div>

            <div class="col-md-6">

                <form action="<?= POST_FORM_ACTION_URI ?>" method="POST" class="contact-form">
                    <?= bitrix_sessid_post() ?>

                    <input type="text" placeholder="Ваше имя" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
                    <input type="text" placeholder="Your mail address" name="user_email"
                           value="<?= $arResult["AUTHOR_EMAIL"] ?>">
                    <textarea name="MESSAGE" placeholder="Your message" rows="5"
                              cols="40"><?= $arResult["MESSAGE"] ?></textarea>
                    <input type="text" name="SUBJECT" placeholder="Subject" value="<?= $arResult["SUBJECT_MESSAGE"] ?>">
                    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                    <input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">

                </form>
            </div>
        </div>
    </div>
</section>