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

// DOG
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

// CAT
$FoodCat = new Food(
  'Brekkies Cat Bontà e Benessere Urinary Care',
  7.99,
  'https://arcaplanet.vtexassets.com/arquivos/ids/270578/brekkies-cat-bonta-benessere-urinary-care-1-5-kg.jpg?v=637849996178730000',
  ['Pollo', 'Adulto', 'Tutte le razze'],
  true
);
var_dump($FoodCat);

$ToyCat = new Toys(
  'Gioco Pesce Guizzante per Gatto',
  9.90,
  'https://arcaplanet.vtexassets.com/arquivos/ids/264784/trixie-pesce-guizzante-gioco-gatto.jpg?v=637722153844830000',
  ['Elettronico', 'Adulto']
);
var_dump($ToyCat);

$KennelCat = new Kennels(
  'Amaca da fissare al muro',
  32.90,
  'https://arcaplanet.vtexassets.com/arquivos/ids/275819/Luna-Teo-Knightsbridge-Chocolate-Mattress-M.jpg?v=638007348625530000',
  ['Tessuto', 'Bianco/Beige', 'Lavabile']
);
var_dump($KennelCat);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 2</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bootstrap CSS -->

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Custom CSS -->
</head>

<body>
  <!-- Header -->
  <header>
    <h1 class="text-center">Animal Shop</h1>
  </header>
  <!-- Main -->
  <main>
    <h2 class="text-center mt-5 mb-3">Dog</h2>
    <div class="container-xxl">
      <div class="row m-3">
        <!-- tessera 1 -->
        <div class="tessera col-4">
          <!-- img -->
          <div class="cont-img">
            <img src="<?php echo $FoodDog->immagine; ?>" alt="<?php echo $FoodDog->item; ?>">
          </div>
          <div class="cont-info">
            <!-- nome -->
            <h3><?php echo $FoodDog->item; ?></h3>
            <!-- prezzo -->
            <span>Prezzo: <?php echo $FoodDog->prezzo; ?>€</span>
            <!-- dettagli -->
            <p>Dettagli:</p>
            <ul>
              <?php foreach ($FoodDog->dettagli as $dettaglio) : ?>
                <li><?php echo $dettaglio ?></li>
              <?php endforeach ?>
            </ul>
            <p>Gluten Free: <?php echo $FoodDog->gluten_free ? 'Sì' : 'No'; ?></p>
          </div>
        </div>

        <!-- tessera 2 -->
        <div class="tessera col-4">
          <!-- img -->
          <div class="cont-img">
            <img src="<?php echo $ToyDog->immagine; ?>" alt="<?php echo $FoodDog->item; ?>">
          </div>
          <div class="cont-info">
            <!-- nome -->
            <h3><?php echo $ToyDog->item; ?></h3>
            <!-- prezzo -->
            <span>Prezzo: <?php echo $ToyDog->prezzo; ?>€</span>
            <!-- dettagli -->
            <p>Dettagli:</p>
            <ul>
              <?php foreach ($ToyDog->dettagli as $dettaglio) : ?>
                <li><?php echo $dettaglio ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>

        <!-- tessera 3 -->
        <div class="tessera col-4">
          <!-- img -->
          <div class="cont-img">
            <img src="<?php echo $KennelDog->immagine; ?>" alt="<?php echo $FoodDog->item; ?>">
          </div>
          <div class="cont-info">
            <!-- nome -->
            <h3><?php echo $KennelDog->item; ?></h3>
            <!-- prezzo -->
            <span>Prezzo: <?php echo $KennelDog->prezzo; ?>€</span>
            <!-- dettagli -->
            <p>Dettagli:</p>
            <ul>
              <?php foreach ($KennelDog->dettagli as $dettaglio) : ?>
                <li><?php echo $dettaglio ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <h2 class="text-center mt-5 mb-3">Cat</h2>
    <div class="container-xxl">
      <div class="row m-3">
        <!-- tessera 1 -->
        <div class="tessera col-4">
          <!-- img -->
          <div class="cont-img">
            <img src="<?php echo $FoodCat->immagine; ?>" alt="<?php echo $FoodCat->item; ?>">
          </div>
          <div class="cont-info">
            <!-- nome -->
            <h3><?php echo $FoodCat->item; ?></h3>
            <!-- prezzo -->
            <span>Prezzo: <?php echo $FoodCat->prezzo; ?>€</span>
            <!-- dettagli -->
            <p>Dettagli:</p>
            <ul>
              <?php foreach ($FoodCat->dettagli as $dettaglio) : ?>
                <li><?php echo $dettaglio ?></li>
              <?php endforeach ?>
            </ul>
            <p>Gluten Free: <?php echo $FoodCat->gluten_free ? 'Sì' : 'No'; ?></p>
          </div>
        </div>

        <!-- tessera 2 -->
        <div class="tessera col-4">
          <!-- img -->
          <div class="cont-img">
            <img src="<?php echo $ToyCat->immagine; ?>" alt="<?php echo $FoodDog->item; ?>">
          </div>
          <div class="cont-info">
            <!-- nome -->
            <h3><?php echo $ToyCat->item; ?></h3>
            <!-- prezzo -->
            <span>Prezzo: <?php echo $ToyCat->prezzo; ?>€</span>
            <!-- dettagli -->
            <p>Dettagli:</p>
            <ul>
              <?php foreach ($ToyCat->dettagli as $dettaglio) : ?>
                <li><?php echo $dettaglio ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>

        <!-- tessera 3 -->
        <div class="tessera col-4">
          <!-- img -->
          <div class="cont-img">
            <img src="<?php echo $KennelCat->immagine; ?>" alt="<?php echo $FoodDog->item; ?>">
          </div>
          <div class="cont-info">
            <!-- nome -->
            <h3><?php echo $KennelCat->item; ?></h3>
            <!-- prezzo -->
            <span>Prezzo: <?php echo $KennelCat->prezzo; ?>€</span>
            <!-- dettagli -->
            <p>Dettagli:</p>
            <ul>
              <?php foreach ($KennelCat->dettagli as $dettaglio) : ?>
                <li><?php echo $dettaglio ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>