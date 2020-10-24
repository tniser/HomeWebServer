<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("БЦ Старт Парк - 2 этаж");
?> 
<div class="window"> 		 
  <div class="main_menu"> 			<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top",
	Array(
		"ROOT_MENU_TYPE" => "leftfirst",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	)
);?> 		</div>
 		 
  <div class="page_info"> 
    <h1>Аренда</h1>
   			 
    <div id="slides"> 				 
      <div class="slides_container"> 					 
        <p>Аренда коммерческих помещений, складов, 
          <br />
         производственных помещений</p>
       				</div>
     			</div>
   		</div>
 	</div>
 	 
<div class="b_main"> 		 
  <div class="b_wrapper"> 			 
    <div class="left_menu"> 				 
      <ul>				 				<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top",
	Array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	)
);?> 			</ul>
     			</div>
   			 
    <div class="w_content"> 				 
      <div class="breadcrumbs"> 					<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	".default",
	Array(
		"START_FROM" => "1",
		"PATH" => "",
		"SITE_ID" => SITE_ID
	)
);?> 				</div>
     				 				 
      <h2>План 2 этажа</h2>
<img src="/upload/medialibrary/8b4/8b4e09ba6459e221f62c89ec0e350957.png" title="Второй этаж Старт-Парк" border="0" alt="Второй этаж Старт-Парк" width="797" height="537"  />
     			</div>
   			 
    <div class="clear"></div>
   		</div>
 	</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>