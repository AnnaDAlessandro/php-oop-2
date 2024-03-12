<?php
require_once __DIR__ . "/models/Products.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Game.php";


$dogs = new Category('Dogs','fa-solid fa-dog');
$cats = new Category('Cats','fa-solid fa-cat');


$products = new Products("Collare", 10.00, 
"https://images.unsplash.com/photo-1709833226085-bef3dc6c7e9e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
$dogs,true,10);


$food = new Food("Crocchette", 15.00, 
"https://images.unsplash.com/photo-1568640347023-a616a30bc3bd?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
$dogs,true,10);



$game = new Game("Osso di gomma", 5.00, 
"https://images.unsplash.com/photo-1535294435445-d7249524ef2e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
$dogs,true,8);

$food->setCalories(200);
$game->setGenere("bone");

var_dump($cats,$dog)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>OOP-2</title>
</head>
<body>
    
</body>
</html>