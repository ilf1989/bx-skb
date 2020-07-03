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
		<h1>Денежные переводы</h1>
		<p>Быстрый способ перевести деньги без открытия счетов за 15 минут. Просто приходите в один из офисов СКБ-банка с паспортом</p>
	</div>
	<div class="service-preview-right">
		<img src="<?=CFile::GetPath($arResult["PROPERTIES"]["AD_IMAGE"]["VALUE"])?>">
	</div>
</div>
<div class="paysystem-block">
	<div class="paysystem-legend">
		<div>Система</div>
		<div>Куда перевод</div>
		<div>Комиссия</div>
		<div>Кому перевод</div>
		<div>Скорость</div>
	</div>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<pre style="display:none;"><?print_r($arItem);?></pre>
	<div class="paysystem-item">
		<div class="paysystem-pic"><img src="<?=CFile::GetPath($arItem["PROPERTIES"]["PAY_PIC"]["VALUE"])?>"></div>
		<div class="paysystem-where"><?=$arItem["PROPERTIES"]["PAY_WHERE"]["VALUE"]?></div>
		<div class="paysystem-cost"><?=$arItem["PROPERTIES"]["PAY_COST"]["VALUE"]?></div>
		<div class="paysystem-who"><?=html_entity_decode($arItem["PROPERTIES"]["PAY_WHO"]["VALUE"])?></div>
		<div class="paysystem-speed"><?=$arItem["PROPERTIES"]["PAY_SPEED"]["VALUE"]?></div>
	</div>
<?endforeach;?>
</div>

<div class="service-docs-tab">
	<h2>Тарифы и документы</h2>

</div>

<div class="service-phone-block">

</div>