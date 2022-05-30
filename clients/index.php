<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Клиенты");
?><?$APPLICATION->IncludeComponent("bitrix:news.list", "clients", array(
	"IBLOCK_TYPE" => "clients",
	"IBLOCK_ID" => "40",
	"PROPERTY_CODE" => array(
		"COMPLETE_NAME",
		"PHONE",
		""
	),
	
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>