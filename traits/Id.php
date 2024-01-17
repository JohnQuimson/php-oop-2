<?php

trait Id
{
  private $id;

  // Getter
  public function get_id()
  {
    return $this->id;
  }

  // Setter
  public function set_id($_id)
  {
    $this->id = $_id;
  }
}
