<?php
if (isset($_POST["encoded_string"])){

	$encoded_string = $_POST["encoded_string"];
	$image_name = $_POST["image_name"];
	
	$decoded_string = base64_decode($encoded_string);
	$path = 'images/'.$image_name;
	
	$file = fopen($path,'wb');
	$is_written = fwrite($file,$decoded_string);
	sclose($file);
	
	if($is_written > 0){
		//record to db since file is written alread
	
	}
}

?>