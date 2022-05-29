<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class = "news-list">
	<?php
	 foreach ($arResult['ITEMS'] as $arItem) {
		 $address = CIBlockElement::GetByID($arItem['PROPERTIES']['ADDRESS']['VALUE'])->GetNextElement()->GetProperties();?>
		<p class ="news-item" id = "">
			имя: <?= $arItem["PROPERTIES"]['FIO']['VALUE']?> <br>
			телефон: <?= $arItem ["PROPERTIES"]["telephon"]["VALUE"]?>  <br>
			 Адрес: Город <?= $address['CITY']['VALUE'] ?> Улица <?= $address['STREET']['VALUE'] ?>
			 дом <?= $address['BUILDING']['VALUE'] ?> квартира <?= $address['FLAT']['VALUE'] ?>
		</p>
		<?php } ?>
      <?php
      
      ?>
	  
	      <?php/* while ($address = $res->GetNext()){ ?>
    <p><?= $address['CITY'] ?><b><?= $address['VALUE'] ?></b></p>
    
	<?php } */?>

	<?php 
	/*CModule::IncludeModule('iblock');
	$iBlockId = 5;
  
   $arFilter = Array("IBLOCK_ID"=>IntVal($iBlockId), "ACTIVE"=>"Y");
   $res = CIBlockElement::GetList(Array(), $arFilter, false, );
	$test = $res->GetNextElement();	
	$test2 = $test->GetProperties();
	
	var_dump($test2);
	while($ob = $res->GetNextElement())
{
   $arFields = $ob->GetProperties();
echo '<pre>';
print_r($arFields);

echo '</pre>';}
*/?>


</div>
