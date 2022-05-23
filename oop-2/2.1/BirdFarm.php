<?php 
namespace oop\BirdFarm;

use oop\Farm\Farm;

require_once 'Farm.php';

class BirdFarm extends Farm{
    public function rollCall(){
        echo 'Птиц на птицеферме: ' . count($this->animals) . '<br>';
        parent::rollCall();
    }
}