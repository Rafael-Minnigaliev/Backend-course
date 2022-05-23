<?php

use BasketPosition\BasketPosition;
use oop\Basket\Basket;
use oop\Order\Order;
use oop\Product\Product;
use oop\User\User;

require_once 'Basket.php';
require_once 'Product.php';
require_once 'BasketPosition.php';
require_once 'Order.php';
require_once '../1.4/User.php';
require_once '../1.4/index.php';

$basket = new Basket();

$product1 = new Product('ручка', 40);
$product2 = new Product('тетрадь', 80);
$product3 = new Product('фломастеры', 100);
$product4 = new Product('ластик', 20);
$product5 = new Product('карандаш', 30);

$basaketPosition1 = new BasketPosition(['name' => $product1->getName(), 'price' => $product1->getPrice()], 5);
$basaketPosition2 = new BasketPosition(['name' => $product2->getName(), 'price' => $product2->getPrice()], 5);
$basaketPosition3 = new BasketPosition(['name' => $product3->getName(), 'price' => $product3->getPrice()], 5);
$basaketPosition4 = new BasketPosition(['name' => $product4->getName(), 'price' => $product4->getPrice()], 5);
$basaketPosition5 = new BasketPosition(['name' => $product5->getName(), 'price' => $product5->getPrice()], 5);

$basket->addProduct($product1, $basaketPosition1->getQuantity());
$basket->addProduct($product2, $basaketPosition2->getQuantity());
$basket->addProduct($product3, $basaketPosition3->getQuantity());
$basket->addProduct($product4, $basaketPosition4->getQuantity());
$basket->addProduct($product5, $basaketPosition5->getQuantity());

$order = new Order($basket, 150);

echo 'Заказ, на сумму: ' . $order->getBasket()->getPrice() . ' Состав: ' . $order->getBasket()->describe();
echo '<hr>';

$user3 = new User('Николай', 'kolya@email.ru', 8888888, 49);

notify($user3, 'Для вас создан заказ, на сумму: ' . $order->getBasket()->getPrice() . ' Состав: ' . $order->getBasket()->describe());