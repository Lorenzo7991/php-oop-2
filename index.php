<?php
include_once __DIR__ . '/config/data-products.php';

require 'classes/category.php';
require 'classes/product.php';

// Instantiation of categories
$categoryDog = new Category("Dog");
$categoryCat = new Category("Cat");
$categoryBirds = new Category("Birds");
$categoryFish = new Category("Fish");

// Creation of product objects using the provided data
$products = [];
foreach ($dataProducts as $productData) {
    $product = new Product(
        $productData['name'],
        $productData['description'],
        $productData['price'],
        $productData['category'],
        $productData['images']
    );
    $products[] = $product;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico">
    <title>(OOP 2)e-shop</title>
    <!-- MyCSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <!-- Todo: Spostare l'header in un modello separato -->
    <header class="d-flex flex-column align-items-center mb-4 bg-success text-white">
        <h1 class="display-4 fw-bold">Animal Planet</h1>
        <p class="lead fw-semibold">The ultimate destination for pet lovers!</p>
    </header>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($products as $product): ?>
                <div class="col">
                    <div class="card p-3 h-100">
                        <img src="<?= $product->getImages(); ?>" alt="<?= $product->getName(); ?>"
                            class="card-img-top product-image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $product->getName(); ?>
                            </h5>
                            <p class="card-text">
                                <?= $product->getDescription(); ?>
                            </p>
                            <p class="card-text"><strong>
                                    <?= $product->getPrice(); ?> €
                                </strong></p>
                            <p class="card-text"><small class="text-muted">
                                    <?= $product->getCategory(); ?>
                                </small></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>