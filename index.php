<?php

require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toys.php';
require_once __DIR__ . '/models/Kennels.php';



// Categorie
$cani = new Category('Cani', '<i class="fa-solid fa-dog"></i>');
$gatti = new Category('Gatti', '<i class="fa-solid fa-cat"></i>');

// Prodotti
$food_dog = new Food(
  'Monge Medium Adult Ricco di Pollo',
  14.99,
  'https://arcaplanet.vtexassets.com/arquivos/ids/243743/monge-cane-adult-medium.jpg?v=637455010024930000',
  'Dettagli cibo cane',
  $cani
);
$food_dog->set_expiration_date('13/05/2024');

$toy_cat = new Toys(
  'Gioco Pesce Guizzante per Gatto',
  9.90,
  'https://arcaplanet.vtexassets.com/arquivos/ids/264784/trixie-pesce-guizzante-gioco-gatto.jpg?v=637722153844830000',
  'Dettagli gioco gatto',
  $gatti
);
$toy_cat->set_material('Piume');

$kennel_cat = new Kennels(
  'Amaca da fissare al muro',
  32.90,
  'https://arcaplanet.vtexassets.com/arquivos/ids/265702/PHO_PRO_CAT_CLIP_49920-01-49923-1_-SALL_-APRKU_-V1.jpg?v=637737941822300000',
  'Dettagli cuccia gatto',
  $gatti
);

$toy_dog = new Toys(
  'Gioco per Cane in Stoffa Peluche con Squittio',
  5.90,
  'https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000',
  'Dettagli gioco cane',
  $cani
);
$toy_dog->set_material('Stoffa');


$kennel_dog = new Kennels(
  'Cuscino Prestige Ecopelle Chocolate',
  40.99,
  'https://arcaplanet.vtexassets.com/arquivos/ids/275819/Luna-Teo-Knightsbridge-Chocolate-Mattress-M.jpg?v=638007348625530000',
  'Dettagli cuccia cane',
  $cani
);

$food_cat = new Food(
  'Brekkies Cat Bontà e Benessere Urinary Care',
  7.99,
  'https://arcaplanet.vtexassets.com/arquivos/ids/270578/brekkies-cat-bonta-benessere-urinary-care-1-5-kg.jpg?v=637849996178730000',
  'Dettagli cibo gatto',
  $gatti
);
$food_cat->set_is_gluten_free('Sì');

// ALL products array
$products = [$food_dog, $toy_cat, $kennel_cat, $toy_dog, $kennel_dog, $food_cat];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 2</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font Awesome -->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bootstrap CSS -->

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Custom CSS -->
</head>

<body class="pb-3">
  <!-- Header -->
  <header>
    <h1 class="text-center p-5">Animal Shop</h1>
  </header>
  <!-- Main -->
  <main>
    <div class="container">
      <div class="row g-5">
        <?php foreach ($products as $product) : ?>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo $product->get_immagine() ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $product->get_item(); ?></h5>

                <div class="categoria">
                  <p>Categoria:
                    <?php
                    echo $product->get_category()->get_name();
                    echo $product->get_category()->get_icon();
                    ?>
                  </p>
                  <strong>Prezzo: <?php echo $product->get_prezzo(); ?> €</strong>
                </div>
                <p class="card-text"><?php echo $product->get_dettagli(); ?></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>

</body>

</html>