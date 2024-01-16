<?php

class Animal
{
  public $foods;
  public $toys;
  public $kennels;

  function __construct($_foods, $_toys, $_kennels)
  {
    $this->foods = $_foods;
    $this->toys = $_toys;
    $this->kennels = $_kennels;
  }
}

$dog = new Animal(
  ['Maiale', 'Manzo'],
  ['Peluche', 'Palla', 'Osso', 'Corda', 'Frisbee'],
  ['Brandina', 'Ciambella Pelosa', 'Cuscino', 'Coperta']
);
var_dump($dog);

$cat = new Animal(
  ['Tacchino', 'Pollo', 'Salmone'],
  ['Topolino', 'Pallina', 'bacchetta', 'Laser'],
  ['Amaca', 'Cuscino', 'Coperta']
);
var_dump($cat);
