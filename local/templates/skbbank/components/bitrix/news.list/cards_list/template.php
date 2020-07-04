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
	<div class="credit-list-item" style="background: #f2f2f2 url('/local/templates/skbbank/components/bitrix/news.list/cards_slider/images/card_back.svg') 100% 100% no-repeat;">
		<div class="card-slide-left">
			<h2 class="card-slide-title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h2><br />
			<p class="card-slide-text"><?=$arItem["PREVIEW_TEXT"];?></p>
			<br>
			<div class="card-slide-offer-block">
				<div class="card-slide-offer">
					<p><?=$arItem["PROPERTIES"]["OFFER_1"]["VALUE"]?></p>
					<p><?=$arItem["PROPERTIES"]["TEXT_1"]["VALUE"]?></p>
				</div>
				<div class="card-slide-offer">
					<p><?=$arItem["PROPERTIES"]["OFFER_2"]["VALUE"]?></p>
					<p><?=$arItem["PROPERTIES"]["TEXT_2"]["VALUE"]?></p>
				</div>
			</div>
			<button class="card-slide-btn">Оформить карту</button>
		</div>
		<div class="card-slide-right">
			<img class="card-slide-image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
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