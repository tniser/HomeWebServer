<head>

<script src="https://code.jquery.com/jquery-3.5.1.min.js">

</script>
</head>

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
     <script type="text/javascript" src="./jquery.maphilight.js"></script>
      <h2>План 1 этажа</h2>
     <!-- <img src="/upload/medialibrary/f31/f31eb67a19f10458f6e6b1dd51bb63c9.png" title="Первый этаж Старт-Парк" border="0" alt="Первый этаж Старт-Парк" width="792" height="537"  /> -->

<?php
// ini_set('error_reporting', E_ALL);
// $rent_array = array('1_03' => "0",'1_04' => "1", '1_05'=>"0",'1_06'=>1,'1_07'=>1);
// echo json_encode($rent_array);
$bron_file = './bron_file.txt';
// file_put_contents($bron_file, json_encode($rent_array));

$info=file_get_contents($bron_file);
$info=json_decode($info, true);

// var_dump($info);

// $pom1_03 = $info['1_03'];
// $pom1_04 = $info['1_04'];
// $pom1_05 = $info['1_05'];
// $pom1_06 = $info['1_06'];
// $pom1_07 = $info['1_07'];

function rent($pom){
  if($pom == 1){
    $class = 'class="color" data-title="Занято"';
  }
  else{
    $class = 'class="none" data-title="Свободно"';
  }
  return $class;
}

// echo "---".$info['1_04']."---<br>";
// echo rent($info['1_03']);




?>
<style type="text/css">
  [title]{
    color:red;
  }

  [data-title] {
    position: relative; /* Относительное позиционирование */ 
   }
   [data-title]::after {
    content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    width: 300px; /* Ширина подсказки */
    left: 0; top: 0; /* Положение подсказки */
    background: #3989c9; /* Синий цвет фона */
    color: #fff; /* Цвет текста */
    padding: 0.5em; /* Поля вокруг текста */
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Параметры тени */
    pointer-events: none; /* Подсказка */
    opacity: 0; /* Подсказка невидима */
    transition: 1s; /* Время появления подсказки */
   } 
   [data-title]:hover::after {
    opacity: 1; /* Показываем подсказку */
    top: 2em; /* Положение подсказки */
   }
   .tooltiptext {
  display: none;
    position: relative;
  text-align: center;
    border: 1px solid #73a7f0;
    margin-left: 0px;
    padding: 5px 14px;
    background-color: #fff;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    box-shadow: 0px 0px 6px rgba(0, 0, 0, .7);
    -webkit-box-shadow: -0px 0px 6px rgba(0, 0, 0, .7);
    -moz-box-shadow: 0px 0px 6px rgba(0, 0, 0, .7);
}
.tooltiptext:before{
    content: ' ';
    display: block;
    position: absolute;
    Left: 0px;
  right: 0px;
    top: 23px;
    width: 10px;
    height: 10px;
  margin: 0px auto;
    border-color: #73a7f0;
    border-width: 1px;
    border-style: none solid solid none;
    background-color: #fff;
    box-shadow: 2px 2px 3.5px rgba(0, 0, 0, .5);
    -webkit-box-shadow: 2px 2px 3.5px rgba(0, 0, 0, .5);
    -moz-box-shadow: 2px 2px 3.5px rgba(0, 0, 0, .5);
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
}
.tooltip:hover span {
    display:block;
    position:fixed;
}
.colorBlockSelect {
  height: 40px;
  width: 40px;
  float: left;
  margin: 4px;
    display: block;
}
/*#zanyato {position:absolute; z-index:999; top:0; left:0; width:100px; background:#FFF; opacity:0.85; border:1px solid #000;}
#svobodno {position:absolute; z-index:999; top:0; left:0; width:100px; background:#FFF; opacity:0.85; border:1px solid #000;}*/


