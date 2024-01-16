<?php

class Product
{
  public $item;
  public $prezzo;
  public $immagine;
  public $dettagli;


  function __construct($_item, $_prezzo, $_immagine, $_dettagli)
  {
    $this->item = $_item;
    $this->prezzo = $_prezzo;
    $this->immagine = $_immagine;
    $this->dettagli = $_dettagli;
  }
}

class Food extends Product
{
  public $gluten_free;

  function __construct($_item, $_prezzo, $_immagine, $_dettagli, $gluten_free)
  {
    parent::__construct($_item, $_prezzo, $_immagine, $_dettagli);
    $this->gluten_free = $gluten_free;
  }
}

class Toys extends Product
{
  public function __construct($_item, $_prezzo, $_immagine, $_dettagli)
  {
    parent::__construct($_item, $_prezzo, $_immagine, $_dettagli);
  }
}

class Kennels extends Product
{
  public function __construct($_item, $_prezzo, $_immagine, $_dettagli)
  {
    parent::__construct($_item, $_prezzo, $_immagine, $_dettagli);
  }
}
