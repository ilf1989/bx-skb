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
// setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian'); 
?>
<div class="main-news">
	<div class="main-news-top">
		<h2>Новости</h2>
		<p class="main-news-all"><a href="#">Смотреть всё ></a></p>
	</div>
	<div class="main-news-row">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="main-news-item">
			<p class="main-news-date"><?=date("d F", strtotime($arItem["ACTIVE_FROM"]))?></p>
			<p class="main-news-title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></p>
		</div>
		<?endforeach;?>
	</div>
</div>