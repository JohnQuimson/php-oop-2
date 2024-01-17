<?php

require_once __DIR__ . '/Product.php';


class Food extends Product
{

  private $expiration_date;
  private $is_gluten_free;


  // Getters
  public function get_expiration_date()
  {
    return $this->expiration_date;
  }
  public function get_is_gluten_free()
  {
    return $this->is_gluten_free;
  }

  // Setters
  public function set_expiration_date($_expiration_date)
  {
    $this->expiration_date = $_expiration_date;
  }
  public function set_is_gluten_free($_is_gluten_free)
  {
    $this->is_gluten_free = $_is_gluten_free;
  }
}
