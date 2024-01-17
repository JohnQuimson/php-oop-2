<?php

trait Id
{
  private $id;

  // Getter per l'ID
  public function get_id()
  {
    return $this->id;
  }

  // Setter per l'ID
  public function set_id($_id)
  {
    $this->id = $_id;
  }
}

// Tentativo di utilizzo di exception
// trait Id
// {
//   private $id;

//   // Getter
//   public function get_id()
//   {
//     if (is_int($id)) {

//       return $this->id;
//     }
//   }

//   // Setter
//   public function set_id($_id)
//   {
//     $this->id = $_id;
//   }
// }
