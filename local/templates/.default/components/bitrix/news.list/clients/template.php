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
	$arItemProperties = $arItem["PROPERTIES_MOD"];
		
	echo $openTagP;
	echo $name . $arItemProperties["COMPLETE_NAME"] . $newLine; 
	echo $phone . $arItemProperties["PHONE"] . $newLine; 
	echo $address . $city . $arItemProperties["CITY"] . ", "; 
	echo $street . $arItemProperties["STREET"] . ", ";
	echo $building . $arItemProperties["BUILDING"]. ", ";
	echo $flat . $arItemProperties["FLAT"] . $newLine;
	echo $closeTagP;
}; 

echo $closeTagDiv;

