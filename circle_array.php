<?php 
//今天面试碰到这样一道题
// 写一个函数 
// function metrix($n){}
// $n = 2  输出数组   4 1
//					  3 2
//	
// $n = 3  输出数组   7 8 1
//					  6 9 2
//					  5 4 3 
//				  
// $n = 4  输出数组   10 11 12 1
//					  9  16 13 2
//				      8  15 14 3
//					  7  6  5  4
//依次类推 $n<=500  好神奇的一道题     
//类似答案连接 ---> http://blog.sina.com.cn/s/blog_b7a639d60101akjy.html
// 假设需要输入的最左列为left，最右列为right，最上列为up，最下列为down；
// 一开始left=0；right=n-1；up=0；down=n-1；
// 当前行列为i，j；
// 一开始i=right，j=top；
// 构造步骤：

function metrix($n){
		$num   = 1; 
		$top   = 0;
		$left  = 0;
		$down  = $n-1;
		$right = $n-1;

		$i 	   = $top;
		$j 	   = $right; 
		$arr   = array();

	while(1){		//一直循环下去
		//画右边
		while($i != $down+1){ 
				$arr[$i][$j] = $num;
				$num++;
				$i++;
					
			}
		$right--; 	
		$i = $down;
		$j =  $right;
		
		if($num ==$n*$n){return $arr;break;}//如果画完了就退出
		
		//echo $i,$j,$num;
		while($j != $left-1){ //画底下的
				$arr[$i][$j] = $num;
				$num ++;
				$j--;			
		}
		
		$down --;
		$i = $down;
		$j = $left;
		
		echo $i,$j,$num;die;
		while($i != $top-1){ //画左边的
				$arr[$i][$j] = $num;
				$num ++;
				$i--;			
		}
		
		$left++;
		$i = $top;
		$j = $left;
		

		if($num ==$n*$n){return $arr;break;}
		
		while($j != $right+1){ //画上边的
				$arr[$i][$j] = $num;
				$num ++;
				$j++;			
		}
		$top++;
		$i = $top;
		$j = $right; 
		
		if($num ==$n*$n){return $arr;break;}	
	}
}
$arr = metrix(2);
for($i=0;$i<2;$i++){
	for($j=0;$j<2;$j++){
		echo $arr[$i][$j];
	}
	echo "<br>";
}

 ?>
