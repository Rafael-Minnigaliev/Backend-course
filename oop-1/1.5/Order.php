<?php

namespace WPTT\Oop\Order;

class Order
{
	private $basket;
	private $deliveryPrice;

	public function __construct($basket, $deliveryPrice)
	{
		$this->basket = $basket;
		$this->deliveryPrice = $deliveryPrice;
	}

	public function getBasket()
	{
		return $this->basket;
	}

	public function getPrice()
	{
		return $this->deliveryPrice;
	}
}