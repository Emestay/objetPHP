<?php

class vehicule {
    private $name;
    private $speed;
    private $color;

    private $type;


    public function getColor()
    {
        return $this->color;
    }
    private $wheels;


    public function __construct($name, $speed, $color, $wheels)
    {
        $this->name = $name;
        $this->speed = $speed;
        $this->color = $color;
        $this->wheels = $wheels;
    }

    public function detect()
    {
        if($this->wheels == 2) {
            $this->type = 'moto';
        } else {
            $this->type = 'Auto';
        }
        echo "<p> $this->name est une $this->type </p>";
    }



    public function boost()
    {
        $this->speed = $this->speed + 50;
        echo "<p> $this->name roule désormais a  $this->speed </p>";
    }

    public function plusRapide($compare){
        $speed = $this->speed ;
        if($compare->speed == $speed){
            echo "<p> $this->name et l'autre vont a la meme vitesse </p>";
        }
        elseif($compare->speed < $speed){
            echo "<p> $this->name va plus vite que l'autre  </p>";
        }
        elseif($compare->speed > $speed){
            echo "<p> $this->name va plus lentement que l'autre  </p>";
        }
    }

}

