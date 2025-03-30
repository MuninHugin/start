<?php

use app\{BookProduct, NotebookProduct, A, B, SingletonExample};
use mycore\interfaces\{I3D, IComics};

require_once __DIR__ . "/vendor/autoload.php";
error_reporting(-1);

// function autoloader($class){
// 	$class = str_replace("\\", "/", $class);
// 	$file = __DIR__."/{$class}.php";
// 	if(file_exists($file)){
// 		require_once $file;
// 	}
// }
// spl_autoload_register('autoloader');

// require_once 'interfaces/I3D.php';
// require_once 'interfaces/IComics.php';
// require_once 'interfaces/IGadget.php';
// require_once 'classes/Product.php';
// require_once 'classes/NotebookProduct.php';
// require_once 'classes/BookProduct.php';

function debug($data) {
	echo "<pre>" . print_r($data, 1) . "</pre>";
}

$book = new BookProduct('Три поросенка', 300, 67, 1977);
$comics = new BookProduct('Sin city', 30, 100, 1957);
$notebook = new NotebookProduct('Acer', 11000, 'AMD');

echo $book->getProduct();
echo $notebook->getProduct();


// Работа с private-свойством через геттер и сеттер
echo $book->getName();
echo "<br>";
echo $book->setName("testtt");

debug($book);
debug($notebook);


// nonabstract class

// $product = new Product('test', 20);
// $product->setDiscount(30);
// $product->getDiscount();


$book->setBookDiscount(50);
$book->getBookDiscount();

BookProduct::echoPublishing();
?>
<hr>
<h3>Работа с абстрактным методом</h3>
<?
// abstract class
echo $book->addProduct("The call of Ktulchu", 500, 1313, 2014);

?>
<hr>
<h3>Работа с интерфейсом</h3>
<?
function get3Dfunc(I3D $param) {
	echo "<p>Книга 3D: {$param->getName()}</p>";
	echo "Константа интерфейса I3D: {$param->getI3D()}";
}
get3Dfunc($book);
// get3D($notebook); //Ошибка

function getIComicsfunc(IComics $param) {
	echo "<p>Книга Comics: {$param->getName()}</p>";
	echo "Константа интерфейса IComics: {$param->getIComics()}<br>";
}
getIComicsfunc($comics);


// Автозагрузка внешних библиотек с помощью composer(итог)

// $mail = new \PHPMailer\PHPMailer\PHPMailer();
// debug($mail);
// -----------


// Позднее статическое связывание
$a = new A();
$aa = new A();
$b = new B();
$a->getTest();
$b->getTest();
$b->getTest2();

// Цепочка методов
$book->getAction1()->getAction2();

// Магические методы
echo $book;

echo $book->name;  // Аналогично echo $book->getName();
echo "<br><hr>";

// Пример Singletone
$a1 = SingletonExample::getInstance();
$a2 = SingletonExample::getInstance();
echo "<h2>Пример Singletone</h2>";
var_dump($a1);
echo "<br>";
var_dump($a2);



echo "<br><hr>";
$a = 1; $b = 2;

[$a, $b] = [$b, $a];

echo '$a = '.$a. "<===>" .'$b = '.$b;

echo "Test rebase from master branch +++!!!!!!";
echo "Changes in master before rebase";
echo "Test rebase from master branch. Change #1";
echo "Test merge from master branch. Change #1";