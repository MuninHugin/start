<?php

use classes\BookProduct;
use classes\NotebookProduct;
use classes\interfaces\I3D;
use classes\interfaces\IComics;

// require_once 'interfaces/I3D.php';
// require_once 'interfaces/IComics.php';
// require_once 'interfaces/IGadget.php';
// require_once 'classes/Product.php';
// require_once 'classes/NotebookProduct.php';
// require_once 'classes/BookProduct.php';

function autoloader($class){
	$class = str_replace("\\", "/", $class);
	$file = __DIR__."/{$class}.php";
	if(file_exists($file)){
		require_once $file;
	}
}
spl_autoload_register('autoloader');

function debug($data) {
	echo "<pre>" . print_r($data, 1) . "</pre>";
}

$book = new BookProduct('Три поросенка', 300, 67);
$comics = new BookProduct('Sin city', 30, 100);
$notebook = new NotebookProduct('Acer', 11000, 'AMD');

echo $book->getProduct();
echo $notebook->getProduct();

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
echo $book->addProduct("The call of Ktulchu", 500, 1313);

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
	echo "Константа интерфейса IComics: {$param->getIComics()}";
}
getIComicsfunc($comics);