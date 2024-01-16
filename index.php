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

$FoodDog = new Food(
  'Monge Medium Adult Ricco di Pollo',
  14.99,
  'https://arcaplanet.vtexassets.com/arquivos/ids/243743/monge-cane-adult-medium.jpg?v=637455010024930000',
  ['Pollo', 'Adulto', 'Tutte le razze', 'Media'],
  false
);
var_dump($FoodDog);

$ToyDog = new Toys(
  'Gioco per Cane in Stoffa Peluche con Squittio',
  5.90,
  'https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000',
  ['Mobido', 'Adulto']
);
var_dump($ToyDog);

$KennelDog = new Kennels(
  'Cuscino Prestige Ecopelle Chocolate',
  40.99,
  'https://arcaplanet.vtexassets.com/arquivos/ids/275819/Luna-Teo-Knightsbridge-Chocolate-Mattress-M.jpg?v=638007348625530000',
  ['Ecopelle', 'Beige', 'Lavabile']
);
var_dump($KennelDog);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 2</title>
</head>

<body>
  <!-- Header -->
  <header>
    <h1>Animal Shop</h1>
  </header>
  <!-- Main -->
  <main>
    <h2>Dog</h2>
    <!-- img -->
    <div class="cont-img">
      <img src="<?php echo $FoodDog->immagine; ?>" alt="<?php echo $FoodDog->item; ?>">
    </div>
    <!-- nome -->
    <h3><?php echo $FoodDog->item; ?></h3>
    <!-- prezzo -->
    <span>Prezzo: <?php echo $FoodDog->prezzo; ?>€</span>
    <!-- dettagli -->
    <ul>
      <?php foreach ($FoodDog->dettagli as $dettaglio) : ?>
        <li><?php echo $dettaglio ?></li>
      <?php endforeach ?>
    </ul>
    <p>Gluten Free: <?php echo $FoodDog->gluten_free ? 'Sì' : 'No'; ?></p>
  </main>
</body>

</html>