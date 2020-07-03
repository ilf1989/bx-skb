<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<h2>Чем ещё помочь</h2>

<?if (!empty($arResult)):?>
<ul class="help-menu">
<?foreach($arResult as $arItem):?>
	<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?endforeach?>
</ul>		
<?endif?>