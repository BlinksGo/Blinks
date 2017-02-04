<?php
 //echo md5('ericroot');
//冒泡排序函数
/*
*@ $array 需要排序的数组
*@ $sort 排序规则 0 降序rsort 1 升序sort
*@return $ret 返回一个排好序的数组
*/
function maopao ($array,$sort = 1)
{
	var_dump($array);
	if(!is_array($array)) return false;
	//外层
	for($i = 0 ,$len = count($array);$i < $len ; $i++)
	{
		//内层
		for($j = 0 , $len1 = $len - $i - 1 ; $j < $len1 ; $j++)
		{
			if ($array[$j] > $array[$j+1]) {
				$temp = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $temp;
			}
		}
	}
	return $array;
}
$arr = array(3,2,5,7,8,4,6);
$a = maopao($arr);
var_dump($a);