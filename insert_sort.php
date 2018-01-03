<?php
	$arr = [1,23,4,5,71,26,54,79,200,16];

	function insert_sort($arr){

		if(!is_array($arr)) return false;

		for($i = 1; $i<count($arr);$i++){
			$min = $arr[$i];
			for($j = $i-1;$j>=0;$j--){
				if($arr[$j]>$min){
					$arr[$j+1] = $arr[$j];
					$arr[$j] = $min;
					$swapped = true;
				}
			}

		}
		return $arr;
	}

	$new_arr = insert_sort($arr);
	print_r($new_arr);