<?php

namespace WPTT\Oop\ToyFactory;

use WPTT\Oop\Toy\Toy;

require_once 'Toy.php';

class ToyFactory
{
	public function createToy($name)
	{
		return new Toy($name, rand(10, 100));
	}
}
