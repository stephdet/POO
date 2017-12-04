<?php

  Class velo {
    public $couleur;
    public $marque;
    public $tech;

    // public function __construct($color,$brand) {
    //   $this->couleur=$color;
    //   $this->marque=$brand;
    //   echo "Mon velo est de couleur" .$this->couleur. "et de la marque" .$this->marque;
    // }
    public function poduit($color,$brand,$techno) {
      $this->couleur=$color;
      $this->marque=$brand;
      $this->pliable=$techno;
      echo "Mon velo est de couleur" .$this->couleur. "et de la marque" .$this->marque. "et de technologie" .$this->tech;




    }







  }
?>
