<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="/local/templates/skbbank/images/logo/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/local/templates/skbbank/images/logo/favicon-32x32.png">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />
	<?$APPLICATION->ShowHead();?>
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />		
</head>
<body>
<?$APPLICATION->ShowPanel();?>
		<div class="body-container">
			<div class="header">
					<div class="logo">
						  <a href="/">
							<svg viewBox="0 0 179 33">
							  <g>
								<path d="M16.1119 22.3294C14.8843 24.2357 12.7408 25.4285 10.0854 25.4285C5.91603 25.4285 3.17154 22.4069 3.17154 18.2932C3.17154 14.0118 5.90325 11.1579 10.0854 11.1579C12.3093 11.1579 14.226 12.0674 15.5157 13.5453L17.5827 11.4326C15.769 9.45235 13.131 8.24207 10.0854 8.24207C4.19402 8.24207 0 12.2622 0 18.2932C0 24.0878 4.21228 28.3444 10.0854 28.3444C13.5839 28.3444 16.4511 26.8738 18.2228 24.4867L16.1119 22.3294Z" fill="#038C73"></path>
								<path d="M174.454 27.942L166.928 19.7339H163.427C163.427 24.361 163.427 27.0969 163.467 27.942H160.248C160.288 26.0107 160.288 22.7919 160.288 18.2854C160.288 13.7789 160.288 10.5599 160.248 8.62854H163.467C163.427 10.2782 163.427 12.974 163.427 16.7562H167.009L174.293 8.62854H178.317L169.906 18.0035L178.961 27.942H174.454Z" fill="#F65E64"></path>
								<path d="M35.6319 27.9499L28.1062 19.7418H24.6048C24.6048 24.3689 24.6048 27.1048 24.6451 27.9499H21.426C21.466 26.0186 21.466 22.7996 21.466 18.2933C21.466 13.7869 21.466 10.5678 21.426 8.63647H24.6451C24.6048 10.2862 24.6048 12.9819 24.6048 16.7642H28.1866L35.4709 8.63647H39.4957L31.0845 18.0115L40.1392 27.9499H35.6319Z" fill="#038C73"></path>
								<path d="M51.4298 8.98006C48.7899 8.87873 46.3747 9.83481 44.5715 11.4571C44.9118 8.69352 46.8199 6.40489 49.3731 5.56593C52.5398 4.52511 56.6426 6.05545 60.7327 2.31833L58.4138 0C55.4383 2.81399 51.8065 1.6005 48.9557 2.36813C44.6166 3.53674 41.4078 7.5042 41.3632 12.2419H41.3607V18.6585C41.3607 24.0078 45.6982 28.3442 51.049 28.3442C56.5239 28.3442 60.9381 23.8033 60.7292 18.2826C60.5395 13.2635 56.4499 9.17258 51.4298 8.98006ZM51.5814 25.1694C47.5607 25.4898 44.216 22.146 44.5365 18.1259C44.7885 14.9625 47.3518 12.3998 50.516 12.1476C54.5367 11.8276 57.8809 15.1712 57.5609 19.1911C57.3089 22.3546 54.7456 24.9172 51.5814 25.1694Z" fill="#038C73"></path>
								<path d="M104.889 8.98006C102.249 8.87873 99.8345 9.83481 98.0308 11.4571C98.3715 8.69352 100.279 6.40489 102.832 5.56593C105.999 4.52511 110.102 6.05545 114.192 2.31833L111.873 0C108.898 2.81399 105.266 1.6005 102.416 2.36813C98.0759 3.53674 94.8671 7.5042 94.8225 12.2419H94.8204V18.6585C94.8204 24.0078 99.1575 28.3442 104.508 28.3442C109.983 28.3442 114.397 23.8033 114.189 18.2826C113.999 13.2635 109.909 9.17258 104.889 8.98006ZM105.041 25.1694C101.02 25.4898 97.6753 22.146 97.9958 18.1259C98.2478 14.9625 100.811 12.3998 103.975 12.1476C107.996 11.8276 111.341 15.1712 111.02 19.1911C110.768 22.3546 108.205 24.9172 105.041 25.1694Z" fill="#F65E64"></path>
								<path d="M152.472 27.942V19.5728H142.331V27.942H139.111V8.62854H142.331V16.5955H152.472V8.62854H155.692V27.942H152.472Z" fill="#F65E64"></path>
								<path d="M134.873 24.6774C134.482 25.321 133.92 25.6512 133.264 25.4855C132.643 25.3285 132.227 24.74 132.227 24.0991V14.6239C132.227 10.9221 129.047 8.22632 124.741 8.22632C122.077 8.22632 119.858 9.09965 118.499 10.5039L120.652 12.6562C121.358 11.7526 122.758 11.1635 124.5 11.1635C127.115 11.1635 129.007 12.8132 129.007 15.0261V16.4746C126.029 16.7967 123.937 17.0782 122.689 17.3599C118.825 18.1645 116.531 20.2166 116.531 23.3148C116.531 26.3327 118.946 28.3443 122.649 28.3443C125.265 28.3443 127.397 27.7992 129.087 25.8277C129.45 27.5578 131.14 28.3443 133.273 28.3443C134.714 28.3443 135.981 27.7147 136.867 26.6713L134.873 24.6774ZM129.007 22.2598C127.599 24.1908 125.385 25.358 123.011 25.358C121.119 25.358 119.872 24.5219 119.872 22.9528C119.872 21.6651 120.878 20.7085 122.608 20.2257C123.937 19.8637 126.069 19.7117 129.007 19.3497V22.2598Z" fill="#F65E64"></path>
								<path d="M81.8663 15.7485L74.6952 7.78821L72.3033 9.9423L79.7001 18.153L81.8663 15.7485Z" fill="#038C73"></path>
								<path d="M81.8664 15.7485L72.2466 26.4264L74.6385 28.5805L84.0307 18.151L81.8664 15.7485Z" fill="#F65E64"></path>
							  </g>
							</svg>
						  </a>
					</div>			
				<div class="header-info">
					<div class="top-menu">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"top", 
						array(
							"ROOT_MENU_TYPE" => "top",
							"MENU_CACHE_TYPE" => "Y",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"COMPONENT_TEMPLATE" => "top",
							"DELAY" => "N"
						),
						false
					);?>
					</div>
					<div class="contacts">
						<div class="phone">
							<p>8(800)900-80-70</p>
						</div>
						<div class="address">
							<a href="#">Офисы и банкоматы</a>
						</div>
						<div class="choose-city">
							<a href="#">Москва</a>
						</div>
						<div class="search">
						<?$APPLICATION->IncludeComponent("bitrix:search.form", "flat", array(
							"PAGE" => "#SITE_DIR#search/index.php"
							),
							false
						);?>
						</div>		
					</div>
				</div>				
				<div class="header-crumbs">
					<div class="breadcrumbs">
						<?if($APPLICATION->GetCurPage(false)==SITE_DIR):?>
							<div class="breadcrumbs-menu">
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"crumbs", 
									array(
										"ROOT_MENU_TYPE" => "leftfirst",
										"MENU_CACHE_TYPE" => "Y",
										"MENU_CACHE_TIME" => "36000000",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MAX_LEVEL" => "1",
										"CHILD_MENU_TYPE" => "left",
										"USE_EXT" => "N",
										"ALLOW_MULTI_SELECT" => "N",
										"COMPONENT_TEMPLATE" => "crumbs",
										"DELAY" => "N"
									),
									false
								);?>
							</div>
						<?else:?>
							<div class="breadcrumb">
								<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
								"START_FROM" => "1",
								"PATH" => "",
								"SITE_ID" => SITE_ID
								),
								false
							);?>
							</div>					
						<?endif?>				
					</div>
					<div class="header-links">
						<ul>
							<li><a href="#">Частным лицам</a></li>
							<li><a href="#">Интернет-банк</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="main-content">					
							<h5><?$APPLICATION->ShowTitle(false);?></h5> 