<?php 
namespace oop\HungryCat;

class HungryCat{
    public $name;
    public $color;
    public $favoriteFood;

    public function __construct($name, $color, $favoriteFood){
        $this->name = $name;
        $this->color = $color;
        $this->favoriteFood = $favoriteFood;
    }

    public function eat($food){
        if($food == $this->favoriteFood){
            echo 'Голодный кот ' . $this->name . ', особые приметы: цвет - ' . $this->color . ', съел ' . $food . ' и замурчал \'мррррр\' от своей любимой еды <br>';
        } else {
            echo 'Голодный кот ' . $this->name . ', особые приметы: цвет - ' . $this->color . ', съел ' . $food . '<br>';
        }
    }
}

