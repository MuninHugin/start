<?php
require_once 'classes/Product.php';
require_once 'interfaces/I3D.php';
require_once 'interfaces/IGadget.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data) {
	echo "<pre>" . print_r($data, 1) . "</pre>";
}

$book = new BookProduct('Три поросенка', 300, 67);
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
function get3D(I3D $param) {
	echo "<p>Книга 3D: {$param->getName()}</p>";
	echo "Константа интерфейса I3D: {$param->getI3D()}";
}
get3D($book);
// get3D($notebook); //Ошибка