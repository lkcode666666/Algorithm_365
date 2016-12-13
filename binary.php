<?php
//非递归算法
function binary_search($arr,$key){
	$floor = 0;
	$top   = count($arr);
	$mid   = floor(($floor+$top)/2);
	while($key !=$arr[$mid]){
		if($key<$arr[$mid]){
			$top = $mid;
			$mid   = floor(($floor+$mid)/2);
			if($mid == $top){
				return "不存在查找的值";
				break;
			} 
		}
		else{
			$floor = $mid;
			$mid = floor(($floor+$top)/2);
			if($mid ==$floor){
				return "查找的值不存在";
				break;
			}

		}
	} 
	return $mid;
}
//递归算法
function binary_search($arr,$key,$f,$t){
	$floor = $f;
	$top   = $t;
	$mid   = floor(($floor+$top)/2);
	if($key == $arr[$mid]){
		echo $mid;
		return  ;
	}	
	if($mid == $floor){
		echo "查找不存在" ;
		return ;
	}	

	if($key< $arr[$mid]){
		$top = $mid;
		
		binary_search($arr,$key,$floor,$top);
	}
	else{
		$floor = $mid;
		binary_search($arr,$key,$floor,$top);
	}
}
$arr =array(1,5,10,15,20,25,30);

binary_search($arr,25,0,count($arr));

//echo binary_search($arr,14);

?>