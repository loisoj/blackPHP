<?php
$black=require('system/lib/base.php');
$black->config('black.cfg.ini');

//Полный роут с функциями
$black->route('GET /',
	function($black) {
		echo View::instance()->render('zz.php');
	}
);
//Быстрый роут
$black->magicway('zz.php' , '/test');



$black->run();
