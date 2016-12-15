<?php  
//冒泡排序
//最基本的算法了吧
function bubble($arr){
// 由小到大排序	
	for($i = 0;$i<count($arr);$i++){
		for($j = 0;$j<count($arr)-$i-1;$j++){
			if($arr[$j]>$arr[$j+1]){
				$temp     = $arr[$j];
				$arr[$j]  = $arr[$j+1];
				$arr[$j+1]= $temp; 			}
		}
	}
	return $arr;
}
	$arr = array();
	for($i = 0;$i<=10;$i++){
		$arr[$i] = mt_rand(1,99);
	}
	$new_arr = bubble($arr);
	echo "<pre>";
	var_dump($new_arr);
?>