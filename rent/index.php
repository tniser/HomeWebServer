<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аренда");
?>
	<div class='window'>
		<div class='main_menu'>
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
			"ROOT_MENU_TYPE" => "leftfirst",
			"MENU_CACHE_TYPE" => "Y",
			"MENU_CACHE_TIME" => "36000000",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"MENU_CACHE_GET_VARS" => array(
			),
			"MAX_LEVEL" => "1",
			"CHILD_MENU_TYPE" => "",
			"USE_EXT" => "N",
			"ALLOW_MULTI_SELECT" => "N"
			),
			false
		);?></div>
		<div class='page_info'>
			<h1>Аренда</h1>
			<div id="slides">
				<div class="slides_container">
					<p>Аренда коммерческих помещений, складов,<br/>производственных помещений</p>
				</div>
			</div>
		</div>
	</div>
	<div class='b_main'>
		<div class='b_wrapper'>
			<div class='left_menu'>
				<ul>				
				<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
				"ROOT_MENU_TYPE" => "left",
				"MENU_CACHE_TYPE" => "Y",
				"MENU_CACHE_TIME" => "36000000",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MAX_LEVEL" => "1",
				"CHILD_MENU_TYPE" => "left",
				"USE_EXT" => "N",
				"ALLOW_MULTI_SELECT" => "N"
				),
				false
			);?>
			</ul>
			</div>
			<div class='w_content'>
				<div class='breadcrumbs'>
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
					"START_FROM" => "1",
					"PATH" => "",
					"SITE_ID" => SITE_ID
					),
					false
				);?>
				</div>
				<h2>Аренда</h2>
				<?			
				$APPLICATION->IncludeFile(
									SITE_DIR."include/rent/text.php",
									Array(),
									Array("MODE"=>"html")
								);?>
				</div>
			<div class='clear'></div>
		</div>
	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>