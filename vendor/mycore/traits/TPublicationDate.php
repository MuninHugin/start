<?php
namespace mycore\traits;
trait TPublicationDate
{
	private $TraitVar = "123||321";
	public $TDatePublish;

	public function getTraitMethod()
	{
		return "Вывод трейта - {$this->TraitVar}";
	}
}
?>