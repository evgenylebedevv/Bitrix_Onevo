<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопросы и ответы");
?><?$APPLICATION->IncludeComponent("bitrix:form.result.list", "mynew_template", Array(
	"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"EDIT_URL" => "answer.php",	// Страница редактирования результата
		"NAME_TEMPLATE" => "",
		"NEW_URL" => "ask_question.php",	// Страница добавления результата
		"NOT_SHOW_FILTER" => array(	// Коды полей которые нельзя показывать в фильтре
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(	// Коды полей которые нельзя показывать в таблице
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SHOW_ADDITIONAL" => "Y",	// Показать дополнительные поля веб-формы
		"SHOW_ANSWER_VALUE" => "N",	// Показать значение параметра ANSWER_VALUE
		"SHOW_STATUS" => "N",	// Показать текущий статус результата
		"VIEW_URL" => "",	// Страница просмотра результата
		"WEB_FORM_ID" => "1",	// ID веб-формы
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>