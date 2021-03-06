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
		<img src="/upload/iblock/b82/b8258ac85edf220584547e11d018b83a.png">
	</div>
</div>
<h2 class="paysystem-title">Системы платежных сервисов</h2>
<div class="paysystem-block">
	<div class="paysystem-legend">
		<div>Система</div>
		<div>Куда перевод</div>
		<div>Комиссия</div>
		<div>Кому перевод</div>
		<div>Скорость</div>
	</div>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="paysystem-item">
		<div class="paysystem-pic"><img src="<?=CFile::GetPath($arItem["PROPERTIES"]["PAY_PIC"]["VALUE"])?>"></div>
		<div class="paysystem-where"><?=$arItem["PROPERTIES"]["PAY_WHERE"]["VALUE"]?></div>
		<div class="paysystem-cost"><?=$arItem["PROPERTIES"]["PAY_COST"]["VALUE"]?></div>
		<div class="paysystem-who"><?=html_entity_decode($arItem["PROPERTIES"]["PAY_WHO"]["VALUE"])?></div>
		<div class="paysystem-speed"><?=$arItem["PROPERTIES"]["PAY_SPEED"]["VALUE"]?></div>
	</div>
<?endforeach;?>
</div>