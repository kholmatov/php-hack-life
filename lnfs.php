<?php
/* 
Get last number from string && convert to integer
*/

functiontion getLNFS($string){
    $str_arr = array_reverse(str_split($string));
    $int = "";
    for($i = 0; $i < count($str_arr); $i++){
    	if(is_numeric($str_arr[$i])) {
        	$int .= $str_arr[$i];
    	}else{
        	break;
    	}
    }
    return intval(strrev($int));
}

echo getLNFS('1WRD1230'); // 1230

?>
