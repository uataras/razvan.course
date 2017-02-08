<?php
/**
 * Это единая точка входа для нашего приложения.
 * На этот файл будут переадресованы все запросы нашего сайта.
 */


class Room
{
     public $color = 'red';
    public static $location = 'inside home';

    public static function sayHello()
    {
        echo "Hello";
    }

     public function getColor()
     {
         echo $this->color;
     }

     public function changeColor($color)
     {
         $this->color = $color;
     }
}

$room1 = new Room();
$room1->changeColor('BLUE');
$room1->getColor();
echo $room1::$location;
$room1::sayHello();



// Подключаем файл, где храниться автозагрузчик классов
//require __DIR__ . '/../app/Loader.php';
//
//// создаем экземпляр класса автозагрузчика
//$loader = new \app\Loader();
//
//// добавляем соответствующие нэймспэйсу директории
//$loader->addNamespace('app', realpath(__DIR__ . '/../app'));
//$loader->addNamespace('liw\\core',  realpath(__DIR__ . '/../vendor/liw/core'));
//$loader->addNamespace('liw\\contracts',  realpath(__DIR__ . '/../vendor/liw/interfaces'));
//
//// регистрируем автозагрузчик
//$loader->register();
//
//// регистрируем свой обработчик ошибок и исключений.
//(new \liw\core\ErrorHandler)->register();
//
//$var = 'Переменная из глобальной области видимости';
//
//// Простой пример замыкания.
//// В качестве аргумента передали переменную из текущей области видимости
//$closure1 = function() use ($var) {
//    echo $var . '<br>';
//};
//
//// именно эта строка выполнит тело замыкания1
//$closure1();
//
//// передаем параметр замыканию вручную
//$closure2 = function($var) {
//    // здесь выведется переменная из локальной области видимости, переданная явно
//    echo $var;
//};
//
//// именно это страка выполнит тело замыкания2
//$closure2('Вручную переданный параметр');




