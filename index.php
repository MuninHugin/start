<?php
require_once 'classes/Product.php';

function debug($data) {
	echo "<pre>" . print_r($data, 1) . "</pre>";
}

$book = new Product('Три поросенка', 300, null, 67);
$notebook = new Product('Acer', 11000, 'AMD');

echo $book->getProduct('book');
echo $notebook->getProduct();

debug($book);
debug($notebook);