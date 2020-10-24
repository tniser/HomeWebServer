<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("БЦ Старт Парк - 1 этаж");
?> 
<div class="window"> 		 
  <div class="main_menu"> <?$APPLICATION->IncludeComponent(
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
     
      <h2>План 1 этажа</h2>
     <img src="/upload/medialibrary/f31/f31eb67a19f10458f6e6b1dd51bb63c9.png" title="Первый этаж Старт-Парк" border="0" alt="Первый этаж Старт-Парк" width="792" height="537"  /> </div>

<!--      <img src="/upload/medialibrary/f31/f31eb67a19f10458f6e6b1dd51bb63c9.png" usemap="#image-map">

<map name="image-map">
    <area target="_self" alt="title" title="title" href="1-03" coords="139,234,6,5" shape="rect">
    <area target="_blank" alt="title2" title="title2" href="link-10-7" coords="151,302,255,474" shape="rect">
</map> -->
   			 
    <div class="clear"></div>
   		</div>
 	</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>