<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/2/11
 * Time: 22:23
 */
$html = file_get_contents("http://game.uixsj.cn/se/?tdsourcetag=s_pcqq_aiomsg");
$htmlOneLine = preg_replace("/\r|\n|\t/","",$html);
preg_match("/<span>(.*)<\/span>/",$htmlOneLine,$titleArr);
var_dump($titleArr);