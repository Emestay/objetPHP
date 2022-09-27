<?php
class Vroom {
    
    public $name;
    public $color;
    public $vitesse;
    public $roue;


    function __construct($name, $color, $roue, $vitesse ) {
        $this->name = $name;
        $this->color = $color;
        $this->roue = $roue;
        $this->vitesse = $vitesse;
      }




}
class Fruits {

    public $fruit;
    public $couleur;
    public $type;

    public function __construct($fruit, $couleur, $type)
    {
        $this->fruit = $fruit;
        $this->couleur = $couleur;
        $this->type = $type;
    }
}
  




