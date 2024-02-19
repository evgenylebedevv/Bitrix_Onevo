<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое свойство");
$APPLICATION->SetPageProperty("title", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>Text here....<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>