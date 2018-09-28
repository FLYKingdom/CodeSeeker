<?php
/* 数组的遍历
 *
 * 	1. 使用for语句循环遍历数组
 * 	   a. 其它语言（只有这一种方式）
 *         b. PHP中这种方式不是我们首选方式
 *         c. 数组必须是索引数组，而且下标还必须是连续的
 *            （索引数组下标还可以不连序，数组还有关联数组）
 *   
 *
 * 	2. 使用foreach语句循环遍历数组
 * 	   foreach(数组变量 as 变量值){
 *		//循环体
 * 	   }
 * 	   a. 循环次数由数组的元素个数决定
 * 	   b. 每一次循环都会将数组中的元素分别赋值给后面变量
 *
 * 	   foreach(数组变量 as 下标变量=> 值变量){
 *		
 * 	   }
 *
 * 	3. while() list() each() 组合循环遍历数组
 *
 *      
 *    
 *
 *
 */

  $user=array(1, "name"=>"zhasna", "age"=>40, 100=>"nan", "aaa@bb.com");
  
  foreach($user as $key=>$val){   //$var 是自定义变量, $key自定义变量
  		echo $key."=========>".$val."<br>";
  }

