<?php

use WPTT\Oop\Censor\Censor;
use WPTT\Oop\Notification\Notification;
use WPTT\Oop\User\User;

require_once 'User.php';
require_once 'Censor.php';
require_once 'Notification.php';

function notify(User $user, $message)
{
	$notEmail = new Notification($user->getEmail());
	$censor = new Censor();
	$notEmail->sendTo($user->getName(), 'контакт', $user->isAdult() ? $message : $censor->censor($message));
	if ($user->getPhone()) {
		$notPhone = new Notification($user->getPhone());
		$notPhone->sendTo($user->getName(), 'контакт', $user->isAdult() ? $message : $censor->censor($message));
	}
}

$user1 = new User('Иван', 'ivan@email.ru', 8800000, 18);
$user2 = new User('Дима', 'dima@email.ru', '', '');

notify($user1, 'Сообщени 1');
notify($user2, 'Сообщени 2');