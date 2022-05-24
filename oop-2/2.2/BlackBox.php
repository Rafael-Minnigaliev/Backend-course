<?php

namespace WPTT\Oop\BlackBox;

class BlackBox
{
    private $data = [];

    public function addLog(string $message)
    {
        $this->data[] = '#' . (count($this->data) + 1) . ' ' . $message . '<br>';
    }

    public function getData(int $accessLevel)
    {
        $text = '';
        if ($accessLevel <= 1) {
            $text .= 'Доступ запрещен <br>';
        } elseif ($accessLevel > 1 && $accessLevel <= 3) {
            $text .= current($this->data) . ' Ваш уровень доступа не позволяет получить больше данных <br>';
        } else {
            foreach ($this->data as $item) {
                $text .= $item;
            }
        }
        return $text;
    }
}
