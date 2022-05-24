<?php

namespace WPTT\Oop\User;

class User
{
	private $name;
	private $email;
	private $phone;
	private $age;

	public function __construct($name, $email, $phone, $age)
	{
		$this->name = $name;
		$this->email = $email;
		$this->phone = $phone;
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function isAdult()
	{
		return $this->age >= 18;
	}
}