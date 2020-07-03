<?
  if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
  global $APPLICATION;
  $aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
  "IS_SEF" => "Y",
  "SEF_BASE_URL" => "/deposites/",
  "SECTION_PAGE_URL" => "#SECTION_ID#/",
  "DETAIL_PAGE_URL" => "#SECTION_ID#/#ELEMENT_ID#.html",
  "IBLOCK_TYPE" => "company",
  "IBLOCK_ID" => "13",
  "DEPTH_LEVEL" => "4",
  "CACHE_TYPE" => "A",
  "CACHE_TIME" => "36000000"
  ),
false
);
  $aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
  
if(CModule::IncludeModule("iblock"))
{
    $IBLOCK_ID = "13";
    $arOrder = Array("SORT"=>"ASC");
    $arSelect = Array();
    $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList($arOrder, $arFilter, false, $arSelect);

    $aMenuLinksExt = array();
    while($arFields = $res->GetNext())
    { 
        $aMenuLinksExt[] = Array(
            $arFields['NAME'],
            $arFields['DETAIL_PAGE_URL'],
            Array(),
            Array(),
            ""
        );
    }

}
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt); 
?>