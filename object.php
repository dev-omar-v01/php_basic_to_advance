<?php 
 class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;

    }
    public function message(){
      return "my Car is a ".$this->color."".$this->model."!";
    }
 }
 $myCar =new Car("black","Volvo");
 echo $myCar ->message();

?>