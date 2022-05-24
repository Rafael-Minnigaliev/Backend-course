<?php

namespace WPTT\Oop\Basket;

use WPTT\Oop\BasketPosition\BasketPosition;
use WPTT\Oop\Product\Product;

require_once 'Product.php';

class Basket
{
	private $goods = [];

	public function addProduct(Product $product, $quantity)
	{
		$this->goods[] = new BasketPosition($product, $quantity);
	}

	public function getPrice()
	{
		$sum = 0;
		foreach ($this->goods as $good) {
			$sum += $good->getPrice();
		}
		return $sum;
	}

	public function describe()
	{
		$info = "";
		foreach ($this->goods as $good) {
			$info .= $good->getProduct() . ' - ' . $good->getPrice() . ' - ' . $good->getQuantity() . '<br>';
		}
		return $info;
	}
}