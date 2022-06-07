<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

use Ylab\Helpers;

$APPLICATION->SetTitle("Клиенты");
?><?$APPLICATION->IncludeComponent("bitrix:news.list", "clients", array(
	"IBLOCK_TYPE" => "clients",
//	"IBLOCK_ID" => "40",
	"IBLOCK_ID" => Helpers::getIBlockIdByCode('contacts'),
	"PROPERTY_CODE" => array(
		"COMPLETE_NAME",
		"PHONE",
		"ADDRESS"
	),
	"FIELD_CODE" => [
		'PROPERTY_ADDRESS.PROPERTY_CITY',
		'PROPERTY_ADDRESS.PROPERTY_STREET',
		'PROPERTY_ADDRESS.PROPERTY_BUILDING',
		'PROPERTY_ADDRESS.PROPERTY_FLAT',
	],
	
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>