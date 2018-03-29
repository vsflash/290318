<?php

abstract class Animals {
    /**
     *
     * @var string 
     */
    private $view;
    /**
     *
     * @var string 
     */
    private $breed;
    /**
     *
     * @var int 
     */
    private $age;

    public function __construct($view, $breed, $age) {
        $this->view = $view;
        $this->breed = $breed;
        $this->age = $age;
    }
    
    public function __toString() {
        $str='';
        $str.='Вид: ' . $this->view.'</br>';
        $str.='Порода: ' . $this->breed.'</br>';
        $str.='Возраст: ' . $this->age.'</br>';
        return $str;
    }

}
