<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сравнение товаров");
?>
<div class="compare-list">
    <?$APPLICATION->IncludeComponent(
    "bitrix:catalog.compare.list",
    "list_bottom",
    array(
    "IBLOCK_TYPE" => "1c_catalog",
    "IBLOCK_ID" => "2",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "DETAIL_URL" => "#SECTION_CODE#",
    "COMPARE_URL" => "/catalog/compare.php",
    "NAME" => "CATALOG_COMPARE_LIST",
    "AJAX_OPTION_ADDITIONAL" => ""
    ),
    false
    );?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>