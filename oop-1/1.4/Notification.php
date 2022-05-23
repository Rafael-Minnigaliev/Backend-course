<?php
namespace oop\Notification;

class Notification{
    public $notificationChannel;

    public function __construct(string $notificationChannel){
        $this->notificationChannel = $notificationChannel;
    }

    public function sendTo($name, $contact, $message){
        echo 'Уведомление клиенту: ' . $name . ' на ' . $this->notificationChannel . ' ' . $contact . ': ' . $message . '<br>';
    }
}