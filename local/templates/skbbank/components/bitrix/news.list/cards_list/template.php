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
<div class="credit-list-block">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="credit-list-item">
		<div class="credit-list-left">
			<h2 class="credit-list-title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h2><br />
			<p class="credit-list-text"><?=$arItem["PREVIEW_TEXT"];?></p>
			<br>
			<div class="credit-list-offer-block">
				<div class="credit-list-offer">
					<p><?=$arItem["PROPERTIES"]["OFFER_1"]["VALUE"]?></p>
					<p><?=$arItem["PROPERTIES"]["TEXT_1"]["VALUE"]?></p>
				</div>
				<div class="credit-list-offer">
					<p><?=$arItem["PROPERTIES"]["OFFER_2"]["VALUE"]?></p>
					<p><?=$arItem["PROPERTIES"]["TEXT_2"]["VALUE"]?></p>
				</div>
			</div>
			<button class="credit-list-btn">Оформить карту</button>
		</div>
		<div class="credit-list-right">
			<img class="credit-list-image" src="<?=CFile::GetPath($arItem["PROPERTIES"]["IMAGE"]["VALUE"])?>">
		</div>
	</div>
<?endforeach;?>
</div>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
	  nav:true,
	  dots:true,
	  autoWidth:true,
	  items:1
  });
});
</script>