</style>
  <!-- <img src="http://mars-rus.ru/upload/medialibrary/f31/f31eb67a19f10458f6e6b1dd51bb63c9.png"  class="map" usemap="#image-map"> -->
  <img src="http://mars-rus.ru/rent/img/share1.png" width="784"  class="map" usemap="#image-map">

  <map name="image-map">
      <area target="_self" alt="1_03" <?php echo rent($info['1_03']); ?> id="trigger"  href="1_03" onclick="send(this); return false;" coords="140,237,11,12" shape="rect" onmouseover="this.style.backgroundColor='#00FF00';" onmouseout="this.style.backgroundColor='transparent';">
      
      <area target="" alt="1_04" <?php echo rent($info['1_04']); ?> id="trigger1" href="1_04" onclick="send(this); return false;" coords="12,238,140,430" shape="rect">
      <area target="" alt="1_06" 
	  <?php echo rent($info['1_06']); ?>
	  id="trigger2" href="1_06" onclick="send(this);
	  return false;
	  " coords="12,420,140,465" shape="rect" data-maphilight="{'strokeColor':'0000ff','strokeWidth':5,fillColor:'15b915','fillOpacity':0.6,'alwaysOn':true}">
      <area target="_blank" alt="1_07" <?php echo rent($info['1_07']); ?> id="trigger3" href="1_07" onclick="send(this); return false;" coords="145,301,255,477" shape="rect">
	  <area target="" alt="1_02" <?php echo rent($info['1_02']); ?> id="trigger1" href="1_02" onclick="send(this); return false;" coords="1272,1465,722,58" shape="rect" data-maphilight="{'strokeColor':'0000ff','strokeWidth':5,fillColor:'15b915','fillOpacity':0.6,'alwaysOn':true}">
		
  
  
  
  </map>

 </div>
<!-- <div id="zanyato">Занято</div>
<div id="svobodno">Свободно</div> -->
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->

<script type="text/javascript">
        // $(function () {
        //     $('.map').maphilight();
        // });
        $('.map').maphilight();
        $(".color").data('maphilight', { alwaysOn: true,fillColor:"8c8888",'fillOpacity':0.5 }).trigger('alwaysOn.maphilight');        // $(".color").data('maphilight', { fillColor: true }).trigger('fillColor.maphilight');
        $(".none").data('maphilight', { alwaysOn: false,fillColor:"15b915",'fillOpacity':0.5 }).trigger('alwaysOn.maphilight');
  //       $('.color').mouseover(function() {
    //     // alert($(this).attr('id'));
    // }).mouseout(function(){
    //     // alert('Mouseout....');      
    // });
// $(document).ready(function(){ 
//    $(".color").mousemove(
  
//  function (pos) {  
//  $("#zanyato").show(); 
//     $("#zanyato").css('left',(pos.pageX+10)+'px').css('top',(pos.pageY+10)+'px');  
//     }   
   
//    ).mouseleave(function() {
//     $("#zanyato").hide();  
// });

// }); 

// $(document).ready(function(){ 
//    $(".none").mousemove(
  
//  function (pos) {  
//  $("#svobodno").show(); 
//     $("#svobodno").css('left',(pos.pageX+10)+'px').css('top',(pos.pageY+10)+'px');   
//     }   
   
//    ).mouseleave(function() {
//     $("#svobodno").hide();  
// });
   
   

// });
// function send(el) {
//     var url = el.getAttribute('href');
//     var msg = prompt('Сообщение');
    
//    var form = document.createElement("form");
//     form.setAttribute("method", 'post');
//     form.setAttribute("action", url);

//     var input = document.createElement("input");
//     input.setAttribute("type", "hidden");
//     input.setAttribute("name", 'msg');
//     input.setAttribute("value", msg);

//     form.appendChild(input);
//     form.submit();
// }

function send(el) {
  // el.preventDefault();

  $('#myModal').modal('show');
  href = $(el).attr('href');
  $("input[name='pom']").val(href);
  $('#myModalLabel')[0].innerHTML = 'Заказать помещение '+href;
  
}

</script>
<!--      <img src="/upload/medialibrary/f31/f31eb67a19f10458f6e6b1dd51bb63c9.png" usemap="#image-map">

