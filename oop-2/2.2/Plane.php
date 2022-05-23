<?php
namespace oop\Plane;

use oop\BlackBox\BlackBox;

require_once 'BlackBox.php';

class Plane{
    private $blackBox;

    public function flyAndCrush(){
        $this->blackBox = new BlackBox();
        $this->addLog('взлёт');
        $this->addLog('отказ двигателя');
        $this->addLog('стремительное падение');
    }

    private function addLog(string $message){
        $this->blackBox->addLog(date('Y.m.d H:i:s') . ' ' . $message);
    }

    public function getBlackBox(): BlackBox{
        return $this->blackBox;
    }
}