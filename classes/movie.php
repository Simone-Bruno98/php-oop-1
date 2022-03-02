<?php
class Movie {
    private $titolo;
    private $genere;
    private $anno;
    private $regista;
    private $cast;
  
    public function __construct($_titolo, $_genere, $_anno, $_regista, $_cast) {
      $this->titolo = $_titolo;
      $this->genere = $_genere;
      $this->anno = $_anno;
      $this->regista = $_regista;
      $this->cast = $_cast;
    }
  
    public function getInfo() {
      return "{$this->titolo} {$this->genere} {$this->anno} {$this->regista} {$this->cast}";
    }
  }
?>