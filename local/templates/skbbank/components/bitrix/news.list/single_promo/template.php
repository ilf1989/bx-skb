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
<div class="main-promo-section">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="main-promo">
		<div class="main-promo-left">
			<h2 class="main-promo-title"><?echo $arItem["NAME"]?></h2><br />
			<p class="main-promo-text"><?=$arItem["PREVIEW_TEXT"];?></p>
			<br>
			<button class="main-promo-btn"><a href="<?echo $arItem["CODE"]?>">Узнать больше</a></button>
		</div>
		<div class="main-promo-right">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
		</div>
	</div>
<?endforeach;?>
</div>