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
$this->addExternalCss($this->GetFolder().'/css/owl.carousel.min.css');
$this->addExternalCss($this->GetFolder().'/css/owl.theme.default.min.css');
$this->addExternalJs($this->GetFolder().'/js/owl.carousel.min.js');
?>
<div class="owl-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="event-slide">
		<div class="event-slide-left">
			<h2 class="event-slide-title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h2><br />
			<p class="event-slide-text"><?echo $arItem["PREVIEW_TEXT"];?></p>
			<br>
			<button class="event-slide-btn"><a href="<?echo $arItem["CODE"]?>">Узнать больше</a></button>
		</div>
		<div class="event-slide-right">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
		</div>
	</div>
<?endforeach;?>
</div>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
	  nav:true,
	  dots:true,
	  items:1
  });
});
</script>