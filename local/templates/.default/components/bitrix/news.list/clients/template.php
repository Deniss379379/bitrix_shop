<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;

//localization
$name = Loc::getMessage("COMPLETE_NAME");
$phone = Loc::getMessage("PHONE");
$address = Loc::getMessage("ADDRESS");
$city = Loc::getMessage("CITY");
$street = Loc::getMessage("STREET");
$building = Loc::getMessage("BUILDING");
$flat = Loc::getMessage("FLAT");

//HTML and CSS
$newLine = "</br>";
$openTagP = "<p class = 'news-item'>";
$closeTagP = "</p>";
$openTagDiv = "<div class = 'card'>";
$closeTagDiv = "</div>";

//OUTPUT
echo $openTagDiv;
foreach ($arResult['ITEMS'] as $arItem) {
	//$arItemProperties = $arItem["PROPERTIES"];
		
	echo $openTagP;
	echo $name . $arItem['PROPERTIES']['COMPLETE_NAME']['VALUE'] . $newLine; 
	echo $phone . $arItem['PROPERTIES']['PHONE']['VALUE'] . $newLine; 
	echo $address . $city . $arItem['PROPERTY_ADDRESS_PROPERTY_CITY_VALUE'] . ", "; 
	echo $street . $arItem['PROPERTY_ADDRESS_PROPERTY_STREET_VALUE'] . ", ";
	echo $building . $arItem['PROPERTY_ADDRESS_PROPERTY_BUILDING_VALUE'] . ", ";
	echo $flat . $arItem['PROPERTY_ADDRESS_PROPERTY_FLAT_VALUE'] . $newLine;
	echo $closeTagP;
}; 

echo $closeTagDiv;

