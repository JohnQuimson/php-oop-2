<?php

class Product
{
  private $item;
  private $prezzo;
  private $immagine;
  private $dettagli;
  private $category;


  function __construct($_item, $_prezzo, $_immagine, $_dettagli, Category $_category)
  {
    $this->set_item($_item);
    $this->set_prezzo($_prezzo);
    $this->set_immagine($_immagine);
    $this->set_dettagli($_dettagli);
    $this->set_category($_category);
  }

  // Getters
  public function get_item()
  {
    return $this->item;
  }
  public function get_prezzo()
  {
    return $this->prezzo;
  }
  public function get_immagine()
  {
    return $this->immagine;
  }
  public function get_dettagli()
  {
    return $this->dettagli;
  }
  public function get_category()
  {
    return $this->category;
  }

  // Setters
  public function set_item($_item)
  {
    $this->item = $_item;
  }
  public function set_prezzo($_prezzo)
  {
    $this->prezzo = $_prezzo;
  }
  public function set_immagine($_immagine)
  {
    $this->immagine = $_immagine;
  }
  public function set_dettagli($_dettagli)
  {
    $this->dettagli = $_dettagli;
  }
  public function set_category($_category)
  {
    $this->category = $_category;
  }
}