<map name="image-map">
    <area target="_blank" alt="title2" title="title2" href="link-10-7" coords="151,302,255,474" shape="rect">
	<area target="" alt="1.02" title="1.02" href="" coords="1272,1465,722,58" shape="rect">
    <area target="" alt="1.01" title="1.01" href="" coords="1296,121,1296,893,2943,899,2943,650,3090,652,3097,521,2950,521,2946,134,1299,130" shape="poly">
    <area target="" alt="1.09" title="1.09" href="" coords="1296,930,1296,1231,1381,1221,1395,1290,1721,1293,1738,1972,2408,1969,2408,940" shape="poly">
    <area target="" alt="1.08" title="1.08" href="" coords="1381,1293,1725,1297,1731,1966,1388,1962" shape="poly">
    <area target="_self" alt="title" title="title" href="1.03" coords="53,58,60,1159,692,1156,688,65" shape="poly">
    <area target="" alt="1.04" title="1.04" href="" coords="63,1173,63,2288,1268,2295,1272,1475,698,1417,688,1173" shape="poly">
    <area target="" alt="1.10" title="1.10" href="" coords="2421,940,2421,1633,2782,1640,2778,1729,3135,1729,3132,1283,3245,1273,3252,943" shape="poly">
    <area target="" alt="1.11" title="1.11" href="" coords="2782,1746,2785,1959,3248,1966,3248,1743" shape="poly">
    <area target="" alt="1.17" title="1.17" href="" coords="3259,936,3475,936,3475,1365,3259,1362" shape="poly">
    <area target="" alt="1.16" title="1.16" href="" coords="3492,933,3822,1396" shape="rect">
    <area target="" alt="1.15" title="1.15" href="" coords="3327,1544,3475,1643" shape="rect">
    <area target="" alt="1.14" title="1.14" href="" coords="3482,1564,3691,1571,3691,1715,3478,1715" shape="poly">
    <area target="" alt="1.13" title="1.13" href="" coords="3695,1571,3822,1571,3825,1966,3482,1969,3492,1873,3691,1869" shape="poly">
    <area target="" alt="1.12" title="1.12" href="" coords="3382,2000,3640,2185" shape="rect">
</map> -->
    <!-- <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/redmond/jquery-ui.css"> -->
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.js"></script> -->

    <!-- <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    

<script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.js"></script>
<script type="text/javascript">
  // $(function(){

    // $('#trigger').click(function(){
    //   $('#myModal').modal('show');
    //   console.log($(this).attr('href'));
    //   href = $(this).attr('href');
    //   $(function() {
    //     $("input[name='pom']").val(href);
    //   });
    //   return false;
    // })

  // });
</script>

<!-- <a href="123" id="trigger">Trigger</a> -->
<style type="text/css">
  #floatingmes {
    display: none;
    position: absolute;
    z-index: 999;
    top: 0;
    left: 0;
    width: 100px;
    background: #FFF;
    opacity: 0.85;
    border: 1px solid #000;
    font-weight: bold;
    text-align: center;
    transition: 0.5s;
    box-shadow: 0px 0px 3px 0px black;
  }

  /*#block {width:500px; height:500px; background:#900;}*/
</style>
 <div id="floatingmes">Подсказка</div>

<!-- <div id="block"></div> -->
<script type="text/javascript">
  
$(document).ready(function(){ 
   $("#trigger, #trigger1, #trigger2, #trigger3, #trigger4").mousemove(
  
  function (pos) {  
  $("#floatingmes").show(); 
      // $("#floatingmes").css('display:block;');
      $("#floatingmes").css('left',(pos.pageX+10)+'px').css('top',(pos.pageY-290)+'px');  
      // alert('123');
      // console.log($(this).attr('href'));
      
      $("#floatingmes")[0].innerHTML = $(this).attr('href');
      $("#floatingmes")[0].innerHTML = $(this).attr('data-title');
    }   
   
   ).mouseleave(function() {
    $("#floatingmes").hide();  
}); 
   
   

}); 
</script>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <form action="send_mail.php" id="pomesh" method="post">
      <input type="hidden" name="send_mail" value="">
      <input type="hidden" name="pom" value="">
      <input type="text" required name="fio" placeholder="Укажите ФИО">
      <input type="text" required name="email" placeholder="Укажите e-mail">
      <input type="tel" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
         placeholder="+7(___)___-__-__"
       required name="phone" >
      <textarea name="comment" placeholder="Коментарий к заявке" cols="40" rows="4"></textarea></p>
      <input type="submit" class="btn btn-primary" value="Отправить">
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
    <!-- <button class="btn btn-primary">Save changes</button> -->
  </div>
</div>

         
    <div class="clear"></div>
      </div>
  </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

