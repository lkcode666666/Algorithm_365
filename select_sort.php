<?php
	

	$arr = [1,23,4,5,71,26,54,79,200,16];
	// select_sort
	function select_sort($arr){
		if(!is_array($arr)) return false;

		for($i = 0; $i<count($arr); $i++){
			$p = $i; //假设p为最大
			for($j = $i+1;$j<count($arr);$j++){
				if($arr[$j]<$arr[$p]){
					$p = $j;
				}
			}
			if($p!=$i){
				$tmp     = $arr[$i];
				$arr[$i] = $arr[$p];
				$arr[$p] = $tmp;  
			}
		}
		return $arr;

	}	
	$new_arr = select_sort($arr);	
	print_r($new_arr);

