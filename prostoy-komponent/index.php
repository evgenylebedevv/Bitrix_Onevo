<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("простой компонент");
?><?$APPLICATION->IncludeComponent(
	"exam-2:simplecomp.exam.71",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>