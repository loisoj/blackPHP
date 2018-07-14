# BlackPHP

# Роутинг:

Короткий:
  ```
  $black->magicway('zz.php' , '/test');
  ```

В стиле F3:
  ```
  $black->route('GET /',
	function($black) {
		echo View::instance()->render('zz.php');
	}
);
  ```
Работоспособность проверена.

На очереди- перевести все общение на ws
На данный момент доступны базовые библиотеки фреймворка F3.
