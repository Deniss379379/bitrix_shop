<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

foreach ($arResult['ITEMS'] as &$arItem) {
      $address = CIBlockElement::GetByID($arItem['PROPERTIES']['ADDRESS']['VALUE'])->GetNextElement()->GetProperties();

      $arItem ["PROPERTIES_MOD"]["COMPLETE_NAME"] = $arItem ["PROPERTIES"]["COMPLETE_NAME"]["VALUE"];
      $arItem ["PROPERTIES_MOD"]["PHONE"] =  $arItem ["PROPERTIES"]["PHONE"]["VALUE"];
      $arItem ["PROPERTIES_MOD"]["CITY"] =  $address['CITY']['VALUE'];
      $arItem ["PROPERTIES_MOD"]["STREET"] =  $address['STREET']['VALUE'];
      $arItem ["PROPERTIES_MOD"]["BUILDING"] =  $address['BUILDING']['VALUE'];
      $arItem ["PROPERTIES_MOD"]["FLAT"] =  $address['FLAT']['VALUE'];
}





