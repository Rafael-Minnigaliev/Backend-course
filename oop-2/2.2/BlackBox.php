<?php
namespace oop\BlackBox;

class BlackBox{
    private $data = [];

    public function addLog(string $message){
        $this->data[] ='#' . (count($this->data) + 1) . ' ' . $message . '<br>';
    }

    public function getData(int $accessLevel){
        if($accessLevel <= 1){
            echo 'Доступ запрещен <br>';
        } elseif($accessLevel > 1 && $accessLevel <= 3){
            echo $this->data[0] . ' Ваш уровень доступа не позволяет получить больше данных <br>';
        }else{
            foreach($this->data as $item){
                echo $item . '<br>';
            }
        }
    }
}