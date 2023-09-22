<?
// define("DEV_PAGE", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Групповая заявка на конкурс «Твой EDTECH». Заполните форму регистрации и получите возможность выиграть новенький iMac.");
$APPLICATION->SetPageProperty("title", "Групповая регистрация на конкурс «Твой EDTECH»");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"EDTECH-register",
	array(
		"COMPONENT_TEMPLATE" => "EDTECH-register",
		"WEB_FORM_ID" => "5",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"USE_EXTENDED_ERRORS" => "Y",
		"SEF_MODE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"LIST_URL" => "",
		"EDIT_URL" => "",
		"SUCCESS_URL" => "",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"SEF_FOLDER" => "/tvoy-edtech/form/command/"
	),
	false
);?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
