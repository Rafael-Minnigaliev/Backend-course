<?php

use WPTT\Oop\Basket\Basket;
use WPTT\Oop\Order\Order;
use WPTT\Oop\Product\Product;
use WPTT\Oop\User\User;

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

$basket->addProduct($product1, 5);
$basket->addProduct($product2, 3);
$basket->addProduct($product3, 4);
$basket->addProduct($product4, 1);
$basket->addProduct($product5, 2);

$order = new Order($basket, 150);

$text = $order->getBasket()->getPrice() . ' Состав: ' . $order->getBasket()->describe();

echo 'Заказ, на сумму: ' . $text;
echo '<hr>';

$user3 = new User('Николай', 'kolya@email.ru', 8888888, 49);

notify($user3, 'Для вас создан заказ, на сумму: ' . $text);