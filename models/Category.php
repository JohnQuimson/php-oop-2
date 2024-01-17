<?php

class Category
{
  private $name;
  private $icon;

  public function __construct($_name, $_icon)
  {
    $this->set_name($_name);
    $this->set_icon($_icon);
  }


  // Getters
  public function get_name()
  {
    return $this->name;
  }
  public function get_icon()
  {
    return $this->icon;
  }

  // Setters
  public function set_name($_name)
  {
    $this->name = $_name;
  }
  public function set_icon($_icon)
  {
    $this->icon = $_icon;
  }
}
