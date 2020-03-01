<?php
$socket=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

socket_bind($socket,'0.0.0.0',6666);
while(true) {
    socket_listen($socket);
    $sock = socket_accept($socket);
    $res = socket_read($sock, 2048);
    echo $res;
    socket_write($sock, 'hello client');
}
