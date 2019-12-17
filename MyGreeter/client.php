<?php
namespace MyGreeter;

Class Client {

	function __construct (){
		
	}

	// 判断当前时间
	public static function timeType(){
		// 当前时间
		$time = time();
		// 早上零点
		$morning = strtotime(date('Y-m-d 00:00:00',$time));
		// 中午十二点
		$afternoon = strtotime(date('Y-m-d 12:00:00',$time));
		// 下午六点
		$evening = strtotime(date('Y-m-d 18:00:00',$time));

		if ($time >= $morning && $time < $afternoon) {
			// 上午
			return 1;
		} else if ($time >= $afternoon && $time <$evening) {
			// 下午
			return 2;
		} else {
			// 晚上
			return 3;
		}
	}
}