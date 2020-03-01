<?php
$socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

socket_connect($socket,'127.0.0.1',6666);
$msg = 'hello server';
socket_write($socket, $msg);
$res=socket_read($socket, 2048);
echo $res;