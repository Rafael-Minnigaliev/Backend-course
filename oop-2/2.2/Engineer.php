<?php
namespace oop\Engineer;

use oop\BlackBox\BlackBox;

require_once 'BlackBox.php';

class Engineer{
    private $accessLevel;

    public function __construct($accessLevel){
        $this->accessLevel = $accessLevel;
    }

    public function decodeBox(BlackBox $blackBox){
        $blackBox->getData($this->accessLevel);
    }
}