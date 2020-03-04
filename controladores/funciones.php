<?php
function generar_token(){
    $char="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    srand((double)microtime()*1000000);
    $i=0;
    $pass='';
    while ($i <= 7) {
        $num=rand()%33;
        $tmp=substr($char,$num,1);
        $pass=$pass.$tmp;
        $i++;
    }
    return time().$pass;
}
?>