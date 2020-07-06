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
	<div class="main-slide">	
		<div class="main-slide-left">
			<h2 class="main-slide-title"><?=$arItem["NAME"]?></h2><br />
			<p class="main-slide-text"><?=$arItem["DETAIL_TEXT"];?></p>
			<br>
			<button class="main-slide-btn"><a href="<?=$arItem["CODE"]?>"><?=$arItem["PREVIEW_TEXT"];?></a></button>
		</div>
		<div class="main-slide-right">
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