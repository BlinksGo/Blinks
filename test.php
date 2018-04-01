<?php
echo count("abc");exit();
echo $_SERVER['REMOTE_ADDR'];$_SERVER['SERVER_ADDR'];
/*  冒泡排序函数
*@ $array 需要排序的数组
*@ $sort 排序规则 0 降序rsort 1 升序sort
*@return $ret 返回一个排好序的数组
*/
/*function maopao ($array,$sort = 1)
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
<<<<<<< Updated upstream
var_dump($a);
=======
//var_dump($a);*/

/*function arrayLevel($vDim){
	if(!is_array($vDim)){
		return 0; 
	 }else{ 
         $max1 = 0; 
             foreach($vDim as $item1){ 
             	print_r($item1);echo "<br/>";
                $t1 = arrayLevel($item1); 
                if( $t1 > $max1) {
					$max1 = $t1; 
				}
             } 
        return $max1 + 1; 
       } 
  }

  $arr = array(1,2,3,4,'a'=>array('bas'=>'ssds'),'c'=>array('dcd'=>22));
  echo arrayLevel($arr);
*/
