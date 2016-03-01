<?php
/**
 *
 *	@author Hao Chuan
 *	@version 1.0.0
 *
 */
function insertSort($arr)
{
	for($i = 1, $len = count($arr); $i < $len; $i++){
		$tmp = $arr[$i];
		for($j < $i - 1; $j >= 0; $j--){
			if($tmp < $arr[$j]){
				$arr[$j + 1] = $arr[$j];
				$arr[$j] = $tmp
			} else {
				break;
			}
		}
	}
	return $arr;
}
?>