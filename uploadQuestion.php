<?php
session_start(); 
require_once 'connection.php';
require_once 'filter.php';


	$stmt = $conn->prepare("SELECT * FROM online_cbt_question");		
	$stmt->execute();
	$affected_rows = $stmt->rowCount();
	if($affected_rows >= 1){
		$two = array();
		$one = array();
		while ($row2 = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			$Cbt_Question = $row2['Cbt_Question'];
			$Option_1 = $row2['Option_1'];
			$Option_2 = $row2['Option_2'];
			$Option_3 = $row2['Option_3'];
			$Option_4 = $row2['Option_4'];
			$Cbt_Answer = $row2['Cbt_Answer'];
			$option = "O";
			$one = array(
				"Cbt_Question" => $Cbt_Question,
				"Option_1" => $Option_1,
				"Option_2" => $Option_2,
				"Option_3" => $Option_3, 
				"Option_4" => $Option_4,
				"Cbt_Answer" => $Cbt_Answer
			  );
			// echo "sqLiteHelper.addNewQuestion(". "&quot;" . $Cbt_Question. "&quot;" . ", ". "&quot;" .$Option_1. "&quot;" .", ". "&quot;" .$Option_2. "&quot;" . ", ". "&quot;" .$Option_3. "&quot;" .", ". "&quot;" .$Option_4. "&quot;" .", ". "&quot;" .$Cbt_Answer. "&quot;" .", ". "&quot;" .$option. "&quot;" .");" . "<br /><br />";
			
                    
		}
		print(json_encode($two));
	 }
 ?>