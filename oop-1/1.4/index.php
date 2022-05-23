<?php

use oop\Censor\Censor;
use oop\Notification\Notification;
use oop\User\User;

require_once "User.php";
include "Censor.php";
include "Notification.php";

function notify(User $user, $message){
    if ($user->isAdult()){
        $notEmail = new Notification($user->getEmail());
        $notEmail->sendTo($user->getName(), 'контакт', $message);
        if($user->getPhone()){
            $notPhone = new Notification($user->getPhone());
            $notPhone->sendTo($user->getName(), 'контакт', $message);
        }
    }else{
        $notEmail = new Notification($user->getEmail());
        $censor = new Censor();
        $notEmail->sendTo($user->getName(), 'контакт', $censor->censor($message));
        if($user->getPhone()){
            $notPhone = new Notification($user->getPhone());
            $censor = new Censor();
            $notPhone->sendTo($user->getName(), 'контакт', $censor->censor($message));
        }
    }
}

$user1 = new User('Иван', 'ivan@email.ru', 8800000, 18);
$user2 = new User('Дима', 'dima@email.ru', '', '');

notify($user1, 'Сообщени 1');
notify($user2, 'Сообщени 2');