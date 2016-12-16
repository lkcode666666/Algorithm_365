<?php  
function quickssort($arr){

	if(count($arr)==0){return $arr;}
	$key   = $arr[0];
	$left  = array();
	$right = array(); 
	//小于$key的放左边 大于$key 的放右边
	for($i = 1;$i<count($arr);$i++) {//这里 既然选定了以$arr[0]做基数,那么后面就从$arr[1]开始
		if($arr[$i]<=$key){array_push($left, $arr[$i]);}
		else{array_push($right,$arr[$i]);}
	}
	$left  = quickssort($left);
	$right = quickssort($right);
	$arr = array_merge($left,array($key),$right);//这里 merage 三个参数一定都是数组
	return $arr;

}
$arr = array();
for($i = 0;$i<10;$i++){
	$arr[$i] = mt_rand(1,99);
}
$arr = quickssort($arr);
echo "<pre>";
var_dump($arr);

?>