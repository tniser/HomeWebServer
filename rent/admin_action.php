<?php 
// echo htmlspecialchars($_POST['ie']);
// echo (int)$_POST['age'];

var_dump($_POST);

// $rent_array = array('1_03' => 0,'1_04' => 1, '1_05'=>0,'1_06'=>1,'1_07'=>1);
// var_dump($rent_array);
if(isset($_POST['1_03'])){
	$bron_file = './bron_file.txt';
	file_put_contents($bron_file, json_encode($_POST));
}

?>