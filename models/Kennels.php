<?php

require_once __DIR__ . '/Product.php';


class Kennels extends Product
{

  private $colour;
  private $is_washable;


  // Getters
  public function get_colour()
  {
    return $this->colour;
  }
  public function get_is_washable()
  {
    return $this->is_washable;
  }

  // Setters
  public function set_colour($_colour)
  {
    $this->colour = $_colour;
  }
  public function set_is_washable($_is_washable)
  {
    $this->is_washable = $_is_washable;
  }
}
