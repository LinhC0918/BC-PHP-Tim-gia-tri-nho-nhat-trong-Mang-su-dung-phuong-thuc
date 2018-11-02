<?php
 $arr =[1,5,6,8,0,10,-2];
 $min  = $arr[0];
 for ($i = 1; $i < count($arr); $i ++) {
     if ($min > $arr[$i]) {
         $min = $arr[$i];
     }
 }
 echo $min;