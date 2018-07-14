<?php

// Kickstart the framework
$black=require('system/lib/base.php');
//$z=include('black.class.php');

// CWAY BLACK
// function magicway($cwayuri , $cwaylay){
//
//  $black->route('GET '.$cwayuri.'',
// 	function($black) {
//
// 		echo View::instance()->render($cwaylay);
// 	}
//  );
// }


// Load configuration
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
