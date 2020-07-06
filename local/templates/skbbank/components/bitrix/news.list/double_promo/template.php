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
<div class="double-promo">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?if($arItem["PROPERTIES"]["SHOW_ON_INDEX"]["VALUE"]):?>
	<pre style="display:none;"><?print_r($arItem)?></pre>
		<div class="double-promo-block" style="background: #f2f2f2 url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>') 100% 100% no-repeat;">
			<div class="double-promo-info">
				<h2 class="double-promo-title"><?=$arItem["NAME"]?></h2>
				<br>
				<p class="double-promo-text"><?=$arItem["PROPERTIES"]["DESC"]["VALUE"];?></p>
				<br>
				<button class="double-promo-btn"><a href="<?=$arItem["PROPERTIES"]["BTN_LINK"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["BTN_TEXT"]["VALUE"];?></a></button>
			</div>
		</div>
	<?endif;?>
<?endforeach;?>
</div>