<?php
//-----------SAVE DATA---------------
$json = file_get_contents('php://input');
$data=json_decode($json);


$fp = fopen('debug/notification.txt', 'w');
fwrite($fp, $json);
fclose($fp);