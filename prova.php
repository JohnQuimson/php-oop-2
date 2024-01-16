<?php

class Animal
{
  public $foods;
  public $toys;
  public $kennels;

  function __construct($_foods, $_toys, $_kennels)
  {
    $this->foods = $_foods;
    $this->toys = $_toys;
    $this->kennels = $_kennels;
  }
}

class Product
{
  public $nome;
  public $prezzo;
  public $immagine;

  function __construct($_prezzo, $_immagine, $_details)
  {
    $this->prezzo = $_prezzo;
    $this->immagine = $_immagine;
    $this->details = $_details;
  }
}

$dog = new Animal(
  ['Maiale', 'Manzo'],
  ['Peluche', 'Palla', 'Osso', 'Corda', 'Frisbee'],
  ['Brandina', 'Ciambella Pelosa', 'Cuscino', 'Coperta']
);
var_dump($dog);

$cat = new Animal(
  ['Tacchino', 'Pollo', 'Salmone'],
  ['Topolino', 'Pallina', 'bacchetta', 'Laser'],
  ['Amaca', 'Cuscino', 'Coperta']
);
var_dump($cat);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programmazione Orientata ad Oggetti 2</title>
</head>

<body>
  <!-- Header -->
  <header>
    <h1>Animal Shop</h1>
  </header>
  <!-- Main -->
  <main>
    <!-- SEZIONE CANE -->
    <div class="cont-dog">
      <h2>Dog</h2>
      <div class="cont-products">
        <!-- cibo -->
        <div class="cont-food">
          <h4>Food</h4>
          <ul>
            <?php foreach ($dog->foods as $food) : ?>
              <li>
                <?php echo $food; ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <!-- giochi -->
        <div class="cont-toys">
          <h4>Toys</h4>
          <ul>
            <?php foreach ($dog->toys as $toy) : ?>
              <li>
                <?php echo $toy; ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <!-- cucce -->
        <div class="cont-kennels">
          <h4>Kennels</h4>
          <ul>
            <?php foreach ($dog->kennels as $kennel) : ?>
              <li>
                <?php echo $kennel; ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- SEZIONE GATTO -->
    <div class="cont-cat">
      <h2>Cat</h2>
      <div class="cont-products">
        <!-- cibo -->
        <div class="cont-food">
          <h4>Food</h4>
          <ul>
            <?php foreach ($cat->foods as $food) : ?>
              <li>
                <?php echo $food; ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <!-- giochi -->
        <div class="cont-toys">
          <h4>Toys</h4>
          <ul>
            <?php foreach ($cat->toys as $toy) : ?>
              <li>
                <?php echo $toy; ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <!-- cucce -->
        <div class="cont-kennels">
          <h4>Kennels</h4>
          <ul>
            <?php foreach ($cat->kennels as $kennel) : ?>
              <li>
                <?php echo $kennel; ?>
              </li>
            <?php endforeach ?>
          </ul>


        </div>
      </div>
    </div>
  </main>
</body>

</html>