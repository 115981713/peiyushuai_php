<?php
use \MyGreeter\Client;
include_once 'client.php';

// 实例化
$ObjClient = new Client();
// 获取当前时间的类型
$type = $ObjClient::timeType();
// 显示提示信息
if ($type == 1) {
	echo 'Good morning';
} else if ($type == 2) {
	echo 'Good afternoon';
} else {
	echo 'Good evening';
}