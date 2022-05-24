<?php

namespace WPTT\Oop\Plane;

use WPTT\Oop\BlackBox\BlackBox;

require_once 'BlackBox.php';

class Plane
{
    private $blackBox;

    public function __construct($blackBox)
    {
        $this->blackBox = $blackBox;
    }

    public function flyAndCrush()
    {
        $this->addLog('взлёт');
        $this->addLog('отказ двигателя');
        $this->addLog('стремительное падение');
    }

    private function addLog(string $message)
    {
        $this->blackBox->addLog(date('Y.m.d H:i:s') . ' ' . $message);
    }

    public function getBlackBox(): BlackBox
    {
        return $this->blackBox;
    }
}
