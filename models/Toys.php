<?php

require_once __DIR__ . '/Product.php';


class Toys extends Product
{
  private $material;
  private $size;



  // Getters
  public function get_material()
  {
    return $this->material;
  }
  public function get_size()
  {
    return $this->size;
  }

  // Setters
  public function set_material($_material)
  {
    $this->material = $_material;
  }
  public function set_size($_size)
  {
    $this->size = $_size;
  }
}
