<?php
namespace oop\Censor;

class Censor{
    public function censor($message){
        return $message . ' - процензурировано';
    }
}