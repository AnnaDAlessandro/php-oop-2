<?php
require_once __DIR__ . "/models/Products.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Game.php";


$dogs = new Category('Dogs','fa-solid fa-dog');
$cats = new Category('Cats','fa-solid fa-cat');


$products = new Products( "Collare",10.00, 
"https://images.unsplash.com/photo-1709833226085-bef3dc6c7e9e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
true,10,$dogs); 
 


$food = new Food("Crocchette", 15.00, 
"https://images.unsplash.com/photo-1568640347023-a616a30bc3bd?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
true,10,$dogs);




$game = new Game("Osso di gomma",5.00, 
"https://images.unsplash.com/photo-1535294435445-d7249524ef2e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
true,8,$dogs);


$crocchette = new Food( "Crocchette per Gatti sterilizzati",40.00, 
"https://images.unsplash.com/photo-1571151596869-2663a84c1e41?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
true,10,$cats); 

$tiragraffi = new Game("Tiragraffi",15.00, 
"https://plus.unsplash.com/premium_photo-1664371675043-a0a8e5173d9c?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
true,8,$cats);

$topo = new Game("Topo di plastica",8.00, 
"https://images.unsplash.com/photo-1615332591802-dddd86b35238?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
true,8,$cats);

$food->setCalories(200);
$game->setGenere("bone");

$products=[
    $products,
    $food,
    $game,
    $crocchette,
    $tiragraffi,
    $topo
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>OOP-2</title>
</head>
<body>

  <h1 class="text-center">Animals Shop</h1>
  <main class="container">
    <div class="row">
     <?php foreach ($products as $element):  ?>
        <div class="col-4 my-5">
        <div class="card position-relative" style="width: 18rem; height: 35rem;">
        <div class="position-absolute top-0 end-0 bg-light p-3 rounded-circle">
            <?= $element-> getIcon() ?>

        </div>
           <img src="<?= $element->image ?>" class="card-img" alt="...">
           <div class="card-body">
           <h5 class="card-title"><?= $element->name ?></h5>
           <p class="card-text"><?= $element->getProductsDetails()?></p>

        </div>
        </div>

        </div>
     <?php endforeach; ?>

    </div>
  </main>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
