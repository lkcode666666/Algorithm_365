<?php
	$arr = [1,23,4,5,71,26,54,79,200,16];

	function insert_sort($arr){

		if(!is_array($arr)) return false;

		for($i = 0; $i<count($arr);$i++){
			$min = $arr[$i];
			for($j = $i;$j>=0;$j--){
				if($arr[$j]>$min){
					$arr[$j+1] = $arr[$j];
					$arr[$j] = $min;
				}
			}

		}
		return $arr;
	}

	$new_arr = insert_sort($arr);
	print_r($new_arr);
