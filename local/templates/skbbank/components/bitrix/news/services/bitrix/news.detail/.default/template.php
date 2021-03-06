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
<div class="service-preview-block">
	<div class="service-preview-left">
		<h1><?=$arResult["NAME"]?></h1>
		<p><?=$arResult["PREVIEW_TEXT"]?></p>
	</div>
	<div class="service-preview-right">
		<img src="<?=CFile::GetPath($arResult["PROPERTIES"]["AD_IMAGE"]["VALUE"])?>">
	</div>
</div>

<div class="service-advantage-title">
	<h2>Пользуйтесь услугами банка и государственных учреждений без личного присутствия</h2>
</div>

<div class="service-advantage-block">
	<?foreach ($arResult["PROPERTIES"]["AD_ITEM"]["VALUE"] as $adv): $ADV = CIBlockElement::GetByID($adv)->GetNext(); ?>
	<div>
		<img src="<?=CFile::GetPath($ADV["PREVIEW_PICTURE"])?>">
		<p><?=$ADV["NAME"]?></p>
	</div>	
	<?endforeach;?>
</div>

<div class="service-html-block">
	<?echo $arResult["DETAIL_TEXT"];?>
</div>

<?if($arResult["PROPERTIES"]["AD_DOCS"]["VALUE"]):?>
<div class="service-docs-tab">
	<h2>Тарифы и документы</h2>
	<?foreach ($arResult["PROPERTIES"]["AD_DOCS"]["VALUE"] as $doc): $DOC = CFile::GetByID($doc)->GetNext(); ?>
		<div>
			<p><?=$DOC["ORIGINAL_NAME"]?></p>
		</div>	
	<?endforeach;?>
</div>
<?endif?>

<?if($arResult["PROPERTIES"]["AD_HELP"]["VALUE"]):?>
<div class="service-help-tab">
	<?foreach ($arResult["PROPERTIES"]["AD_HELP"]["VALUE"] as $faq): $FAQ = CIBlockElement::GetByID($faq)->GetNext(); ?>
		<div>
			<p><?=$FAQ["NAME"]?></p>
		</div>	
	<?endforeach;?>
</div>
<?endif?>

<?if($arResult["PROPERTIES"]["AD_PHONE"]["VALUE"]):?>
<div class="service-phone-block">
	<?foreach ($arResult["PROPERTIES"]["AD_PHONE"]["VALUE"] as $phone): $PHONE = CIBlockElement::GetByID($phone)->GetNext(); ?>
		<div>
			<img class="phone-image" src="/include/phone.PNG">
			<p><?=$PHONE["PREVIEW_TEXT"]?></p>
		</div>	
	<?endforeach;?>
</div>
<?endif?>

<div class="service-help-menu">
	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"help",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "help",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(""),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "help",
			"USE_EXT" => "Y"
		)
	);?>
</div>