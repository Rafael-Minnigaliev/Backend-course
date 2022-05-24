<?php

namespace WPTT\Oop\BasketPosition;

class BasketPosition
{
	private $good;
	private $quantity;

	public function __construct($good, $quantity)
	{
		$this->good = $good;
		$this->quantity = $quantity;
	}

	public function getProduct()
	{
		return $this->good->getName();
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getPrice()
	{
		return $this->good->getPrice();
	}
}