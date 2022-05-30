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
use Bitrix\Main\Localization\Loc;

?>
<?php
$test = Loc::getMessage("PHONE");

?>
<div class = "news-list">
	<?php
	 foreach ($arResult['ITEMS'] as $arItem) {
?>
		<p class ="news-item">
			имя: <?= $arItem["PROPERTIES_MOD"]['COMPLETE_NAME']?> <br>
			<?php echo $test ?>: <?= $arItem ["PROPERTIES_MOD"]["PHONE"]?>  <br>
			 Адрес: Город <?=  $arItem ["PROPERTIES_MOD"]["CITY"] ?> Улица <?=  $arItem ["PROPERTIES_MOD"]["STREET"] ?>
			 дом<?=  $arItem ["PROPERTIES_MOD"]["BUILDING"] ?> квартира <?= $arItem ["PROPERTIES_MOD"]["FLAT"] ?>
		</p>
		<?php } ?>

</div>
