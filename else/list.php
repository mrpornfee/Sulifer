<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/2/17
 * Time: 16:44
 */
function func_new_each(&$array){
    $res = array();
    $key = key($array);
    if($key !== null){
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    }else{
        $res = false;
    }
    return $res;
}
$my_array = array("Dog","Cat","Horse","aaa");
var_dump(func_new_each($my_array));
while(list($key, $value) = each($my_array))
echo "I have several animals, a $key, a $value ";

