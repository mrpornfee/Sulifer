<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/2/24
 * Time: 21:25
 */
$nonce=0;
$index="3ELSP81n5ZaWzWZtyUuZNkEFQfaNEMLAP2";
$previous="00000000000000000135fddd4595bfadc843088867f7767ea53d59f907809c92";
$data= "00000000000000000135fddd4595bfadc843088867f7767ea53d59f907809c92";
do{
    $t=time();
$str=$index.$previous.$data.$t.$nonce;


$result=hash("sha256",$str);
$result=hash("sha256",$result);
echo $result;
echo "\n";
$nonce=$nonce+1;}while($nonce<=1000);