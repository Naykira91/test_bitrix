<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.compare.result",
	"",
	Array(
		"ACTION_VARIABLE" => "action",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"ELEMENT_SORT_FIELD" => "name",
		"ELEMENT_SORT_FIELD_BOX" => "name",
		"ELEMENT_SORT_FIELD_BOX2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER_BOX" => "asc",
		"ELEMENT_SORT_ORDER_BOX2" => "desc",
		"FIELD_CODE" => array(),
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"NAME" => "CATALOG_COMPARE_LIST",
		"OFFERS_FIELD_CODE" => array("","NAME",""),
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_PRICE_COUNT" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.compare.list",
	"",
	Array(
		"ACTION_VARIABLE" => "action",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"COMPARE_URL" => "compare.php",
		"DETAIL_URL" => "",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"NAME" => "CATALOG_COMPARE_LIST",
		"POSITION" => "top left",
		"POSITION_FIXED" => "Y",
		"PRODUCT_ID_VARIABLE" => "id"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>