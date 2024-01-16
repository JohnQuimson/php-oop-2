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
