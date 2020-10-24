<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("БЦ Старт Парк - админка");
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
);?>    </div>
     
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
      <ul>                <?$APPLICATION->IncludeComponent(
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
);?>      </ul>
          </div>
         
    <div class="w_content">          
      <div class="breadcrumbs">           <?$APPLICATION->IncludeComponent(
  "bitrix:breadcrumb",
  ".default",
  Array(
    "START_FROM" => "1",
    "PATH" => "",
    "SITE_ID" => SITE_ID
  )
);?>        </div>
     <!-- <script type="text/javascript" src="./jquery.maphilight.js"></script> -->
      <h2>Административный раздел</h2>
<?

if(isset($_POST['1_03'])){
  $bron_file = '../bron_file.txt';
  file_put_contents($bron_file, json_encode($_POST));
  echo "<b style='color:green;'>Данные успешно сохранены!</b>";
}

$bron_file = '../bron_file.txt';
$info=file_get_contents($bron_file);
$info=json_decode($info, true);

// var_dump($info);

foreach ($variable as $key => $value) {
	if($value == 0){

	}
	if ($value == 1){
		
	}
}


?>
<style type="text/css">
	.pom{
		display: inline-block;
	    border: 1px solid black;
	    box-shadow: 1px 1px 3px 0px black;
	    margin: 2px;
	    padding: 4px;
	}
	.pom:hover{
		box-shadow: 2px 2px 8px 0px black;
	}
	.pom b {
		text-align: center;
		display: block;
	}
  .b_footer{
    position: static !important;
  }
</style>
<form name="test" method="post" action="./admin.php">
	<p><b>Укажите свободные помещения:</b><Br>
		<!-- <input type="radio" name="browser" value="ie"> Internet Explorer<Br> -->
		<div class="pom">
			<b>1_03</b>
			<input type="radio" name="1_03" <? if($info['1_03'] == 1) { echo "checked";} ?> value="1">Занято<Br>
			<input type="radio" name="1_03" <? if($info['1_03'] == 0) { echo "checked";} ?> value="0">Не занято<Br>
		</div>
		<div class="pom">
			<b>1_04</b>
			<input type="radio" name="1_04" <? if($info['1_04'] == 1) { echo "checked";} ?> value="1">Занято<Br>
			<input type="radio" name="1_04" <? if($info['1_04'] == 0) { echo "checked";} ?> value="0">Не занято<Br>
		</div class="pom">
		<div class="pom">
			<b>1_06</b>
			<input type="radio" name="1_06" <? if($info['1_06'] == 1) { echo "checked";} ?> value="1">Занято<Br>
			<input type="radio" name="1_06" <? if($info['1_06'] == 0) { echo "checked";} ?> value="0">Не занято<Br>
		</div>
		<div class="pom">
			<b>1_07</b>
			<input type="radio" name="1_07" <? if($info['1_07'] == 1) { echo "checked";} ?> value="1">Занято<Br>
			<input type="radio" name="1_07" <? if($info['1_07'] == 0) { echo "checked";} ?> value="0">Не занято<Br>
		</div>
		<!-- <input type="radio" name="browser" value="firefox"> Firefox<Br> -->
	</p>
	<!-- <p>Коментарий<Br>
		<textarea name="comment" cols="40" rows="3"></textarea>
	</p> -->
	<p>
		<input type="submit" value="Сохранить">
		<!-- <input type="reset" value="Очистить"> -->
	</p>
</form>

<!-- <form action="admin_action.php" method="post">
  <input type="radio" name="response" value="yes">да<br>
  <input type="radio" name="response" value="no">нет
</form> -->

    <div class="clear"></div>
      </div>
  </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

